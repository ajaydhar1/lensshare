<?php
// Messages + posts + comms (log-browser UI) with guarded room autocreate
// Requires: writable ./data/ directory
// Create room intentionally via: /index.php?room=slug&autocreate=1&token=INIT_ADMIN_TOKEN

// ---------- config ----------
ini_set('display_errors','0'); error_reporting(E_ALL);

session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';

// ---------- bootstrap db ----------
ensure_schema();

// ---------- routing / guards ----------
$token = $_GET['token'] ?? '';
$showAdminBar = ($token && hash_equals(INIT_ADMIN_TOKEN, $token));

$room_slug_raw = $_GET['room'] ?? '';
$room_slug = strtolower(preg_replace('~[^a-z0-9\-]~i','', $room_slug_raw));
$autocreate = ($_GET['autocreate'] ?? '') === '1';

if ($room_slug === ''){
  http_response_code(400);
  echo "Missing ?room= parameter. Example: /index.php?room=main";
  exit;
}
if (!room_slug_valid($room_slug)){
  http_response_code(422);
  echo "<div class='space-error'>Invalid room slug. Use 2–64 chars: letters, numbers, hyphens.</div>";
  exit;
}

$ROOM = current_room_by_slug($room_slug);
$ROOM_ID = $ROOM ? (int)$ROOM['id'] : 0;

if (!$ROOM_ID){
  $hasToken = ($showAdminBar || ($token && hash_equals(INIT_ADMIN_TOKEN, $token)));
  if ($autocreate && $hasToken){
    $ROOM_ID = ensure_room_created($room_slug, null);
    $ROOM = current_room_by_slug($room_slug);
  } else {
    http_response_code(404);
    echo "<div class='space-error'>Unknown room: " . h($room_slug) . ". To create: add autocreate=1 & valid token.</div>";
    exit;
  }
}

/**
 * 🔒 Blocked / inactive room check
 * Reuse is_active column if present; default to 1 (active) if missing.
 */
$ROOM_ACTIVE = isset($ROOM['is_active']) ? (int)$ROOM['is_active'] : 1;

if ($ROOM_ACTIVE === 0) {
    // Same admin check as above
    $hasToken = ($showAdminBar || ($token && hash_equals(INIT_ADMIN_TOKEN, $token)));

    if ($hasToken) {
        // Admin sees a banner but can still continue into the room
        echo "<div class='space-error space-warning'>This Space is currently offline (visible because you are using an admin token).</div>";
        // do NOT exit; let the rest of the page render for you
    } else {
        // Normal user: show “offline” message and stop, but NOT a 404
        http_response_code(200);
        echo "<div class='space-error'>
                <strong>This Space is currently offline.</strong><br>
                <span class='space-error-muted'>
                  The host or site admin has temporarily taken this Space offline.
                  Try another Room from the Portals.
                </span>
              </div>";
        exit;
    }
}

// ---------- view routing ----------
$view    = $_GET['view'] ?? 'messages';   // messages | post
$post_id = (int)($_GET['post'] ?? 0);

// ---------- handle messages post ----------
$errors = [];
if (($_POST['action'] ?? '') === 'send' && $view === 'messages'){
  $name = trim((string)($_POST['user'] ?? ''));
  $body = trim((string)($_POST['body'] ?? ''));
  $csrf = $_POST['csrf'] ?? '';
  error_log('COMMS: csrf posted=' . $csrf . ' expected=' . csrf_token());
  //if (!csrf_check($csrf)) { $errors[] = "Invalid session. Please reload."; }
  if ($name === '' || mb_strlen($name) > 32) { $errors[] = "Name required (<= 32 chars)."; }
  if ($body === '' || mb_strlen($body) > 2000) { $errors[] = "Message required (<= 2000 chars)."; }
  
  error_log('COMMS: about to insert message for room=' . ($room_slug ?? '??'));
  error_log('COMMS: errors payload = ' . print_r($errors, true));

  if (!$errors){
    $stmt = db()->prepare("INSERT INTO messages(room_id,user,body,created_at) VALUES(?,?,?,?)");
    $ok = $stmt->execute([$ROOM_ID, $name, $body, date('c')]);

    if (!$ok) {
      error_log('COMMS: insert FAILED: ' . print_r($stmt->errorInfo(), true));
    } else {
      error_log('COMMS: insert OK');
    }

    // PRG redirect
    $u = strtok($_SERVER['REQUEST_URI'],'?');
    $qs = http_build_query([
      'room'=>$room_slug,
      'view'=>'messages',
      'token'=>$showAdminBar?$token:null,
    ]);
    header("Location: {$u}?{$qs}#bottom"); exit;
  }
}

