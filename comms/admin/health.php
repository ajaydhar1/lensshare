<?php
// admin/health.php — focused system + activity health view
// Uses same DB + styling as admin/index.php
//
// Schema (same as index.php):
//   rooms(id INTEGER PRIMARY KEY, slug TEXT UNIQUE)
//   messages(id INTEGER, room_id INTEGER, user TEXT, body TEXT, created_at INT|TEXT)

ini_set('display_errors','0'); 
error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config.php';

/* ====== CONFIG — match index.php ====== */
define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);
define('DB_PATH', env_db_path());
define('ROOM_VIEW_BASE', '../../room.php'); // viewer that accepts ?room=...&token=...
/* ====================================== */

function h($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

/* ---- auth guard: only allow logged-in admin ---- */
if (empty($_SESSION['is_admin'])) {
  header('Location: index.php');
  exit;
}

/* ---- timezone + date ---- */
if (function_exists('date_default_timezone_set')) {
  date_default_timezone_set('America/New_York');
}
$tz   = new DateTimeZone('America/New_York');
$now  = new DateTime('now', $tz);
$today = $now->format('Y-m-d');

/* ---- DB + health data ---- */
$dbPath       = DB_PATH;
$dbOk         = is_file($dbPath);
$dbSize       = $dbOk ? filesize($dbPath) : 0;
$status_error = '';

$rooms_count          = 0;
$msgs_total           = 0;
$msgs_24h             = 0;
$active_rooms_24h     = 0;
$distinct_anon_users  = 0;
$last_message_dt      = null;
$last_message_stamp   = '—';
$last_message_ago     = '';

$activeRoomsLast24h   = [];
$activeRooms_error    = '';

/* ---- helpers ---- */

// file size
function human_bytes($b){
  $u = ['B','KB','MB','GB','TB'];
  $i = 0;
  while ($b >= 1024 && $i < count($u)-1) { $b /= 1024; $i++; }
  return sprintf('%0.1f %s', $b, $u[$i]);
}

// parse created_at (INT epoch or TEXT) into DateTime
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

// human “x mins ago”
function human_ago(DateTime $from, ?DateTime $to = null): string {
  $to   = $to ?: new DateTime('now', $from->getTimezone());
  $diff = max(0, $to->getTimestamp() - $from->getTimestamp());

  if ($diff < 60) return 'just now';

  $mins = intdiv($diff, 60);
  if ($mins < 60) return $mins . ' min' . ($mins === 1 ? '' : 's') . ' ago';

  $hours = intdiv($diff, 3600);
  if ($hours < 24) return $hours . ' hour' . ($hours === 1 ? '' : 's') . ' ago';

  $days = intdiv($diff, 86400);
  if ($days < 30) return $days . ' day' . ($days === 1 ? '' : 's') . ' ago';

  $months = intdiv($days, 30);
  if ($months < 12) return $months . ' month' . ($months === 1 ? '' : 's') . ' ago';

  $years = intdiv($months, 12);
  return $years . ' year' . ($years === 1 ? '' : 's') . ' ago';
}

// best-effort MAX(created_at) from a table (INT epoch or TEXT), or null
function db_max_created_at(PDO $pdo, string $table, string $col = 'created_at', ?DateTimeZone $tz = null): ?DateTime {
  try {
    $stmt = $pdo->prepare("SELECT name FROM sqlite_master WHERE type='table' AND name=:t");
    $stmt->execute([':t' => $table]);
    if (!$stmt->fetchColumn()) return null;

    $stmt = $pdo->query("SELECT MAX($col) AS mx FROM $table");
    $row  = $stmt ? $stmt->fetch() : null;
    if (!$row || $row['mx'] === null) return null;

    $mx = $row['mx'];
    $tz = $tz ?: new DateTimeZone(date_default_timezone_get());

    if (ctype_digit((string)$mx)) {
      return (new DateTime('@' . (int)$mx))->setTimezone($tz);
    }

    $stmt2 = $pdo->query("SELECT datetime(MAX($col)) AS mx2 FROM $table");
    $row2  = $stmt2 ? $stmt2->fetch() : null;
    if (!empty($row2['mx2'])) {
      return (new DateTime($row2['mx2']))->setTimezone($tz);
    }

    return (new DateTime((string)$mx))->setTimezone($tz);
  } catch (Throwable $e) {
    return null;
  }
}

/* ---- gather data if DB exists ---- */
if (!$dbOk) {
  $status_error = "Database not found at " . h($dbPath);
} else {
  try {
    $db = new PDO('sqlite:' . $dbPath, null, null, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // total rooms
    try {
      $rooms_count = (int)$db->query("SELECT COUNT(1) FROM rooms")->fetchColumn();
    } catch (Throwable $e) { /* ignore */ }

    // total messages
    try {
      $msgs_total = (int)$db->query("SELECT COUNT(1) FROM messages")->fetchColumn();
    } catch (Throwable $e) { /* ignore */ }

    // distinct anon users (from message.user)
    try {
      $distinct_anon_users = (int)$db->query("
        SELECT COUNT(DISTINCT user) 
        FROM messages 
        WHERE user IS NOT NULL AND TRIM(user) <> ''
      ")->fetchColumn();
    } catch (Throwable $e) { /* ignore */ }

    // messages in last 24 hours
    try {
      // 1) assume INT epoch
      $stmt = $db->query("
        SELECT COUNT(1) 
        FROM messages 
        WHERE datetime(created_at,'unixepoch','localtime') >= datetime('now','-1 day')
      ");
      $msgs_24h = (int)$stmt->fetchColumn();

      // 2) fallback to TEXT timestamps
      if ($msgs_24h === 0) {
        $stmt = $db->query("
          SELECT COUNT(1) 
          FROM messages 
          WHERE datetime(created_at) >= datetime('now','-1 day')
        ");
        $msgs_24h = (int)$stmt->fetchColumn();
      }
    } catch (Throwable $e) { /* ignore */ }

    // active rooms in last 24h
    try {
      // 1) epoch mode
      $stmt = $db->query("
        SELECT COUNT(DISTINCT room_id) 
        FROM messages 
        WHERE datetime(created_at,'unixepoch','localtime') >= datetime('now','-1 day')
      ");
      $active_rooms_24h = (int)$stmt->fetchColumn();

      // 2) fallback text mode
      if ($active_rooms_24h === 0) {
        $stmt = $db->query("
          SELECT COUNT(DISTINCT room_id) 
          FROM messages 
          WHERE datetime(created_at) >= datetime('now','-1 day')
        ");
        $active_rooms_24h = (int)$stmt->fetchColumn();
      }
    } catch (Throwable $e) { /* ignore */ }

    // latest message timestamp
    $last_message_dt = db_max_created_at($db, 'messages', 'created_at', $tz);
    if ($last_message_dt) {
      $last_message_stamp = $last_message_dt->format('Y-m-d h:i A');
      $last_message_ago   = human_ago($last_message_dt, $now);
    }

    // active rooms list for last 24h
    try {
      // try epoch mode first
      $sql_epoch = "
        SELECT 
          r.slug AS room_slug,
          COUNT(m.id)       AS msg_count,
          MAX(m.created_at) AS last_at
        FROM messages m
        JOIN rooms r ON r.id = m.room_id
        WHERE datetime(m.created_at,'unixepoch','localtime') >= datetime('now','-1 day')
        GROUP BY m.room_id
        ORDER BY last_at DESC
        LIMIT 20
      ";
      $stmt = $db->query($sql_epoch);
      $rows = $stmt ? $stmt->fetchAll() : [];

      // if nothing, fallback to text timestamps
      if (empty($rows)) {
        $sql_text = "
          SELECT 
            r.slug AS room_slug,
            COUNT(m.id)       AS msg_count,
            MAX(m.created_at) AS last_at
          FROM messages m
          JOIN rooms r ON r.id = m.room_id
          WHERE datetime(m.created_at) >= datetime('now','-1 day')
          GROUP BY m.room_id
          ORDER BY last_at DESC
          LIMIT 20
        ";
        $stmt = $db->query($sql_text);
        $rows = $stmt ? $stmt->fetchAll() : [];
      }

      $activeRoomsLast24h = $rows;
    } catch (Throwable $e) {
      $activeRooms_error = $e->getMessage();
    }

  } catch (Throwable $e) {
    $status_error = "DB error: " . h($e->getMessage());
  }
}

/* ---- room viewer links ---- */
$adminToken = $_SESSION['admin_token'] ?? INIT_ADMIN_TOKEN;
$viewerBase = ROOM_VIEW_BASE;
$sepBase    = (strpos($viewerBase, '?') === false) ? '?' : '&';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= $brand['name'] ?> Admin · Health</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">
<style>
:root{--bg:#0b0f14;--panel:#11161d;--muted:#8ca0b3;--text:#e8f0f7;--accent:#3fa0ff;--border:#1b2430}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--text);font:14px/1.4 system-ui,-apple-system,Segoe UI,Roboto,Arial}
/* page layout for sticky footer */
html, body { height: 100%; }
.page {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
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
a{color:var(--accent);text-decoration:none}
.wrap{max-width:960px;margin:3vh auto 6vh auto;padding:18px}
.card{background:var(--panel);border:1px solid var(--border);border-radius:14px;padding:16px}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px}
.k{font-size:12px;color:var(--muted);margin-bottom:6px}
.v{font-size:22px;font-weight:700}
.row{display:flex;gap:10px;align-items:center;flex-wrap:wrap}
.meta{color:var(--muted);font-size:12px;margin-top:6px;word-wrap:break-word}
.ul{list-style:none;margin:0;padding:0}
.ul li{display:flex;justify-content:space-between;padding:10px;border-bottom:1px solid var(--border)}
.header{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px}
.badge{font-size:11px;padding:2px 8px;border-radius:999px;border:1px solid var(--border);color:var(--muted)}
@media (max-width:740px){ .wrap{width:100%;padding:0 16px;} }

.welcome-banner {
  background:#0e141b; border-bottom:1px solid #1b2430; color:#e8f0f7;
  padding:10px 16px; display:flex; gap:14px; align-items:center; justify-content:space-between; margin-bottom: 12px;
}
.wb-left { display:flex; gap:16px; align-items:center; flex-wrap:wrap; width:100%; }
.wb-pill { font-size:12px; padding:4px 10px; border:1px solid #1b2430; border-radius:999px; color:#8ca0b3; background:#0c1218; word-wrap:break-word; max-width:100%; }
.wb-strong { color:#e8f0f7; font-weight:600; }
</style>
</head>
<body>
<div class="page">
<?php
// include admin topnav (same pattern as index.php)
$LOGGED_IN = !empty($_SESSION['is_admin']);
if ($LOGGED_IN) {
  $TOKEN = $_SESSION['admin_token'] ?? (defined('INIT_ADMIN_TOKEN') ? INIT_ADMIN_TOKEN : '');
  $topnav_file = __DIR__ . '/_topnav_admin.php';
  if (is_file($topnav_file)) {
    require_once $topnav_file;
    if (function_exists('render_admin_topnav')) {
      render_admin_topnav([
        'token'    => $TOKEN,
        'sticky'   => true,
        'preserve' => ['room','db'],
      ]);
    }
  }
}
?>

<div class="wrap">
  <div class="header">
    <div class="row">
      <strong style="font-size:16px;"><?= $brand['name'] ?> Admin · Health</strong>
      <span class="badge"><?= $LOGGED_IN ? 'Signed in' : 'Signed out' ?></span>
    </div>
    <div class="row">
      <span class="meta">Hello, <?= h($_SESSION['admin_user'] ?? 'admin') ?></span>
      <a class="btn" href="index.php">Back to dashboard</a>
    </div>
  </div>

  <?php
    // DB file mtimes
    $fmtFile = 'Y-m-d h:i A';
    $fileInfo = [];
    if ($dbOk) {
      $mainDT = (new DateTime('@'.filemtime($dbPath)))->setTimezone($tz)->format($fmtFile);
      $fileInfo[] = "DB: $mainDT";
      foreach ([$dbPath.'-wal' => 'WAL', $dbPath.'-shm' => 'SHM'] as $p => $label) {
        if (is_file($p)) {
          $fileInfo[] = $label . ': ' . (new DateTime('@'.filemtime($p)))->setTimezone($tz)->format($fmtFile);
        }
      }
    }
  ?>

  <div class="welcome-banner">
    <div class="wb-left">
      <span class="wb-strong">System Health</span>
      <span class="wb-pill"><?= $now->format('l, F j, Y') ?></span>
      <span class="wb-pill">DB: <code><?= h($dbPath) ?></code></span>
      <span class="wb-pill">Size: <?= h(human_bytes($dbSize)) ?></span>
      <?php if (!empty($fileInfo)): ?>
        <span class="wb-pill"><?= h(implode(' · ', $fileInfo)) ?></span>
      <?php endif; ?>
      <span class="wb-pill">
        Last message: <?= h($last_message_stamp) ?><?= $last_message_ago ? ' · '.h($last_message_ago) : '' ?>
      </span>
    </div>
  </div>

  <?php if (!empty($status_error)): ?>
    <div class="card" style="margin-bottom:12px;">
      <div class="k">Status</div>
      <div class="meta" style="color:#ff8c8c;"><?= $status_error ?></div>
    </div>
  <?php else: ?>

    <!-- High-level snapshot -->
    <div class="card" style="margin-bottom:12px;">
      <div class="k" style="margin-bottom:8px;">Snapshot</div>
      <div class="grid">
        <div>
          <div class="k">Total spaces</div>
          <div class="v"><?= (int)$rooms_count ?></div>
        </div>
        <div>
          <div class="k">Total messages</div>
          <div class="v"><?= (int)$msgs_total ?></div>
        </div>
        <div>
          <div class="k">Total anon users (distinct)</div>
          <div class="v"><?= (int)$distinct_anon_users ?></div>
        </div>
      </div>
      <div class="meta" style="margin-top:8px;">
        Counts are based on the current SQLite database and refresh when you reload this page.
      </div>
    </div>

    <!-- Activity window (last 24 hours) -->
    <div class="card" style="margin-bottom:12px;">
      <div class="k" style="margin-bottom:8px;">Last 24 hours</div>
      <div class="grid">
        <div>
          <div class="k">Messages (last 24h)</div>
          <div class="v"><?= (int)$msgs_24h ?></div>
        </div>
        <div>
          <div class="k">Active spaces (last 24h)</div>
          <div class="v"><?= (int)$active_rooms_24h ?></div>
        </div>
      </div>
      <div class="meta" style="margin-top:8px;">
        “Active spaces” are rooms with at least one message in the last 24 hours.
      </div>
    </div>

    <!-- Active rooms list (last 24 hours) -->
    <div class="card" style="margin-bottom:12px;">
      <div class="header" style="margin-bottom:6px;">
        <div>
          <div class="k">Active rooms (last 24h)</div>
          <div class="meta">Most recently active rooms, based on latest message time.</div>
        </div>
      </div>

      <?php if ($activeRooms_error): ?>
        <div class="meta" style="color:#ff8c8c;"><?= h($activeRooms_error) ?></div>
      <?php elseif (empty($activeRoomsLast24h)): ?>
        <div class="meta">No room activity in the last 24 hours.</div>
      <?php else: ?>
        <div style="max-height:260px; overflow:auto; border-radius:10px; border:1px solid var(--border);">
          <ul class="ul">
            <?php foreach ($activeRoomsLast24h as $row):
              $slug      = $row['room_slug'] ?? '';
              $count     = (int)($row['msg_count'] ?? 0);
              $lastRaw   = $row['last_at'] ?? null;
              $dtLast    = $lastRaw ? dt_from_created($lastRaw, $tz) : null;
              $lastHuman = $dtLast ? human_ago($dtLast, $now) : '';
              $lastExact = $dtLast ? $dtLast->format('Y-m-d h:i A') : '';

              $params = ['room' => $slug, 'token' => $adminToken];
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
        </div>
      <?php endif; ?>

      <div class="meta" style="margin-top:8px;">
        Links open each room viewer in a new tab with your admin token attached.
      </div>
    </div>

  <?php endif; ?>

</div>
<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
</body>
</html>
