<?php
// admin/messages.php — view + soft delete/restore messages per room
// Usage: /admin/messages.php?token=YOUR_INIT_ADMIN_TOKEN&room=some-room-slug
// Notes: Looks for ../data/comms.sqlite and tables `rooms` + `messages`.

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config.php';

// ----- config -----
define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']); // match your existing tools
define('REGISTRY_DB', env_db_path());

function deny($msg='forbidden'){ http_response_code(403); echo htmlspecialchars($msg); exit; }
function h($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

// ----- guard -----
$TOKEN = $_GET['token'] ?? '';
if (!hash_equals(INIT_ADMIN_TOKEN, $TOKEN ?? '')) deny('invalid or missing token');

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

// ----- helpers -----
function fetch_rooms(PDO $pdo): array {
  // same tolerant pattern as room_links.php but we also want slugs
  $candidates = [
    "SELECT slug, title, is_active FROM rooms ORDER BY title COLLATE NOCASE",
    "SELECT slug, title, 1 AS is_active FROM rooms ORDER BY title COLLATE NOCASE",
    "SELECT slug, NULL AS title, is_active FROM rooms ORDER BY slug COLLATE NOCASE",
    "SELECT slug, NULL AS title, 1 AS is_active FROM rooms ORDER BY slug COLLATE NOCASE",
    "SELECT slug FROM rooms ORDER BY slug COLLATE NOCASE",
  ];
  foreach ($candidates as $sql) {
    try {
      $rows = $pdo->query($sql)->fetchAll();
      if ($rows !== false && count($rows)) return $rows;
    } catch (Throwable $e) {
      // try next shape
    }
  }
  return [];
}

function has_column(PDO $pdo, string $table, string $column): bool {
  try {
    $stmt = $pdo->query("PRAGMA table_info(".$table.")");
    $cols = $stmt ? $stmt->fetchAll() : [];
    foreach ($cols as $c) {
      if (isset($c['name']) && strcasecmp($c['name'], $column) === 0) {
        return true;
      }
    }
  } catch (Throwable $e) {}
  return false;
}

// ----- rooms -----
$rows = fetch_rooms($pdo);
$rooms = [];
foreach ($rows as $r) {
  $slug = strtolower(preg_replace('~[^a-z0-9\-]+~i','-',$r['slug'] ?? ''));
  $slug = trim($slug, '-'); if (!$slug) continue;
  $title = $r['title'] ?? '';
  $title = $title !== '' ? $title : ucwords(str_replace('-', ' ', $slug));
  $active = isset($r['is_active']) ? (int)$r['is_active'] : 1;
  $rooms[] = ['slug'=>$slug, 'title'=>$title, 'active'=>$active];
}

// pick current room
$current_slug = $_GET['room'] ?? '';
if (!$current_slug && $rooms) {
  $current_slug = $rooms[0]['slug'];
}
$current_room_id = null;

if ($current_slug) {
  try {
    $stmt = $pdo->prepare("SELECT id FROM rooms WHERE slug = :slug LIMIT 1");
    $stmt->execute([':slug' => $current_slug]);
    $row = $stmt->fetch();
    if ($row) {
      $current_room_id = (int)$row['id'];
    }
  } catch (Throwable $e) {
    // ignore; handled below
  }
}

// ----- messages -----
$messages = [];
$error_msg = '';
$has_deleted_col = false;

if ($current_room_id !== null) {
  $has_deleted_col = has_column($pdo, 'messages', 'is_deleted');
  try {
    if ($has_deleted_col) {
      $sql = "SELECT id, room_id, body, created_at, is_deleted
              FROM messages
              WHERE room_id = :rid
              ORDER BY created_at DESC, id DESC
              LIMIT 200";
    } else {
      $sql = "SELECT id, room_id, body, created_at,
                     0 AS is_deleted
              FROM messages
              WHERE room_id = :rid
              ORDER BY created_at DESC, id DESC
              LIMIT 200";
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':rid'=>$current_room_id]);
    $messages = $stmt->fetchAll() ?: [];
  } catch (Throwable $e) {
    $error_msg = 'Error fetching messages: '.$e->getMessage();
  }
}

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Messages — Admin</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">
<style>
  :root{--bg:#0b0f14;--panel:#11161d;--text:#e8f0f7;--muted:#8ca0b3;--border:#1b2430;--accent:#3fa0ff;--danger:#ff6a6a;--success:#5ad47f;}
  *{box-sizing:border-box}
  body{margin:0;background:var(--bg);color:var(--text);font:14px/1.4 system-ui,-apple-system,Segoe UI,Roboto,Arial}
  html, body { height: 100%; }
  .page{min-height:100vh;display:flex;flex-direction:column;}
  a{color:var(--accent);text-decoration:none}
  .wrap{max-width:960px;margin:6vh auto;padding:18px}
  h1{margin:0 0 12px;font-size:18px}
  .sub{color:var(--muted);font-size:13px;margin-bottom:12px}
  .card{background:var(--panel);border:1px solid var(--border);border-radius:14px;padding:14px}
  .badge{font-size:11px;padding:2px 8px;border-radius:999px;border:1px solid var(--border);color:var(--muted);display:inline-flex;align-items:center;gap:4px}
  .badge-room-count{margin-left:6px}
  .badge-status-active{border-color:var(--success);color:var(--success);}
  .badge-status-deleted{border-color:var(--danger);color:var(--danger);}
  .badge-chip{border-color:var(--border);color:var(--muted);}
  .select-row{display:flex;flex-wrap:wrap;gap:10px;align-items:center;margin-bottom:12px}
  select{background:#0c1218;color:var(--text);border-radius:999px;border:1px solid var(--border);padding:6px 10px;font-size:13px;min-width:180px}
  .small-muted{color:var(--muted);font-size:12px}
  ul.msg-list{list-style:none;padding:0;margin:0}
  li.msg-item{display:flex;gap:10px;padding:10px;border-bottom:1px solid var(--border);align-items:flex-start}
  li.msg-item:last-child{border-bottom:0}
  .msg-main{flex:1;min-width:0}
  .msg-meta{font-size:11px;color:var(--muted);margin-bottom:4px;word-wrap:break-word;}
  .msg-body{font-size:13px;white-space:pre-wrap;word-wrap:break-word;}
  .msg-flags{display:flex;flex-direction:column;align-items:flex-end;gap:6px;margin-left:auto;min-width:120px}
  button.btn-ghost{
    background:none;border:1px solid var(--border);border-radius:999px;
    padding:3px 10px;font-size:11px;color:var(--muted);cursor:pointer;
  }
  button.btn-danger{border-color:var(--danger);color:var(--danger);}
  button.btn-success{border-color:var(--success);color:var(--success);}
  .inactive{opacity:0.6}
  .alert{padding:8px 10px;border-radius:10px;font-size:13px;margin-bottom:10px;}
  .alert-warn{background:#261416;border:1px solid #5b242f;color:#ffb3c2;}
  .alert-info{background:#121927;border:1px solid #22314a;color:#b5c9f1;}
  .meta{margin-top:10px;color:var(--muted);word-wrap:break-word;font-size:12px;}

  /* footer styling */
  .admin-footer {
    margin-top: auto;
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

  @media (max-width:740px){
    .wrap{width:100%;padding:0 16px;}
    .msg-flags{min-width:0;align-items:flex-start;}
  }
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

<div class="wrap">
  <h1>Messages <span class="badge badge-room-count"><?= count($rooms) ?> rooms</span></h1>
  <div class="sub">Inspect per-room chat history and soft delete or restore messages.</div>

  <div class="card" style="margin-bottom:16px;">
    <form method="get" class="select-row">
      <input type="hidden" name="token" value="<?= h($TOKEN) ?>">
      <label for="room-select" class="small-muted">Room</label>
      <select id="room-select" name="room" onchange="this.form.submit()">
        <?php foreach ($rooms as $r): ?>
          <option value="<?= h($r['slug']) ?>" <?= $r['slug']===$current_slug ? 'selected' : '' ?>>
            <?= h($r['title']) ?> (@<?= h($r['slug']) ?><?= $r['active'] ? '' : ' · inactive' ?>)
          </option>
        <?php endforeach; ?>
      </select>
      <span class="small-muted">Showing up to 200 most recent messages for this room.</span>
    </form>

    <?php if (!$current_slug || $current_room_id === null): ?>
      <div class="alert alert-warn">Could not resolve the selected room in the <code>rooms</code> table.</div>
    <?php endif; ?>

    <?php if (!$has_deleted_col): ?>
      <div class="alert alert-warn">
        <strong>Note:</strong> <code>messages.is_deleted</code> column not found.  
        You can add it with:
        <code>ALTER TABLE messages ADD COLUMN is_deleted INTEGER NOT NULL DEFAULT 0;</code>
      </div>
    <?php endif; ?>

    <?php if ($error_msg): ?>
      <div class="alert alert-warn"><?= h($error_msg) ?></div>
    <?php endif; ?>

    <?php if ($current_room_id !== null && !$error_msg): ?>
      <?php if (!$messages): ?>
        <div class="alert alert-info">No messages found for this room yet.</div>
      <?php else: ?>
        <ul class="msg-list">
          <?php foreach ($messages as $m): 
            $is_deleted = (int)($m['is_deleted'] ?? 0) === 1;
            $created_raw = $m['created_at'] ?? '';
            if (is_numeric($created_raw)) {
              $created_fmt = date('Y-m-d H:i:s', (int)$created_raw);
            } else {
              $created_fmt = (string)$created_raw;
            }
            $preview = trim((string)($m['body'] ?? ''));
            if (mb_strlen($preview) > 220) {
              $preview = mb_substr($preview, 0, 217) . '…';
            }
          ?>
            <li class="msg-item <?= $is_deleted ? 'inactive' : '' ?>">
              <div class="msg-main">
                <div class="msg-meta">
                  #<?= (int)$m['id'] ?> • <?= h($created_fmt) ?>
                  <?php if ($is_deleted): ?>
                    • <span class="badge badge-status-deleted">deleted</span>
                  <?php else: ?>
                    • <span class="badge badge-status-active">active</span>
                  <?php endif; ?>
                </div>
                <div class="msg-body"><?= nl2br(h($preview)) ?></div>
              </div>
              <div class="msg-flags">
                <form method="post" action="message_toggle_deleted.php" onsubmit="return confirm('Are you sure?');">
                  <input type="hidden" name="token" value="<?= h($TOKEN) ?>">
                  <input type="hidden" name="room" value="<?= h($current_slug) ?>">
                  <input type="hidden" name="id" value="<?= (int)$m['id'] ?>">
                  <?php if ($has_deleted_col): ?>
                    <?php if ($is_deleted): ?>
                      <button type="submit" name="mode" value="restore" class="btn-ghost btn-success">
                        Restore
                      </button>
                    <?php else: ?>
                      <button type="submit" name="mode" value="delete" class="btn-ghost btn-danger">
                        Delete
                      </button>
                    <?php endif; ?>
                  <?php else: ?>
                    <button type="button" class="btn-ghost" disabled>Soft delete unavailable</button>
                  <?php endif; ?>
                </form>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    <?php endif; ?>

    <div class="meta">
      Registry: <code><?= h(REGISTRY_DB) ?></code>
    </div>
  </div>
</div>

<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
</body>
</html>
