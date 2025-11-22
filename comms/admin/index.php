<?php
// admin/index.php — simple admin home w/ login + quick status
// Assumes single-DB schema at ../data/comms.sqlite:
//   rooms(id INTEGER PRIMARY KEY, slug TEXT UNIQUE)
//   messages(id INTEGER, room_id INTEGER, created_at INT|TEXT)

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config.php';

/* ====== CONFIG — change these as needed ====== */
define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);          // same token your tools expect
define('DB_PATH', env_db_path());
define('ROOM_VIEW_BASE', '../../room.php');            // viewer that accepts ?room=...&token=...
define('ADMIN_USER', 'ajay');                           // <— hard-coded login (your request)
define('ADMIN_PASS', 'ajay-777');                       // <— change this!
/* ============================================= */

function h($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
function deny($m){ http_response_code(403); echo h($m); exit; }

/* ---- auth flow ---- */
if (isset($_GET['logout'])) { $_SESSION = []; session_destroy(); header('Location: index.php'); exit; }

$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['a'] ?? '') === 'login') {
  $u = $_POST['u'] ?? '';
  $p = $_POST['p'] ?? '';
  if (hash_equals(ADMIN_USER, $u) && hash_equals(ADMIN_PASS, $p)) {
    $_SESSION['is_admin'] = true;
    $_SESSION['admin_user'] = $u;
    // keep the token in session so we don't type it
    $_SESSION['admin_token'] = INIT_ADMIN_TOKEN;
    header('Location: index.php'); exit;
  } else {
    $err = 'Invalid username or password.';
  }
}

$LOGGED_IN = !empty($_SESSION['is_admin']);

/* ---- quick status (only after login) ---- */
$rooms_count = $msgs_total = $msgs_today = 0;
$today = date('Y-m-d');

if ($LOGGED_IN) {
  if (!is_file(DB_PATH)) {
    $status_error = "Database not found at " . h(DB_PATH);
  } else {
    try {
      $db = new PDO('sqlite:' . DB_PATH, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]);

      // rooms count
      $rooms_count = (int)$db->query("SELECT COUNT(1) FROM rooms")->fetchColumn();

      // total messages
      $msgs_total  = (int)$db->query("SELECT COUNT(1) FROM messages")->fetchColumn();

      // today messages (tolerate INT epoch OR TEXT date)
      $stmt = $db->query("SELECT COUNT(1) FROM messages WHERE date(created_at,'unixepoch','localtime') = '$today'");
      $msgs_today = (int)$stmt->fetchColumn();
      if ($msgs_today === 0) {
        $stmt = $db->query("SELECT COUNT(1) FROM messages WHERE date(created_at) = '$today'");
        $msgs_today = (int)$stmt->fetchColumn();
      }

      // ---- "What's happening" data ----
      $recentMessages = [];
      $recentMessages_error = '';
      $activeRooms = [];
      $activeRooms_error = '';

      // helper: parse created_at into DateTime (INT epoch or TEXT)
      function dt_from_created($val, DateTimeZone $tz): ?DateTime {
        if ($val === null || $val === '') return null;
        try {
          $s = (string)$val;
          if (ctype_digit($s)) {
            return (new DateTime('@' . (int)$s))->setTimezone($tz);
          }
          return (new DateTime($s))->setTimezone($tz);
        } catch (Throwable $e) {
          return null;
        }
      }

      // latest 50 messages (message, who, which room)
      try {
        $sql = "
          SELECT 
            m.id,
            m.room_id,
            m.created_at,
            r.slug AS room_slug,
            m.user AS author,
            m.body AS body
          FROM messages m
          JOIN rooms r ON r.id = m.room_id
          ORDER BY m.created_at DESC
          LIMIT 50
        ";
        $stmt = $db->query($sql);
        $recentMessages = $stmt ? $stmt->fetchAll() : [];
      } catch (Throwable $e) {
        $recentMessages_error = $e->getMessage();
      }

      // rooms with most recent activity (latest message per room)
      try {
        $sql = "
          SELECT 
            r.slug AS room_slug,
            COUNT(m.id)          AS msg_count,
            MAX(m.created_at)    AS last_at
          FROM messages m
          JOIN rooms r ON r.id = m.room_id
          GROUP BY m.room_id
          ORDER BY last_at DESC
          LIMIT 10
        ";
        $stmt = $db->query($sql);
        $activeRooms = $stmt ? $stmt->fetchAll() : [];
      } catch (Throwable $e) {
        $activeRooms_error = $e->getMessage();
      }

    } catch (Throwable $e) {
      $status_error = "DB error: " . h($e->getMessage());
    }
  }
}

