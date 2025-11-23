<?php
// admin/message_toggle_deleted.php — POST-only toggle for messages.is_deleted
// Called from messages.php button forms.

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config.php';

// ----- config -----
define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']); // same as other tools
define('REGISTRY_DB', env_db_path());

function deny($msg='forbidden'){ http_response_code(403); echo htmlspecialchars($msg); exit; }
function h($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

// ----- guard -----
$TOKEN = $_POST['token'] ?? '';
if (!hash_equals(INIT_ADMIN_TOKEN, $TOKEN ?? '')) deny('invalid or missing token');

$room = $_POST['room'] ?? '';
$id   = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$mode = $_POST['mode'] ?? '';

if ($id <= 0 || !$room || !in_array($mode, ['delete','restore'], true)) {
  deny('invalid parameters');
}

// ----- open DB -----
if (!is_file(REGISTRY_DB)) {
  http_response_code(500);
  echo "<pre>Registry DB not found at ".h(REGISTRY_DB)."</pre>";
  exit;
}
try {
  $pdo = new PDO('sqlite:' . REGISTRY_DB, null, null, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (Throwable $e) {
  http_response_code(500);
  echo "<pre>Cannot open DB: ".h($e->getMessage())."</pre>";
  exit;
}

// ensure is_deleted column exists
try {
  $cols = $pdo->query("PRAGMA table_info(messages)")->fetchAll();
  $has_deleted = false;
  foreach ($cols as $c) {
    if (isset($c['name']) && strcasecmp($c['name'],'is_deleted')===0) {
      $has_deleted = true;
      break;
    }
  }
  if (!$has_deleted) {
    deny('messages.is_deleted column missing');
  }
} catch (Throwable $e) {
  deny('cannot inspect messages schema');
}

// ----- perform toggle -----
$flag = ($mode === 'delete') ? 1 : 0;

try {
  $stmt = $pdo->prepare("UPDATE messages SET is_deleted = :flag WHERE id = :id");
  $stmt->execute([
    ':flag' => $flag,
    ':id'   => $id,
  ]);
} catch (Throwable $e) {
  http_response_code(500);
  echo "<pre>Update failed: ".h($e->getMessage())."</pre>";
  exit;
}

// ----- redirect back -----
$qs = http_build_query([
  'token' => $TOKEN,
  'room'  => $room,
]);
header('Location: messages.php?'.$qs);
exit;
