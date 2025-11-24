<?php
// admin/post_editor.php — Posts editor for LensShare/Comms
// Supports global posts (room_id = GLOBAL_ROOM_ID) and room-specific posts.
//
// Usage: /admin/post_editor.php?token=YOUR_INIT_ADMIN_TOKEN
//
// SECURITY
// - Token-gated: requires ?token=... to equal INIT_ADMIN_TOKEN
// - DB path comes from env_db_path() (same as db_browser.php)
//
// OPTIONAL MIGRATION (recommended):
// ALTER TABLE posts ADD COLUMN is_archived INTEGER NOT NULL DEFAULT 0;

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();
header_remove('X-Powered-By');
date_default_timezone_set('America/New_York');

require_once __DIR__ . '/../config.php';

define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);
define('DB_PATH', env_db_path());
define('GLOBAL_ROOM_ID', 1); // posts that appear in all spaces (global)

// simple esc helper
function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function deny($m='forbidden'){ http_response_code(403); echo h($m); exit; }

// ---- auth ----
$TOKEN = $_GET['token'] ?? '';
if (!$TOKEN || !hash_equals(INIT_ADMIN_TOKEN, $TOKEN)) deny();

// ---- db open ----
if (!is_file(DB_PATH)) { http_response_code(500); echo "DB missing at: " . h(DB_PATH); exit; }

$pdo = new PDO('sqlite:' . DB_PATH, null, null, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
]);
$pdo->query('PRAGMA foreign_keys=ON');
$pdo->query('PRAGMA busy_timeout=2000');

// ---- detect schema (is_archived?) ----
$cols = $pdo->query("PRAGMA table_info('posts')")->fetchAll();
$HAS_IS_ARCHIVED = false;
foreach ($cols as $c) {
  if (strcasecmp($c['name'], 'is_archived') === 0) {
    $HAS_IS_ARCHIVED = true;
    break;
  }
}

// helper: keep token in links
function url_with_token(array $extra = []){
  global $TOKEN;
  $base = ['token' => $TOKEN];
  $out  = array_merge($base, $extra);
  $q    = http_build_query($out);
  return $q ? ('?' . $q) : '';
}

// ---- load rooms for dropdowns ----
$rooms = [];
try {
  $rooms = $pdo->query("SELECT id, slug, name FROM rooms ORDER BY name ASC, id ASC")->fetchAll();
} catch (Throwable $e) {
  $rooms = [];
}

// ---- flash messages (read + clear) ----
$flash_error = $_SESSION['post_editor_flash_error'] ?? null;
$flash_ok    = $_SESSION['post_editor_flash_ok'] ?? null;
unset($_SESSION['post_editor_flash_error'], $_SESSION['post_editor_flash_ok']);