// ---------- fetch lists ----------

// use room 1 as the "global / all spaces" anchor
if (!defined('GLOBAL_ROOM_ID')) {
  define('GLOBAL_ROOM_ID', 1);
}

$rooms = db()->query("SELECT slug,name FROM rooms ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);

// posts = room-specific + global (room_id = GLOBAL_ROOM_ID), non-archived
$posts = (function($room_id){
  $sql = "
    SELECT id, title, created_at, room_id
    FROM posts
    WHERE room_id IN (?, ?)
      AND (is_archived IS NULL OR is_archived = 0)
    ORDER BY created_at DESC, id DESC
  ";
  $q = db()->prepare($sql);
  $q->execute([$room_id, GLOBAL_ROOM_ID]);
  return $q->fetchAll(PDO::FETCH_ASSOC);
})($ROOM_ID);

$nowHuman = date('Y-m-d H:i:s');

// ---------- per-view data ----------
$messages = $post = null;

if ($view === 'messages') {
  // messages stay room-scoped, no global
  $q = db()->prepare("
    SELECT user, body, created_at
    FROM messages
    WHERE room_id = ?
      AND is_deleted = 0
    ORDER BY id ASC
  ");
  $q->execute([$ROOM_ID]);
  $messages = $q->fetchAll(PDO::FETCH_ASSOC);

} elseif ($view === 'post') {
  // allow viewing:
  // - room-specific post
  // - global post (GLOBAL_ROOM_ID) from any room
  $sql = "
    SELECT id, title, body, created_at, room_id
    FROM posts
    WHERE id = ?
      AND (room_id = ? OR room_id = ?)
      AND (is_archived IS NULL OR is_archived = 0)
  ";
  $q = db()->prepare($sql);
  $q->execute([$post_id, $ROOM_ID, GLOBAL_ROOM_ID]);
  $post = $q->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en" <?= isset($_COOKIE['ui.theme']) ? 'data-theme="'.htmlspecialchars($_COOKIE['ui.theme']).'"' : 'light' ?>>
<head>
<meta charset="utf-8">
<title><?= h(str_replace("-", " ", $ROOM['name'])) ?> · <?= $page_title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">

<script>
(function () {
  try {
    const KEY = 'ui.theme';
    // Saved choice → system → default (dark)
    let t = localStorage.getItem(KEY);
    if (t !== 'light' && t !== 'dark') {
      t = matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
    }
    const root = document.documentElement;
    root.setAttribute('data-theme', t);
    // Hint to UA form controls
    root.style.colorScheme = t;
    // Prevent white flash before CSS arrives
    root.style.background = (t === 'light') ? '#f7f9ff' : '#0b1220';
  } catch (e) { /* fail safely */ }
})();
</script>

<script>
  (function () {
    const n = (localStorage.getItem('<?= $username_local_key ?>') || 'Guest').trim().slice(0,64);
    window.UI_NAME = n;
  })();
</script>

<link rel="stylesheet" href="assets/css/base.css?v=<?= filemtime(__DIR__.'/assets/css/base.css') ?>">
<link rel="stylesheet" href="<?= $env['web_base'] ?>/assets/css/components/layout.css?v=<?= filemtime(__DIR__.'/assets/css/components/layout.css') ?>">
<link rel="stylesheet" href="<?= $env['web_base'] ?>/assets/css/components/video.css?v=<?= filemtime(__DIR__.'/assets/css/components/video.css') ?>">
<link rel="stylesheet" href="<?= $env['web_base'] ?>/assets/css/components/watch.css?v=<?= filemtime(__DIR__.'/assets/css/components/watch.css') ?>">
<link rel="stylesheet" href="<?= $env['web_base'] ?>/assets/css/components/panels.css?v=<?= filemtime(__DIR__.'/assets/css/components/panels.css') ?>">
<link rel="stylesheet" href="<?= $env['web_base'] ?>/assets/css/components/footer.css?v=<?= filemtime(__DIR__.'/assets/css/components/footer.css') ?>">
<link rel="stylesheet" href="assets/css/components/futuristic.css?v=<?= filemtime(__DIR__.'/assets/css/components/futuristic.css') ?>">
<link rel="stylesheet" href="<?= $env['web_base'] ?>/assets/css/components/modal.css?v=<?= filemtime(__DIR__.'/assets/css/components/modal.css') ?>">
<link rel="stylesheet" href="<?= $env['web_base'] ?>/assets/css/components/toast.css?v=<?= filemtime(__DIR__.'/assets/css/components/toast.css') ?>">

<link rel="stylesheet" href="assets/css/site.css?v=<?= filemtime(__DIR__.'/assets/css/site.css') ?>">

</head>
<body>
<div class="page">

<?php if (file_exists(__DIR__ . '/_topnav.php')) { require_once __DIR__ . '/_topnav.php'; if (function_exists('render_admin_topnav')) render_admin_topnav(['token'=>$token]); } ?>

<header>
  <div>
    <strong class="main-title"><?= h(str_replace("-", " ", $ROOM['name'])) ?> · Space</strong>
    <span class="dim">— <?= h($nowHuman) ?></span>
  </div>
  <div class="chips pillrow">
    <span class="chip"><mark>BETA</mark></span>
    <span class="chip">🟢 active: demo</span>
    <span class="chip">👥 visitors: 3</span>
    <span class="chip">⚡ latency: 6ms</span>
  </div>
</header>

<div id="workspace" class="row">
  <a class="anchor" id="sections"></a>
  <aside class="panel">
    <h3>Posts (<?= count($posts) ?>)</h3>
    <div class="list">
      <?php if (!$posts): ?>
        <div class="item"><span class="dim">No posts yet.</span></div>
      <?php else: foreach ($posts as $p): ?>

        <div class="item">
          <div>
            <a href="?room=<?= rawurlencode($ROOM['slug']) ?>&view=post&post=<?= (int)$p['id'] ?><?= $showAdminBar?'&token='.rawurlencode($token):''; ?>">
              <?= h($p['title']) ?>
            </a>
            <div class="dim"><?= h(date('Y-m-d H:i', strtotime($p['created_at']))) ?></div>
          </div>
        </div>
      <?php endforeach; endif; ?>
    </div>

    <h3>Spaces (<?= count($rooms) ?>)</h3>
    <div class="toolbar">
      <a class="btn chip" href="?room=<?= $ROOM['slug'] ?>">Chat: <strong><?= h(str_replace("-", " ", $ROOM['name'])) ?></strong></a>
      <?php if ($ROOM['slug'] !== MAIN_ROOM_SLUG): ?>
        <a class="btn chip" href="?room=main">Open <strong>Main Space</strong></a>
      <?php endif; ?>
    </div>

  </aside>

  <a class="anchor panel-viewer" id="panel"></a>
  <main class="panel viewer-three-up">
    <h3>
      <span class="emoji" role="img" aria-label="rainbow">🌈</span>
      Panel — <?= ($view === 'post') ? 'Post' : 'Space'; ?>
    </h3>

    <?php if ($view === 'messages'): ?>
      <div id="viewer-inner-toolbar" class="toolbar" style="display:flex;align-items:center;gap:8px">
        <?php if ($errors): ?>
          <div class="chip" style="background:#3a1f1f;border-color:#5f2a2a;color:#ffdada"><?= h(implode(' ', $errors)) ?></div>
        <?php else: ?>
          <span class="dim">Chat: <?= h(str_replace("-", " ", $ROOM['name'])) ?></span>
        <?php endif; ?>

        <span id="room-status" class="muted" aria-live="polite"></span>

        <span style="flex:1"></span>

        <a class="btn chip" id="btn-watch-toggle" href="#watch">🎬 Watch together</a>
        <a class="btn chip" id="btn-two-up" href="#layout" title="Toggle side-by-side (S)">🧩 Side-by-side</a>

        <?php
          $jitsiUrl = rtrim(JITSI_BASE_URL, '/') . '/' . rawurlencode($ROOM['slug']);
        ?>
        <a class="btn chip" id="btn-video-toggle"
           href="#video"
           data-jitsi="<?= h($jitsiUrl) ?>"
           title="Join this room’s video chat (V)">
          🎥 Join video chat
        </a>

        <?php // <a id="btn-futuristic" class="btn small" style="">✨ Futuristic mode</a> ?>

      </div>

      <!-- chat-block START (new) -->
      <div id="chat-block" class="room-panel">

      <div class="video-bar">
        <strong>Messages</strong>
        <span style="flex:1"></span>
      </div>

      <pre id="log" class="mono"><?php
        if (!$messages){ echo "No messages yet — be the first to say hello 👋
"; }
        else {
          foreach ($messages as $m){
            $ts = date('Y-m-d H:i', strtotime($m['created_at']));
            $user = $m['user'];
            $body = $m['body'];
            echo h("[$ts] <$user> ") . h($body) . "
";
          }
        }
      ?></pre>

      <div class="toolbar">
        <form id="composer" method="post" class="stack" style="width:100%">
          <input type="hidden" name="action" value="send">
          <input type="hidden" name="csrf" value="<?= h(csrf_token()) ?>">
          <input type="hidden" name="room" value="<?= h($ROOM['slug']) ?>">
          <div style="display:grid;grid-template-columns:180px 1fr auto;gap:8px;align-items:start">
            <label style="width:100%"><input type="text" name="user" maxlength="32" placeholder="Your name" disabled></label>
            <label style="width:100%"><textarea name="body" rows="2" placeholder="Type a message (no uploads in MVP)"></textarea></label>
            <button type="submit">Send</button>
          </div>
        </form>
      </div>
      <div id="bottom"></div>

      </div>
      <!-- chat-block END (new) -->

      <div class="gutter" aria-hidden="true"></div>

      <!-- Video Chat Panel (Jitsi) -->
      <div id="video-panel" class="video-panel room-panel hidden" aria-hidden="true">
        <div class="video-bar">
          <strong>Video chat — <?= h(str_replace("-", " ", $ROOM['name'])) ?></strong>
          <span style="flex:1"></span>
          <a class="btn btn-secondary chip" id="btn-video-pop" target="_blank" rel="noopener">Pop out ↗</a>
          <button class="btn btn-secondary chip" id="btn-video-leave" type="button">Leave</button>
        </div>
        <div class="video-frame">
          <!-- iframe injected here when joined -->
        </div>
      </div>

      <!-- Watch Together Panel -->
      <div id="watch-panel" class="watch room-panel hidden" aria-hidden="true">
        <div class="video-bar">
          <strong>Watch together</strong>
          <span style="flex:1"></span>
          <label class="chip" style="cursor:pointer">
            <input type="checkbox" id="watch-host" style="vertical-align:middle;margin-right:6px">
            I am the host (my controls sync)
          </label>
          <button class="btn btn-secondary chip" id="watch-reset" type="button" title="Unload / clear state">Reset</button>
          <button class="btn btn-secondary chip" id="watch-leave" type="button">Close</button>
        </div>

        <div class="watch-controls">
          <input id="watch-url" type="text" placeholder="Paste a YouTube link (host only)" />
          <button class="btn" id="watch-load" type="button" title="Load video (host only)">Load</button>
          <span class="muted" id="watch-status"></span>
        </div>

        <div class="watch-frame">
          <div id="yt-player"></div>
        </div>
      </div>

    <?php elseif ($view === 'post' && $post): ?>
      <div id="viewer-inner-toolbar" class="toolbar" style="display:flex;align-items:center;gap:8px">
        <?php if ($errors): ?>
          <div class="chip" style="background:#3a1f1f;border-color:#5f2a2a;color:#ffdada"><?= h(implode(' ', $errors)) ?></div>
        <?php else: ?>
          <span class="dim">Posts · Updates & Announcements</span>
        <?php endif; ?>

        <span style="flex:1"></span>

      </div>
      <div class="post">
        <h1><?= h($post['title']) ?></h1>
        <div id="post-date" class="muted"><?= h(date('Y-m-d H:i', strtotime($post['created_at']))) ?></div>
        <pre class="mono" style="max-height:none"><?= h($post['body']) ?></pre>
      </div>
    <?php else: ?>
      <div class="post"><em class="muted">Select a post from the left.</em></div>
    <?php endif; ?>

    <div class="gutter" aria-hidden="true"></div>

    <div id="site-legal" class="site-legal" style="padding:10px 12px;color:#94a3b8;display:flex;gap:10px;flex-wrap:wrap;align-items:center">
    <span class="chip"><mark>BETA</mark></span>
    <span><?= $brand['name'] ?> is in active development. Spaces are created intentionally with <code>?autocreate=1</code> and a valid token.</span>
    </div>
  </main>
</div>
<?php 
// In index.php, right before requiring the footer
$FOOTER_LABEL = ucwords($room_slug) . " (@{$room_slug})";

// require __DIR__ . '/_footer.php'; 

?>
</div>

<div id="future-root" aria-hidden="true" hidden>
  <!-- we’ll portal existing panels in here -->
  <button id="future-exit" aria-label="Exit futuristic mode">✕</button>

  <!-- Stickers container (positioned ancestor) -->
  <div class="future-stickers">
    <div id="sticker-1" class="sticker"></div>
    <div id="sticker-2" class="sticker"></div>
    <div id="sticker-3" class="sticker"></div>
  </div>

</div>

<!-- NAME MODAL -->
<div id="name-modal" class="modal" hidden aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="name-modal-title">
  <div class="modal-card">
    <h3 id="name-modal-title">Your display name</h3>
    <p class="muted" style="margin-top:-4px">Used for chat and video.</p>
    <label class="stack" style="margin-top:10px">
      <input id="name-input" type="text" maxlength="32" placeholder="Enter your name">
    </label>
    <small class="text-muted" id="last-used-name-note">
        Last used name: <span id="last-used-name-value"></span>
    </small>
    <div class="row" style="justify-content:flex-end; gap:8px; margin-top:14px">
      <button id="name-cancel" class="btn muted name-modal-btn">Cancel</button>
      <button id="name-save" class="btn primary name-modal-btn">Save</button>
    </div>
  </div>
</div>

<script>
// Track current + last used name in localStorage (single current key)
(function () {
    var KEY_CURRENT_NAME = 'lensshare:name';
    var KEY_LAST_NAME    = 'lensshare_last_used_name';

    function loadString(key) {
        try {
            return localStorage.getItem(key) || '';
        } catch (e) {
            return '';
        }
    }

    function saveString(key, value) {
        try {
            if (!value) return;
            localStorage.setItem(key, value);
        } catch (e) {
            // ignore
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        var input = document.getElementById('name-input');
        var note  = document.getElementById('last-used-name-note');
        var span  = document.getElementById('last-used-name-value');
        var btn   = document.getElementById('name-save');

        if (!input) return; // Name UI not on this page

        // ⬇️ Capture the current name ONCE when the modal boots
        var currentName = loadString(KEY_CURRENT_NAME);
        var lastName    = loadString(KEY_LAST_NAME);

        // Prefill input with current name, if any
        if (!input.value && currentName) {
            input.value = currentName;
        }

        // Show "Last used name" only if we have one
        if (lastName && span && note) {
            span.textContent = lastName;
            note.style.display = 'block';
        } else if (note) {
            note.style.display = 'none';
        }

        function persist() {
            var newName = (input.value || '').trim();
            if (!newName) return;

            // 🔥 Use the captured currentName (the "old" value),
            // not whatever profile.js just wrote.
            if (currentName && currentName !== newName) {
                saveString(KEY_LAST_NAME, currentName);

                if (span) {
                    span.textContent = currentName;
                }
                if (note) {
                    note.style.display = 'block';
                }
            }

            // Update current name in storage
            saveString(KEY_CURRENT_NAME, newName);

            // Update our in-memory reference for next time the user reopens the modal
            currentName = newName;
        }

        if (btn) {
            btn.addEventListener('click', persist);
        }

        // Optional: also persist on Enter
        input.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                persist();
            }
        });
        // (Leave blur handling off here if profile.js is already doing its thing)
    });
})();
</script>



<div id="toast-stack" class="toast-stack" aria-live="polite" aria-atomic="true"></div>

<script>
  window.COMMS_ROOM_SLUG = <?= json_encode($ROOM['slug']) ?>;
  window.WATCH_CONFIG = {
    csrf: <?= json_encode(csrf_token()) ?>,
    api:  <?= json_encode($WATCH_API_URL) ?>
  };
  
</script>

<script src="<?= $env['web_base'] ?>/assets/js/components/video.js?v=<?= filemtime(__DIR__.'/assets/js/components/video.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/watch.js?v=<?= filemtime(__DIR__.'/assets/js/components/watch.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/profile.js?v=<?= filemtime(__DIR__.'/assets/js/components/profile.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/watch-api.js?v=<?= filemtime(__DIR__.'/assets/js/components/watch-api.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/utils/socket.js?v=<?= filemtime(__DIR__.'/assets/js/utils/socket.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/chat.js?v=<?= filemtime(__DIR__.'/assets/js/components/chat.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/watch-adapter.js?v=<?= filemtime(__DIR__.'/assets/js/components/watch-adapter.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/watch-sync.js?v=<?= filemtime(__DIR__.'/assets/js/components/watch-sync.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/watch-host.js?v=<?= filemtime(__DIR__.'/assets/js/components/watch-host.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/futuristic.js?v=<?= filemtime(__DIR__.'/assets/js/components/futuristic.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/presence.js?v=<?= filemtime(__DIR__.'/assets/js/components/presence.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/toast.js?v=<?= filemtime(__DIR__.'/assets/js/components/toast.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/utils/theme.js?v=<?= filemtime(__DIR__.'/assets/js/utils/theme.js') ?>" defer></script>
<script src="<?= $env['web_base'] ?>/assets/js/components/grid-resizer.js?v=<?= filemtime(__DIR__.'/assets/js/components/grid-resizer.js') ?>" defer></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    if (window.CommsLayout && typeof window.CommsLayout.initThreeUp === 'function') {
      window.CommsLayout.initThreeUp();
    }
  });
</script>

</body>
</html>
