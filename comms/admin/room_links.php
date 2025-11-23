<?php
// admin/room_links.php — simple list of room links (from SQLite)
// Usage: /admin/room_links.php?token=YOUR_INIT_ADMIN_TOKEN
// Notes: Looks for ../data/comms.sqlite and a table named `rooms`. Tolerates missing columns.

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config.php';

// ----- config -----
define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']); // match your existing tools
define('REGISTRY_DB', env_db_path());
define('ROOM_VIEW_BASE', '../../room.php');   // the page that accepts ?room=...&token=...

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

// ----- tolerant fetch (handles old/new schemas) -----
function fetch_rooms(PDO $pdo): array {
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

// ----- output -----
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Room Links — Admin</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">
<style>
  :root{--bg:#0b0f14;--panel:#11161d;--text:#e8f0f7;--muted:#8ca0b3;--border:#1b2430;--accent:#3fa0ff;}
  *{box-sizing:border-box} body{margin:0;background:var(--bg);color:var(--text);font:14px/1.4 system-ui,-apple-system,Segoe UI,Roboto,Arial}
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
  a{color:var(--accent);text-decoration:none}
  .wrap{max-width:800px;margin:6vh auto;padding:18px}
  h1{margin:0 0 12px;font-size:18px}
  .card{background:var(--panel);border:1px solid var(--border);border-radius:14px;padding:14px}
  ul{list-style:none;padding:0;margin:0}
  li{display:flex;align-items:center;gap:10px;padding:10px;border-bottom:1px solid var(--border)}
  li:last-child{border-bottom:0}
  .badge{font-size:11px;padding:2px 8px;border-radius:999px;border:1px solid var(--border);color:var(--muted)}
  .inactive{opacity:.6}
  code{background:#0c1218;border:1px solid var(--border);border-radius:8px;padding:2px 6px;color:var(--muted)}
  .meta{margin-top:10px;color:var(--muted);word-wrap: break-word;}
  @media (max-width:740px){ .wrap{width:100%;padding: 0 16px;} }
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
  <h1>Room Links <span class="badge"><?= count($rooms) ?> rooms</span></h1>
  <div class="card">
    <?php if (!$rooms): ?>
      <div>No rooms found in <code><?= h(REGISTRY_DB) ?></code></div>
    <?php else: ?>
      <ul>
        <?php foreach ($rooms as $r):
          $url = ROOM_VIEW_BASE . (strpos(ROOM_VIEW_BASE,'?')===false ? '?' : '&')
               . http_build_query(['room'=>$r['slug'],'token'=>$TOKEN]);
          $is_active = (int)$r['active'];
          $messages_url = 'messages.php?' . http_build_query([
            'token' => $TOKEN,
            'room'  => $r['slug'],
          ]);
          ?>
          <li class="<?= $is_active ? '' : 'inactive' ?>">
            <a href="<?= h($url) ?>"><?= h($r['title']) ?></a>
            <span class="badge">@<?= h($r['slug']) ?></span>
            <?php if (!$is_active): ?>
              <span class="badge">inactive</span>
            <?php endif; ?>

            <div style="margin-left:auto;display:flex;align-items:center;gap:8px;">
              <!-- Messages badge link -->
              <a href="<?= h($messages_url) ?>"
                 class="badge"
                 style="border-color:#3fa0ff;color:#3fa0ff;cursor:pointer;">
                Messages
              </a>

              <!-- Block / Unblock button -->
              <form method="post" action="room_toggle_active.php">
                <input type="hidden" name="slug" value="<?= h($r['slug']) ?>">
                <input type="hidden" name="token" value="<?= h($TOKEN) ?>">
                <?php if ($is_active): ?>
                  <button type="submit" class="badge"
                          style="border-color:#ff9966;color:#ff9966;cursor:pointer;background:none;">
                    Block
                  </button>
                <?php else: ?>
                  <button type="submit" class="badge"
                          style="border-color:#66cc66;color:#66cc66;cursor:pointer;background:none;">
                    Unblock
                  </button>
                <?php endif; ?>
              </form>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <div class="meta">
      Registry: <code><?= h(REGISTRY_DB) ?></code> • Viewer base: <code><?= h(ROOM_VIEW_BASE) ?></code>
    </div>
  </div>
</div>
<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
</body>
</html>