// ---- POST handlers (POST → REDIRECT → GET) ----
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'create') {
        $title   = trim($_POST['title'] ?? '');
        $body    = trim($_POST['body'] ?? '');
        $room_id = (int)($_POST['room_id'] ?? GLOBAL_ROOM_ID);

        if ($title === '' || $body === '') {
            $_SESSION['post_editor_flash_error'] = 'Title and body are required.';
        } else {
            try {
                $now = date('c');
                $stmt = $pdo->prepare("
                    INSERT INTO posts (room_id, title, body, created_at)
                    VALUES (:room_id, :title, :body, :created_at)
                ");
                $stmt->execute([
                    ':room_id'    => $room_id,
                    ':title'      => $title,
                    ':body'       => $body,
                    ':created_at' => $now,
                ]);
                $_SESSION['post_editor_flash_ok'] = 'Post created.';
            } catch (Throwable $e) {
                $_SESSION['post_editor_flash_error'] = 'DB error (create): ' . $e->getMessage();
            }
        }

        header('Location: post_editor.php' . url_with_token());
        exit;
    }

    if ($action === 'update') {
        $id      = (int)($_POST['id'] ?? 0);
        $title   = trim($_POST['title'] ?? '');
        $body    = trim($_POST['body'] ?? '');
        $room_id = (int)($_POST['room_id'] ?? GLOBAL_ROOM_ID);

        if ($id <= 0 || $title === '' || $body === '') {
            $_SESSION['post_editor_flash_error'] = 'Invalid update request.';
        } else {
            try {
                $stmt = $pdo->prepare("
                    UPDATE posts
                    SET title   = :title,
                        body    = :body,
                        room_id = :room_id
                    WHERE id = :id
                ");
                $stmt->execute([
                    ':title'   => $title,
                    ':body'    => $body,
                    ':room_id' => $room_id,
                    ':id'      => $id,
                ]);
                $_SESSION['post_editor_flash_ok'] = 'Post updated.';
            } catch (Throwable $e) {
                $_SESSION['post_editor_flash_error'] = 'DB error (update): ' . $e->getMessage();
            }
        }

        header('Location: post_editor.php' . url_with_token());
        exit;
    }

    if ($action === 'toggle_archive') {
        $id = (int)($_POST['id'] ?? 0);
        if ($id > 0 && $HAS_IS_ARCHIVED) {
            try {
                $stmt = $pdo->prepare("
                    UPDATE posts
                    SET is_archived = CASE WHEN is_archived = 1 THEN 0 ELSE 1 END
                    WHERE id = :id
                ");
                $stmt->execute([':id' => $id]);
                $_SESSION['post_editor_flash_ok'] = 'Archive state toggled.';
            } catch (Throwable $e) {
                $_SESSION['post_editor_flash_error'] = 'DB error (archive): ' . $e->getMessage();
            }
        } elseif (!$HAS_IS_ARCHIVED) {
            $_SESSION['post_editor_flash_error'] = 'is_archived column missing. Run migration first.';
        }

        header('Location: post_editor.php' . url_with_token());
        exit;
    }
}

// ---- load edit target (if any) ----
$editPost = null;
if (!empty($_GET['edit'])) {
  $id = (int)$_GET['edit'];
  if ($id > 0) {
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $editPost = $stmt->fetch();
  }
}

// ---- fetch all posts (global + room-specific) ----
if ($HAS_IS_ARCHIVED) {
  $sql = "
    SELECT id, room_id, title, body, created_at, is_archived
    FROM posts
    ORDER BY is_archived ASC, created_at DESC, id DESC
  ";
} else {
  $sql = "
    SELECT id, room_id, title, body, created_at
    FROM posts
    ORDER BY created_at DESC, id DESC
  ";
}
$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll();

$now = date('Y-m-d H:i:s');

// helper to label room in UI
function room_label_for($room_id, $rooms){
    if ((int)$room_id === GLOBAL_ROOM_ID) {
        return 'Global (all spaces)';
    }
    foreach ($rooms as $r) {
        if ((int)$r['id'] === (int)$room_id) {
            $name = $r['name'] ?: $r['slug'] ?: ('Room ' . $r['id']);
            return 'Room #' . $r['id'] . ' · ' . $name;
        }
    }
    return 'Room #' . (int)$room_id;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Post Editor — <?= h(basename(DB_PATH)) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">
<style>
:root{
  --bg:#0b0f14; --ink:#e7eef7; --mut:#9ab;
  --panel:#121821; --border:#1e293b; --chip:#1c2430;
  --acc:#7dd3fc; --accent2:#4f46e5; --danger:#7f1d1d;
}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--ink);font:14px/1.45 system-ui,-apple-system,Segoe UI,Roboto}
html, body { height: 100%; }
.page {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
a{color:var(--acc);text-decoration:none} a:hover{text-decoration:underline}
.wrap{max-width:1200px;margin:0 auto;padding:12px}
.card{background:var(--panel);border:1px solid var(--border);border-radius:12px;overflow:hidden;margin-bottom:12px}
.header{display:flex;flex-wrap:wrap;gap:8px;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--border)}
.badge{border:1px solid var(--border);padding:3px 8px;border-radius:10px;color:var(--mut);font-size:12px}
.grid{display:grid;grid-template-columns: minmax(0, 1.05fr) minmax(0, 1.3fr);gap:12px}
@media (max-width:900px){ .grid{grid-template-columns:1fr} }
.panel{background:var(--panel);border:1px solid var(--border);border-radius:12px}
.panel h3{margin:0;padding:10px 12px;border-bottom:1px solid var(--border);background:#0e1620;font-size:13px;color:#cbd5e1}
.section{padding:10px 12px}
.input, textarea.input, select.input{
  padding:8px 10px;border:1px solid var(--border);border-radius:8px;
  background:#0b1220;color:var(--ink);width:100%;font:inherit;resize:vertical;
}
textarea.input{min-height:140px}
.btn{
  padding:7px 12px;border-radius:999px;border:1px solid var(--border);
  background:#122232;color:#e5e7eb;cursor:pointer;font:inherit;
  display:inline-flex;align-items:center;gap:6px;
}
.btn-primary{background:var(--accent2);border-color:#312e81;}
.btn-secondary{background:#111827;}
.btn-danger{background:var(--danger);border-color:#b91c1c;color:#fee2e2;}
.note{color:var(--mut);font-size:12px}
.mono{font-family:ui-monospace,SFMono-Regular,Consolas,monospace}
table{width:100%;border-collapse:collapse;font-size:13px}
th,td{border-bottom:1px solid var(--border);padding:6px 8px;text-align:left;vertical-align:top}
th{background:#0f1621;font-size:11px;text-transform:uppercase;color:#9ca3af}
.row-archived{opacity:0.6;}
.status-pill{
  display:inline-block;border-radius:999px;font-size:10px;
  padding:2px 8px;text-transform:uppercase;letter-spacing:.04em;
}
.status-live{background:#064e3b;color:#a7f3d0;}
.status-archived{background:#111827;color:#e5e7eb;border:1px solid #4b5563;}
.post-body-preview{
  max-height:3.4em;overflow:hidden;text-overflow:ellipsis;
  display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;
  white-space:normal;font-size:12px;color:#9ca3af;
}
.actions{display:flex;flex-direction:column;gap:4px}
.flash{
  margin-bottom:8px;padding:8px 10px;border-radius:8px;font-size:13px;
}
.flash-ok{background:#022c22;color:#bbf7d0;border:1px solid #064e3b;}
.flash-err{background:#450a0a;color:#fecaca;border:1px solid #b91c1c;}
/* footer */
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
</style>
</head>
<body>
<div class="page">

<?php
require_once __DIR__ . '/_topnav_admin.php';
render_admin_topnav([
  'token' => $TOKEN,
]);
?>

<div class="wrap">
  <div class="card header">
    <div>
      <strong><?= h($brand['name']) ?> · Post Editor</strong>
      <span class="badge mono"><?= h(basename(DB_PATH)) ?></span>
      <span class="badge mono"><?= h($now) ?></span>
    </div>
    <div class="badge">
      Global posts use room_id = <?= (int)GLOBAL_ROOM_ID ?> · other posts are room-specific
    </div>
  </div>

  <?php if ($flash_ok): ?>
    <div class="flash flash-ok"><?= h($flash_ok) ?></div>
  <?php endif; ?>
  <?php if ($flash_error): ?>
    <div class="flash flash-err"><?= h($flash_error) ?></div>
  <?php endif; ?>

  <div class="grid">
    <!-- LEFT: create / edit form -->
    <div class="panel">
      <?php
        $isEdit   = (bool)$editPost;
        $formTitle = $isEdit ? ('Edit post #' . (int)$editPost['id']) : 'Create new post';
        $postRoomId = $isEdit ? (int)($editPost['room_id'] ?? GLOBAL_ROOM_ID) : GLOBAL_ROOM_ID;
      ?>
      <h3><?= h($formTitle) ?></h3>
      <div class="section">
        <form method="post" action="post_editor.php<?= url_with_token() ?>">
          <?php if ($isEdit): ?>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?= (int)$editPost['id'] ?>">
          <?php else: ?>
            <input type="hidden" name="action" value="create">
          <?php endif; ?>

          <div style="margin-bottom:10px">
            <label for="title" class="note">Title</label>
            <input id="title" name="title" type="text"
                   class="input"
                   value="<?= h($editPost['title'] ?? '') ?>"
                   placeholder="<?= $isEdit ? '' : 'e.g. Welcome to LensShare ✨' ?>"
                   required>
          </div>

          <div style="margin-bottom:10px">
            <label for="body" class="note">Body (HTML or plain text)</label>
            <textarea id="body" name="body" class="input"
                      placeholder="<?= $isEdit ? '' : 'Short announcement or system message...' ?>"
                      required><?= h($editPost['body'] ?? '') ?></textarea>
          </div>

          <div style="margin-bottom:10px">
            <label for="room_id" class="note">Room</label>
            <select id="room_id" name="room_id" class="input">
              <option value="<?= (int)GLOBAL_ROOM_ID ?>" <?= $postRoomId === GLOBAL_ROOM_ID ? 'selected' : '' ?>>
                Global (all spaces)
              </option>
              <?php foreach ($rooms as $r): ?>
                <?php $rid = (int)$r['id']; ?>
                <option value="<?= $rid ?>" <?= $postRoomId === $rid ? 'selected' : '' ?>>
                  Room #<?= $rid ?> · <?= h($r['name'] ?: $r['slug'] ?: ('Room ' . $rid)) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="note" style="margin-bottom:10px">
            Choose <strong>Global (all spaces)</strong> to show this post platform-wide,
            or pick a specific room to scope it to that space.
          </div>

          <div style="display:flex;gap:8px;flex-wrap:wrap">
            <button type="submit" class="btn btn-primary">
              <?= $isEdit ? 'Save changes' : 'Publish' ?>
            </button>
            <?php if ($isEdit): ?>
              <a href="post_editor.php<?= url_with_token() ?>" class="btn btn-secondary">Cancel</a>
            <?php endif; ?>
          </div>
        </form>
      </div>
    </div>

    <!-- RIGHT: posts list -->
    <div class="panel">
      <h3>All posts (global + room-specific)</h3>
      <div class="section" style="overflow:auto;max-height:65vh">
        <?php if (!$posts): ?>
          <p class="note">No posts yet. Create one on the left.</p>
        <?php else: ?>
          <table>
            <thead>
              <tr>
                <th style="width:50px">ID</th>
                <th>Title &amp; body</th>
                <th style="width:140px">Room</th>
                <th style="width:110px">Status</th>
                <th style="width:150px">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $p): ?>
                <?php
                  $arch     = $HAS_IS_ARCHIVED ? (int)$p['is_archived'] : 0;
                  $rowClass = $arch ? 'row-archived' : '';
                  $roomId   = (int)$p['room_id'];
                ?>
                <tr class="<?= $rowClass ?>">
                  <td class="mono"><?= (int)$p['id'] ?></td>
                  <td>
                    <div style="margin-bottom:2px">
                      <a href="post_editor.php<?= url_with_token(['edit' => (int)$p['id']]) ?>">
                        <?= h($p['title']) ?>
                      </a>
                    </div>
                    <div class="post-body-preview">
                      <?= h($p['body']) ?>
                    </div>
                    <div class="note mono" style="margin-top:4px">
                      created: <?= h($p['created_at']) ?>
                    </div>
                  </td>
                  <td>
                    <div class="note">
                      <?= h(room_label_for($roomId, $rooms)) ?>
                    </div>
                  </td>
                  <td>
                    <?php if ($arch): ?>
                      <span class="status-pill status-archived">Archived</span>
                    <?php else: ?>
                      <span class="status-pill status-live">Live</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="actions">
                      <a href="post_editor.php<?= url_with_token(['edit' => (int)$p['id']]) ?>"
                         class="btn btn-secondary">Edit</a>

                      <?php if ($HAS_IS_ARCHIVED): ?>
                        <form method="post" action="post_editor.php<?= url_with_token() ?>">
                          <input type="hidden" name="action" value="toggle_archive">
                          <input type="hidden" name="id" value="<?= (int)$p['id'] ?>">
                          <button type="submit" class="btn btn-secondary">
                            <?= $arch ? 'Unarchive' : 'Archive' ?>
                          </button>
                        </form>
                      <?php else: ?>
                        <span class="note">Add <code class="mono">is_archived</code> to use archive.</span>
                      <?php endif; ?>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>
      </div>
      <?php if (!$HAS_IS_ARCHIVED): ?>
        <div class="section note">
          Tip: run <code class="mono">ALTER TABLE posts ADD COLUMN is_archived INTEGER NOT NULL DEFAULT 0;</code>
          to enable archive/unarchive.
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
</body>
</html>
