<?php
// inc/errors.php — central error & exception handling

// --- config ---
if (!defined('APP_ENV')) define('APP_ENV', 'prod'); // 'dev' or 'prod'
if (!defined('ERROR_LOG_FILE')) define('ERROR_LOG_FILE', __DIR__ . '/../logs/php_errors.log');

// --- ensure log dir ---
$__logDir = dirname(ERROR_LOG_FILE);
if (!is_dir($__logDir)) @mkdir($__logDir, 0775, true);

// --- helpers ---
function err_now(): string { return date('c'); }
function err_client_ip(): string {
  return $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}
function err_is_api(): bool {
  $uri = $_SERVER['REQUEST_URI'] ?? '';
  $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
  return (strpos($uri, '/api/') !== false) || (stripos($accept, 'application/json') !== false);
}
function err_is_diag(): bool {
  // soft switch to reveal details (never link this publicly)
  return isset($_GET['diag']) && $_GET['diag'] == '1';
}
function err_current_user_id() {
  // best-effort if your bootstrap defines current_user()
  if (function_exists('current_user')) {
    $u = current_user();
    return $u['id'] ?? null;
  }
  return null;
}
function err_log(array $row): void {
  $row['ts']      = err_now();
  $row['url']     = $_SERVER['REQUEST_METHOD'] . ' ' . ($_SERVER['REQUEST_URI'] ?? '');
  $row['ip']      = err_client_ip();
  $row['user_id'] = err_current_user_id();
  $row['ua']      = $_SERVER['HTTP_USER_AGENT'] ?? '';
  $line = json_encode($row, JSON_UNESCAPED_SLASHES);
  @file_put_contents(ERROR_LOG_FILE, $line . PHP_EOL, FILE_APPEND);
}
function err_render_html($title, $message, $details = null, $code = 500) {
  http_response_code($code);
  $safeTitle = htmlspecialchars($title);
  $safeMsg   = nl2br(htmlspecialchars($message));
  $safeDet   = $details ? '<pre style="white-space:pre-wrap">'.htmlspecialchars($details).'</pre>' : '';
  echo <<<HTML
<!doctype html><meta charset="utf-8">
<title>{$safeTitle}</title>
<style>
  body { background:#0b0c0e; color:#e7e9ea; font:16px/1.5 system-ui,-apple-system,Segoe UI,Roboto; padding:24px; }
  .card { background:#0f1114; border:1px solid #1c1f26; border-radius:14px; padding:18px; max-width:900px; }
  .muted { color:#9aa3ad }
  code,pre { background:#0b0c0e; border:1px solid #1c1f26; border-radius:10px; padding:10px; display:block; }
</style>
<div class="card">
  <h2>Something went wrong</h2>
  <div class="muted">An error occurred while processing your request.</div>
  <p>{$safeMsg}</p>
  {$safeDet}
  <div class="muted" style="margin-top:10px;">If this keeps happening, send a screenshot of this page to the admin.</div>
</div>
HTML;
}
function err_render_json($message, $details = null, $code = 500) {
  http_response_code($code);
  header('Content-Type: application/json');
  $out = ['ok' => false, 'error' => $message];
  if ($details !== null) $out['details'] = $details;
  echo json_encode($out);
}

// --- convert PHP errors to exceptions (so one flow handles all) ---
set_error_handler(function($severity, $message, $file, $line) {
  // Respect @-silence
  if (!(error_reporting() & $severity)) return false;
  throw new ErrorException($message, 0, $severity, $file, $line);
});

// --- exception handler ---
set_exception_handler(function($ex) {
  $trace = $ex->getTraceAsString();
  $row = [
    'level'   => 'error',
    'type'    => get_class($ex),
    'message' => $ex->getMessage(),
    'file'    => $ex->getFile(),
    'line'    => $ex->getLine(),
    'trace'   => $trace,
  ];
  err_log($row);

  $isApi = err_is_api();
  $show  = (APP_ENV === 'dev') || err_is_diag();

  $summary = $ex->getMessage() . " in " . basename($ex->getFile()) . ":" . $ex->getLine();
  $details = $show ? ($summary . "\n\n" . $trace) : null;

  if ($isApi) err_render_json('Internal Server Error', $details, 500);
  else        err_render_html('Internal Server Error', $
