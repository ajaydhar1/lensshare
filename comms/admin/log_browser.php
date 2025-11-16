<?php
// admin/log_browser.php — Safe log browser (single-site, multi-root), read-only
// Usage: /admin/log_browser.php?token=YOUR_INIT_ADMIN_TOKEN
// Optional: &root=<key>&file=<name>&a=tail&n=500&q=error&autorefresh=1
//
// SECURITY:
// - Token required.
// - Only scans allowlisted roots (no user-supplied paths).
// - Only .log/.txt/.jsonl files in discovered dirs.
// - No traversal; raw/download set nosniff.
//
// DESIGN:
// - "Root" = allowlisted log folder (GLOBAL, DATA, etc.).
// - JSONL renders line-by-line (plain text; <mark> highlights q).

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();
date_default_timezone_set('America/New_York');
header_remove('X-Powered-By');

require_once __DIR__ . '/../config.php';

define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);

// ---- auth ----
$TOKEN = $_GET['token'] ?? '';
if (!$TOKEN || !hash_equals(INIT_ADMIN_TOKEN, $TOKEN)) { http_response_code(403); echo "forbidden"; exit; }

// ---- config ----
// Allowlist log roots. Adjust as your project grows.
const LOG_ROOTS = [
  'GLOBAL' => __DIR__ . '/../logs',       // project logs/
  'DATA'   => __DIR__ . '/../data/logs',  // data/logs (if you mirror events there)
];
// limits
const MAX_FILES_LISTED = 2000;

// ---- helpers ----
function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8'); }
function safe_ext(string $fn): bool { return (bool)preg_match('~\.(log|txt|jsonl)\z~i', $fn); }

function root_list(): array {
  $out = [];
  foreach (LOG_ROOTS as $key=>$dir) {
    $rp = realpath($dir);
    if ($rp && is_dir($rp) && is_readable($rp)) {
      $out[$key] = ['key'=>$key, 'dir'=>$rp];
    }
  }
  // Keep GLOBAL first when available
  if (isset($out['GLOBAL'])) {
    $global = ['GLOBAL'=>$out['GLOBAL']]; unset($out['GLOBAL']); $out = $global + $out;
  }
  return $out;
}

$roots = root_list();
$hasMultipleRoots = count($roots) > 1;

// Back-compat: accept ?room= but prefer ?root=
$rootKey = $_GET['root'] ?? $_GET['room'] ?? (array_key_first($roots) ?: null);
$root    = ($rootKey && isset($roots[$rootKey])) ? $roots[$rootKey] : null;

define('LOG_DIR_SELECTED', $root ? $root['dir'] : null);

function resolve_log_path(?string $name): ?string {
  if (!$name || !LOG_DIR_SELECTED) return null;
  if (preg_match('~[\\\\/]|\\.\\.~', $name)) return null; // no slashes or traversal
  if (!safe_ext($name)) return null;
  $path = LOG_DIR_SELECTED . DIRECTORY_SEPARATOR . $name;
  $rp   = realpath($path);
  if (!$rp) return null;
  $base = realpath(LOG_DIR_SELECTED);
  if ($base === false || strncmp($rp, $base, strlen($base)) !== 0) return null;
  return (is_file($rp) && is_readable($rp)) ? $rp : null;
}

function list_logs(string $dir): array {
  $list = []; $count = 0;
  foreach (@scandir($dir) ?: [] as $fn) {
    if ($fn === '.' || $fn === '..') continue;
    if (!safe_ext($fn)) continue;
    $rp = resolve_log_path($fn);
    if ($rp) {
      $list[] = ['name'=>$fn, 'size'=>filesize($rp), 'mtime'=>filemtime($rp)];
      if (++$count >= MAX_FILES_LISTED) break;
    }
  }
  usort($list, fn($a,$b)=> $b['mtime'] <=> $a['mtime']);
  return $list;
}

function tail_lines(string $file, int $n): array {
  if ($n <= 0) return [];
  $f = @fopen($file, 'rb'); if (!$f) return [];
  $chunkSize = 8192; $buffer = '';
  fseek($f, 0, SEEK_END); $cursor = ftell($f); $lines = 0;
  while ($cursor > 0 && $lines <= $n) {
    $read = ($cursor >= $chunkSize) ? $chunkSize : $cursor;
    $cursor -= $read; fseek($f, $cursor);
    $chunk = fread($f, $read); $buffer = $chunk . $buffer;
    $lines = substr_count($buffer, "\n");
  }
  fclose($f);
  $all = preg_split("/\\r?\\n/", rtrim($buffer, "\r\n"));
  return ($n >= count($all)) ? $all : array_slice($all, -$n);
}

function stream_download(string $path, string $downloadName): void {
  header('Content-Type: text/plain; charset=UTF-8');
  header('Content-Disposition: attachment; filename="'.rawurlencode($downloadName).'"');
  header('X-Content-Type-Options: nosniff');
  $fp = fopen($path, 'rb');
  if ($fp) { while (!feof($fp)) { echo fread($fp, 8192); } fclose($fp); }
}