/* ---- helper to build tool links with token ---- */
function tool_url($path){
  $token = $_SESSION['admin_token'] ?? INIT_ADMIN_TOKEN;
  $sep   = (strpos($path, '?') === false) ? '?' : '&';

  // Always treat $path as relative to the admin base
  // (strip any accidental leading slash)
  $path = ltrim($path, '/');

  // Figure out the base "/.../admin" from the current script
  // Examples:
  //   SCRIPT_NAME = "/comms/admin/index.php"  -> base "/comms/admin"
  //   SCRIPT_NAME = "/comms/admin/tools/x.php" -> base "/comms/admin"
  //   SCRIPT_NAME = "/admin/index.php"         -> base "/admin"
  $scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

  if (substr($scriptDir, -6) === '/admin') {
      $adminBase = $scriptDir;
  } else {
      $parent = rtrim(str_replace('\\', '/', dirname($scriptDir)), '/');
      $adminBase = (substr($parent, -6) === '/admin') ? $parent : $scriptDir;
  }

  // Build absolute app-relative URL like "/comms/admin/kpi_dashboard.php"
  $url = $adminBase . '/' . $path;

  return $url . $sep . http_build_query(['token' => $token]);
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= $brand['name'] ?> Admin</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">
<style>
:root{--bg:#0b0f14;--panel:#11161d;--muted:#8ca0b3;--text:#e8f0f7;--accent:#3fa0ff;--border:#1b2430}
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
.wrap{max-width:960px;margin:3vh auto 6vh auto;padding:18px}
.card{background:var(--panel);border:1px solid var(--border);border-radius:14px;padding:16px}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px}
.k{font-size:12px;color:var(--muted);margin-bottom:6px}.v{font-size:22px;font-weight:700}
.input{width:100%;padding:10px;border-radius:10px;border:1px solid var(--border);background:#0c1218;color:var(--text)}
.btn{display:inline-block;padding:10px 14px;border-radius:10px;border:1px solid var(--border);background:#0c1218;color:var(--text)}
.row{display:flex;gap:10px;align-items:center;flex-wrap:wrap}
.meta{color:var(--muted);font-size:12px;margin-top:6px;word-wrap:break-word}
.ul{list-style:none;margin:0;padding:0}
.ul li{display:flex;justify-content:space-between;padding:10px;border-bottom:1px solid var(--border)}
.header{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px}
.badge{font-size:11px;padding:2px 8px;border-radius:999px;border:1px solid var(--border);color:var(--muted)}
@media (max-width:740px){ .wrap{width:100%;padding: 0 16px;} }
</style>
</head>
<body>
<div class="page">
<?php
// show admin topnav only when logged in
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

$LOGGED_IN = !empty($_SESSION['is_admin']);
if ($LOGGED_IN) {
  // prefer the session token set at login; fallback to your INIT constant
  $TOKEN = $_SESSION['admin_token'] ?? (defined('INIT_ADMIN_TOKEN') ? INIT_ADMIN_TOKEN : '');

  $topnav_file = __DIR__ . '/_topnav_admin.php'; // or '/_topnav.php' if that's your filename
  if (is_file($topnav_file)) {
    require_once $topnav_file;
    if (function_exists('render_admin_topnav')) {
      render_admin_topnav([
        'token'      => $TOKEN,
        // optional niceties:
        //'brand'      => 'Comms Portal Admin',
        'sticky'     => true,
        'preserve'   => ['room','db'], // keep these qs params when you click links
        // 'right_html' => '<span class="muted">Welcome, ' . htmlspecialchars($_SESSION["admin_user"] ?? "admin") . '</span>',
      ]);
    }
  }
}
?>

<div class="wrap">
  <div class="header">
    <div class="row">
      <strong style="font-size:16px;"><?= $brand['name'] ?> Admin</strong>
      <span class="badge"><?= $LOGGED_IN ? 'Signed in' : 'Signed out' ?></span>
    </div>
    <?php if ($LOGGED_IN): ?>
      <div class="row">
        <span class="meta">Hello, <?= h($_SESSION['admin_user'] ?? 'admin') ?></span>
        <a class="btn" href="?logout=1">Logout</a>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($LOGGED_IN): ?>
    <?php
      // Force admin UI timezone
      if (function_exists('date_default_timezone_set')) {
        date_default_timezone_set('America/New_York');
      }
      $tz   = new DateTimeZone('America/New_York');
      $now  = new DateTime('now', $tz);
      $date = $now->format('l, F j, Y');

      $dbPath = DB_PATH;
      $dbOk   = is_file($dbPath);
      $dbSize = $dbOk ? filesize($dbPath) : 0;

      // ---- helper: human size
      function human_bytes($b){$u=['B','KB','MB','GB','TB'];$i=0;while($b>=1024&&$i<count($u)-1){$b/=1024;$i++;}return sprintf('%0.1f %s',$b,$u[$i]);}

      // ---- file mtimes (main + WAL/SHM)
      $fmt = 'Y-m-d h:i A';
      $fileInfo = [];
      if ($dbOk) {
        $mainDT = (new DateTime('@'.filemtime($dbPath)))->setTimezone($tz)->format($fmt);
        $fileInfo[] = "DB: $mainDT";
        foreach ([$dbPath.'-wal' => 'WAL', $dbPath.'-shm' => 'SHM'] as $p => $label) {
          if (is_file($p)) {
            $fileInfo[] = $label.': ' . (new DateTime('@'.filemtime($p)))->setTimezone($tz)->format($fmt);
          }
        }
      }

      // ---- Data updated = latest message time (preferred freshness)
      $dataStamp = '—';
      $dataAgo   = '';
      
      // ---- helper: get max(created_at) from a table (INT epoch or TEXT), or null if table/col missing
      function db_max_created_at(PDO $pdo, string $table, string $col = 'created_at', DateTimeZone $tz = null): ?DateTime {
        try {
          // Quick existence check (avoids throwing on missing tables)
          $stmt = $pdo->prepare("SELECT name FROM sqlite_master WHERE type='table' AND name=:t");
          $stmt->execute([':t' => $table]);
          if (!$stmt->fetchColumn()) return null;

          // 1) Try raw MAX(col)
          $stmt = $pdo->query("SELECT MAX($col) AS mx FROM $table");
          $row  = $stmt ? $stmt->fetch() : null;
          if (!$row || $row['mx'] === null) return null;

          $mx = $row['mx'];
          $tz = $tz ?: new DateTimeZone(date_default_timezone_get());

          // If it's purely numeric, treat as epoch seconds
          if (ctype_digit((string)$mx)) {
            return (new DateTime('@' . (int)$mx))->setTimezone($tz);
          }

          // 2) Let SQLite normalize (handles many text formats)
          $stmt2 = $pdo->query("SELECT datetime(MAX($col)) AS mx2 FROM $table");
          $row2  = $stmt2 ? $stmt2->fetch() : null;
          if (!empty($row2['mx2'])) {
            return (new DateTime($row2['mx2']))->setTimezone($tz);
          }

          // 3) Fallback: try to parse whatever came back
          return (new DateTime((string)$mx))->setTimezone($tz);

        } catch (Throwable $e) {
          return null;
        }
      }

      // ---- compute the latest data timestamp across messages, rooms, posts
      $tablesToCheck = ['messages', 'rooms', 'posts']; // add/remove as needed
      $latestDT = null;

      if ($dbOk) {
        try {
          $pdo = new PDO('sqlite:' . $dbPath, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          ]);

          foreach ($tablesToCheck as $t) {
            $dt = db_max_created_at($pdo, $t, 'created_at', $tz);
            if ($dt && (!$latestDT || $dt->getTimestamp() > $latestDT->getTimestamp())) {
              $latestDT = $dt;
            }
          }
        } catch (Throwable $e) {
          // ignore; $latestDT stays null
        }
      }

      // Humanize a DateTime difference like "just now", "5 mins ago", "2 hours ago", "3 days ago", "4 months ago", "1 year ago"
      function human_ago(DateTime $from, ?DateTime $to = null): string {
        $to = $to ?: new DateTime('now', $from->getTimezone());
        $diff = max(0, $to->getTimestamp() - $from->getTimestamp());

        if ($diff < 60) return 'just now';

        $mins  = intdiv($diff, 60);
        if ($mins < 60) return $mins . ' min' . ($mins === 1 ? '' : 's') . ' ago';

        $hours = intdiv($diff, 3600);
        if ($hours < 24) return $hours . ' hour' . ($hours === 1 ? '' : 's') . ' ago';

        $days  = intdiv($diff, 86400);
        if ($days < 30) return $days . ' day' . ($days === 1 ? '' : 's') . ' ago';

        $months = intdiv($days, 30);
        if ($months < 12) return $months . ' month' . ($months === 1 ? '' : 's') . ' ago';

        $years = intdiv($months, 12);
        return $years . ' year' . ($years === 1 ? '' : 's') . ' ago';
      }

      // ---- format the winning timestamp
      $fmt       = 'Y-m-d h:i A';
      $dataStamp = $latestDT ? $latestDT->format($fmt) : '—';
      $dataAgo   = '';
      if ($latestDT) {
        $diffSec = max(0, $now->getTimestamp() - $latestDT->getTimestamp());
        $dataAgo = $latestDT ? human_ago($latestDT, $now) : '';
      }
    ?>

    <style>
      .welcome-banner {
        background:#0e141b; border-bottom:1px solid #1b2430; color:#e8f0f7;
        padding:10px 16px; display:flex; gap:14px; align-items:center; justify-content:space-between; margin-bottom: 12px;
      }
      .wb-left { display:flex; gap:16px; align-items:center; flex-wrap:wrap; width:100%; }
      .wb-pill { font-size:12px; padding:4px 10px; border:1px solid #1b2430; border-radius:999px; color:#8ca0b3; background:#0c1218;word-wrap:break-word;max-width:100%; }
      .wb-right { font-size:12px; color:#8ca0b3; }
      .wb-strong { color:#e8f0f7; font-weight:600; }
      code { word-wrap:break-word; }
    </style>

    <div class="welcome-banner">
      <div class="wb-left">
        <span class="wb-strong">Welcome, <?= h($_SESSION['admin_user'] ?? 'admin') ?></span>
        <span class="wb-pill"><?= h($date) ?></span>
        <span class="wb-pill">DB: <code><?= h($dbPath) ?></code></span>
        <span class="wb-pill">Size: <?= h(human_bytes($dbSize)) ?></span>
        <span class="wb-pill">Data updated: <?= h($dataStamp) ?><?= $dataAgo ? ' · '.h($dataAgo) : '' ?></span>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!$LOGGED_IN): ?>
    <div class="card" style="max-width:420px;margin:0 auto;">
      <div class="k" style="margin-bottom:10px;">Admin Login</div>
      <?php if ($err): ?><div class="meta" style="color:#ff8c8c;margin-bottom:8px;"><?= h($err) ?></div><?php endif; ?>
      <form method="post" autocomplete="off">
        <input type="hidden" name="a" value="login">
        <div style="margin-bottom:10px;">
          <input class="input" type="text" name="u" placeholder="Username" required>
        </div>
        <div style="margin-bottom:12px;">
          <input class="input" type="password" name="p" placeholder="Password" required>
        </div>
        <button class="btn" type="submit">Sign in</button>
      </form>
      <div class="meta" style="margin-top:10px;">DB: <code><?= h(DB_PATH) ?></code></div>
    </div>
  <?php else: ?>

    <?php if (!empty($status_error)): ?>
      <div class="card" style="margin-bottom:12px;"><?= $status_error ?></div>
    <?php else: ?>
      <div class="grid" style="margin-bottom:12px;">
        <div class="card"><div class="k">Rooms</div><div class="v"><?= (int)$rooms_count ?></div></div>
        <div class="card"><div class="k">Messages (total)</div><div class="v"><?= (int)$msgs_total ?></div></div>
        <div class="card"><div class="k">Messages (today)</div><div class="v"><?= (int)$msgs_today ?></div></div>
      </div>

      <?php
        // convenience token for room links
        $adminToken = $_SESSION['admin_token'] ?? INIT_ADMIN_TOKEN;
        $viewerBase = ROOM_VIEW_BASE;
        $sepBase    = (strpos($viewerBase, '?') === false) ? '?' : '&';
      ?>

      <!-- See what's happening: recent messages -->
      <div class="card" style="margin-bottom:12px;">
        <div class="header" style="margin-bottom:6px;">
          <div>
            <div class="k">See what's happening</div>
            <div class="meta">Latest messages across all rooms (most recent first)</div>
          </div>
        </div>

        <?php if ($recentMessages_error): ?>
          <div class="meta" style="color:#ff8c8c;"><?= h($recentMessages_error) ?></div>
        <?php elseif (empty($recentMessages)): ?>
          <div class="meta">No messages yet.</div>
        <?php else: ?>
          <div style="max-height:260px; overflow:auto; border-radius:10px; border:1px solid var(--border);">
            <ul class="ul">
              <?php foreach ($recentMessages as $row): 
                $slug   = $row['room_slug'] ?? '';
                $author = isset($row['author']) && $row['author'] !== '' ? $row['author'] : '—';
                $body   = isset($row['body'])   && $row['body']   !== '' ? $row['body']   : '';
                $body   = trim($body);
                if ($body === '') $body = '(no message body)';

                $createdRaw = $row['created_at'] ?? null;
                $dtMsg      = $createdRaw ? dt_from_created($createdRaw, $tz) : null;
                $whenHuman  = $dtMsg ? human_ago($dtMsg, $now) : '';
                $whenExact  = $dtMsg ? $dtMsg->format('Y-m-d h:i A') : '';

                $params = ['room'=>$slug, 'token'=>$adminToken];
                $url    = $viewerBase . $sepBase . http_build_query($params);

                // truncate message for the list
                $bodyShort = mb_substr($body, 0, 80);
                if (mb_strlen($body) > 80) $bodyShort .= '…';
              ?>
                <li>
                  <div style="flex:1; min-width:0;">
                    <div style="font-size:13px; color:#e8f0f7; white-space:nowrap; text-overflow:ellipsis; overflow:hidden;">
                      <?= h($bodyShort) ?>
                    </div>
                    <div class="meta">
                      @<?= h($slug) ?>
                      <?php if ($author !== '—'): ?> · <?= h($author) ?><?php endif; ?>
                      <?php if ($whenHuman): ?> · <?= h($whenHuman) ?><?php endif; ?>
                      <?php if ($whenExact): ?> · <span title="Exact time"><?= h($whenExact) ?></span><?php endif; ?>
                    </div>
                  </div>
                  <div>
                    <a class="btn" target="_blank" rel="noopener" href="<?= h($url) ?>">Open</a>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>

      <!-- Rooms with recent activity -->
      <div class="card" style="margin-bottom:12px;">
        <div class="header" style="margin-bottom:6px;">
          <div>
            <div class="k">Rooms with recent activity</div>
            <div class="meta">Most recently active rooms (by latest message)</div>
          </div>
        </div>

        <?php if ($activeRooms_error): ?>
          <div class="meta" style="color:#ff8c8c;"><?= h($activeRooms_error) ?></div>
        <?php elseif (empty($activeRooms)): ?>
          <div class="meta">No activity yet.</div>
        <?php else: ?>
          <ul class="ul">
            <?php foreach ($activeRooms as $row):
              $slug      = $row['room_slug'] ?? '';
              $count     = (int)($row['msg_count'] ?? 0);
              $lastRaw   = $row['last_at'] ?? null;
              $dtLast    = $lastRaw ? dt_from_created($lastRaw, $tz) : null;
              $lastHuman = $dtLast ? human_ago($dtLast, $now) : '';
              $lastExact = $dtLast ? $dtLast->format('Y-m-d h:i A') : '';

              $params = ['room'=>$slug, 'token'=>$adminToken];
              $url    = $viewerBase . $sepBase . http_build_query($params);
            ?>
              <li>
                <div style="flex:1; min-width:0;">
                  <div style="font-size:13px; color:#e8f0f7;">@<?= h($slug) ?></div>
                  <div class="meta">
                    <?= $count ?> msg<?= $count === 1 ? '' : 's' ?>
                    <?php if ($lastHuman): ?> · <?= h($lastHuman) ?><?php endif; ?>
                    <?php if ($lastExact): ?> · <span title="Exact time"><?= h($lastExact) ?></span><?php endif; ?>
                  </div>
                </div>
                <div>
                  <a class="btn" target="_blank" rel="noopener" href="<?= h($url) ?>">Open</a>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

    <?php endif; ?>


    <div class="card" style="margin-bottom:12px;">
      <div class="k" style="margin-bottom:8px;">Tools</div>
      <ul class="ul">
        <li><span>Health Check</span>  <a class="btn" href="<?= h(tool_url('health.php')) ?>">Open</a></li>
        <li><span>KPI Dashboard</span>  <a class="btn" href="<?= h(tool_url('kpi_dashboard.php')) ?>">Open</a></li>
        <li><span>Room Links</span>     <a class="btn" href="<?= h(tool_url('room_links.php')) ?>">Open</a></li>
        <?php if (is_file(__DIR__.'/log_browser.php')): ?>
          <li><span>Log Browser</span>  <a class="btn" href="<?= h(tool_url('log_browser.php')) ?>">Open</a></li>
        <?php endif; ?>
        <?php if (is_file(__DIR__.'/db_browser.php')): ?>
          <li><span>DB Browser</span>   <a class="btn" href="<?= h(tool_url('db_browser.php')) ?>">Open</a></li>
        <?php endif; ?>
      </ul>
      <div class="meta" style="margin-top:8px;">
        Token is auto-attached to links. Viewer base: <code><?= h(ROOM_VIEW_BASE) ?></code>
      </div>
    </div>

    <div class="card">
      <div class="k" style="margin-bottom:8px;">Quick Room Links</div>

      <div style="max-height:260px; overflow:auto; border-radius:10px; border:1px solid var(--border);">
        <ul class="ul">
          <?php
            try {
              $rows = $db->query("SELECT slug FROM rooms ORDER BY slug")->fetchAll(PDO::FETCH_COLUMN);
              foreach ($rows as $slug):
                $params = ['room'=>$slug, 'token'=>($_SESSION['admin_token'] ?? INIT_ADMIN_TOKEN)];
                $sep = (strpos(ROOM_VIEW_BASE,'?')===false) ? '?' : '&';
                $url = ROOM_VIEW_BASE . $sep . http_build_query($params);
          ?>
            <li><span>@<?= h($slug) ?></span> <a class="btn" target="_blank" rel="noopener" href="<?= h($url) ?>">Open</a></li>
          <?php
              endforeach;
            } catch (Throwable $e) {
              echo '<li><span>Error</span><span class="meta">'.h($e->getMessage()).'</span></li>';
            }
          ?>
        </ul>
      </div>

      <div class="meta" style="margin-top:8px;">
        Showing all rooms (scroll inside panel).
      </div>
    </div>

  <?php endif; ?>
</div>
<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
</body>
</html>