// ---- routing/params ----
$action = $_GET['a'] ?? 'list';     // list | tail | raw | download
$file   = $_GET['file'] ?? null;
$path   = $file ? resolve_log_path($file) : null;

$n   = isset($_GET['n']) ? max(1, min(5000, (int)$_GET['n'])) : 500;
$q   = trim((string)($_GET['q'] ?? ''));
$autorefresh = isset($_GET['autorefresh']) && $_GET['autorefresh']=='1';
$now = date('Y-m-d H:i:s');

// ---- actions for raw/download ----
if (in_array($action, ['raw','download'], true)) {
  if (!$path) { http_response_code(404); echo "File not found."; exit; }
  if ($action === 'download') { stream_download($path, basename($path)); exit; }
  header('Content-Type: text/plain; charset=UTF-8');
  header('X-Content-Type-Options: nosniff');
  readfile($path);
  exit;
}

// ---- list logs for selected root ----
$logs = (LOG_DIR_SELECTED && is_dir(LOG_DIR_SELECTED)) ? list_logs(LOG_DIR_SELECTED) : [];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log Browser — <?= h($rootKey ?: 'No Root') ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">
<?php if ($autorefresh): ?><meta http-equiv="refresh" content="5"><?php endif; ?>
<style>
:root{ --bg:#0b0f14; --ink:#e7eef7; --mut:#9ab; --panel:#121821; --chip:#1c2430; --acc:#7dd3fc; --border:#1e293b; }
*{box-sizing:border-box} body{margin:0;background:var(--bg);color:var(--ink);font:14px/1.45 system-ui,-apple-system,Segoe UI,Roboto}
/* page layout for sticky footer */
html, body { height: 100%; }
.page {
  min-height: 100vh;           /* fill the viewport */
  display: flex;
  flex-direction: column;      /* stack: header/content/footer */
}

/* footer styling */
.admin-footer {
  margin-top: auto;            /* push footer to bottom when content is short */
  background: #0e141b;
  border-top: 1px solid #1b2430;
  color: #8ca0b3;
}
.admin-footer .footer-inner {
  max-width: 1000px;
  margin: 0 auto;
  padding: 10px 16px;
  display: flex;
  gap: 10px;
  align-items: center;
  flex-wrap: wrap;
  font-size: 12px;
}
a{color:var(--acc);text-decoration:none} a:hover{text-decoration:underline}
header{display:flex;gap:12px;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--border);background:#0d131b;position:sticky;top:0;z-index:10}
.row{display:grid;grid-template-columns:280px 1fr;gap:12px;padding:12px}
@media (max-width:740px){ header{flex-direction:column;align-items:flex-start;gap:6px} .row{grid-template-columns:1fr;padding:10px} .list{max-height:none;overflow:visible} .toolbar form{width:100%} select,input,button{font-size:16px} }
.panel{background:var(--panel);border:1px solid var(--border);border-radius:12px;overflow:hidden}
.panel h3{margin:0;padding:10px 12px;border-bottom:1px solid var(--border);background:#0e1620;font-size:13px;color:#cbd5e1;position:sticky;top:0;z-index:1}
.list{max-height:70vh;overflow:auto}
.logitem{display:flex;justify-content:space-between;gap:8px;padding:10px 12px;border-bottom:1px dashed #233142}
.logitem:hover{background:#0f1823}
.dim{color:var(--mut)}
.toolbar{display:flex;flex-wrap:wrap;gap:8px;padding:10px 12px;border-bottom:1px solid var(--border);background:#0e1620}
.toolbar form{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
select, input[type="text"], input[type="number"]{background:#0b1220;color:var(--ink);border:1px solid #233142;border-radius:8px;padding:6px 8px}
button, .btn{background:#122232;color:var(--ink);border:1px solid #2a3b52;border-radius:10px;padding:6px 10px;cursor:pointer}
button:hover, .btn:hover{background:#0f1b2a}
pre{margin:0;padding:12px;white-space:pre-wrap;word-wrap:break-word;max-height:70vh;overflow:auto;background:#0a111a}
mark{background:#fde68a;color:#111827;padding:0 2px;border-radius:3px}
.chips{display:flex;gap:8px;flex-wrap:wrap;padding:8px 12px}
.chip{background:var(--chip);border:1px solid #233142;border-radius:999px;padding:4px 10px;font-size:12px}
.tip{padding:10px 12px;color:#94a3b8}
</style>
</head>
<body>
<div class="page">

<?php
require_once __DIR__ . '/_topnav_admin.php';
render_admin_topnav([
  'token' => $_GET['token'] ?? ($TOKEN ?? '')
]);
?>

<header>
  <div>
    <strong><?= $brand['name'] ?> · Log Browser</strong>
    <span class="dim">— <?= h($now) ?></span>
    <?php if ($autorefresh): ?><span class="chip">auto-refresh</span><?php endif; ?>
  </div>
  <div class="chips">
    <span class="chip">root: <?= h($rootKey ?: '(none)') ?></span>
    <span class="chip">path: <?= h(LOG_DIR_SELECTED ?: '(no logs dir)') ?></span>
    <span class="chip">token auth</span>
  </div>
</header>

<div class="row">
  <aside class="panel">
    <h3>Log roots (<?= count($roots) ?>)</h3>
    <div class="toolbar">
      <form method="get">
        <input type="hidden" name="token" value="<?= h($TOKEN) ?>">
        <label>Root
          <select name="root" onchange="this.form.submit()">
            <?php foreach ($roots as $k=>$R): ?>
              <option value="<?= h($k) ?>" <?= $k===$rootKey?'selected':''; ?>>
                <?= h($k) ?> (<?= h($R['dir']) ?>)
              </option>
            <?php endforeach; ?>
          </select>
        </label>
        <!-- preserve current viewer state -->
        <input type="hidden" name="file" value="<?= h($file ?? '') ?>">
        <input type="hidden" name="a" value="<?= h($action) ?>">
        <input type="hidden" name="n" value="<?= (int)$n ?>">
        <input type="hidden" name="q" value="<?= h($q) ?>">
        <input type="hidden" name="autorefresh" value="<?= $autorefresh?'1':'' ?>">
      </form>
    </div>

    <h3>Logs (<?= count($logs) ?>)</h3>
    <div class="list">
      <?php if (!$root): ?>
        <div class="logitem"><span class="dim">No root available.</span></div>
      <?php elseif (!$logs): ?>
        <div class="logitem"><span class="dim">No .log/.txt/.jsonl files found.</span></div>
      <?php else: foreach ($logs as $L): ?>
        <div class="logitem">
          <div>
            <a href="?token=<?= rawurlencode($TOKEN) ?>&root=<?= rawurlencode($rootKey) ?>&file=<?= rawurlencode($L['name']) ?>&a=tail&n=<?= (int)$n ?>">
              <?= h($L['name']) ?>
            </a>
            <div class="dim"><?= date('Y-m-d H:i:s', $L['mtime']) ?></div>
          </div>
          <div class="dim"><?= number_format($L['size']) ?> B</div>
        </div>
      <?php endforeach; endif; ?>
    </div>
  </aside>

  <main class="panel">
    <h3>Viewer</h3>
    <div class="toolbar">
      <form method="get">
        <input type="hidden" name="token" value="<?= h($TOKEN) ?>">
        <input type="hidden" name="root"  value="<?= h($rootKey ?? '') ?>">
        <label>File:
          <select name="file">
            <?php foreach ($logs as $L): ?>
              <option value="<?= h($L['name']) ?>" <?= ($L['name'] === ($file ?? '')) ? 'selected':''; ?>>
                <?= h($L['name']) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </label>
        <label>Lines <input type="number" name="n" min="1" max="5000" value="<?= (int)$n ?>"></label>
        <label>Search <input type="text" name="q" placeholder="grep…" value="<?= h($q) ?>"></label>
        <label><input type="checkbox" name="autorefresh" value="1" <?= $autorefresh?'checked':''; ?>> auto</label>
        <input type="hidden" name="a" value="tail">
        <button type="submit">Tail</button>
        <?php if ($file && $path): ?>
          <a class="btn" href="?token=<?= rawurlencode($TOKEN) ?>&root=<?= rawurlencode($rootKey) ?>&file=<?= rawurlencode($file) ?>&a=raw">Raw</a>
          <a class="btn" href="?token=<?= rawurlencode($TOKEN) ?>&root=<?= rawurlencode($rootKey) ?>&file=<?= rawurlencode($file) ?>&a=download">Download</a>
        <?php endif; ?>
      </form>
    </div>

    <pre>
<?php
if (!$root) {
  echo "No root available.\n";
} elseif (!$file) {
  echo "Select a log on the left, or choose one above and click Tail.\n";
} elseif (!$path) {
  echo "File not found or not allowed.\n";
} else {
  $lines = tail_lines($path, $n);
  if ($q !== '') {
    $qLower = mb_strtolower($q, 'UTF-8');
    $lines = array_values(array_filter($lines, function($line) use ($qLower){
      return mb_strpos(mb_strtolower($line, 'UTF-8'), $qLower) !== false;
    }));
  }
  $qRegex = $q !== '' ? '~(' . preg_quote($q, '~') . ')~iu' : null;

  foreach ($lines as $line) {
    $safe = h($line);
    if ($qRegex) $safe = preg_replace($qRegex, '<mark>$1</mark>', $safe);
    echo $safe . "\n";
  }
  if (!$lines) {
    echo $q !== '' ? "No matches for '".h($q)."' in last $n lines.\n" : "Log is empty (or fewer than $n lines).\n";
  }
}
?>
    </pre>
    <div class="tip">
      Tip: switch <strong>Root</strong> to browse a different logs/ folder. Enable <em>auto</em> to refresh every 5s. Use <strong>Raw</strong> or <strong>Download</strong> for full file access.
    </>
  </main>
</div>
<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
</body>
</html>
