<?php
// admin/kpi_dashboard.php — KPIs for single-DB schema
// Schema:
//   rooms(id INTEGER PRIMARY KEY, slug TEXT UNIQUE, ...)
//   messages(id INTEGER, room_id INTEGER, created_at INT|TEXT, ...)
// Link: messages.room_id -> rooms.id; use rooms.slug ("main","demo") for labels.

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config.php';

define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);
define('DB_PATH', env_db_path());
define('ROOM_VIEW_BASE', '../index.php');   // the page that accepts ?room=...&token=...

function deny($m){ http_response_code(403); echo htmlspecialchars($m); exit; }
function h($s){ return htmlspecialchars($s,ENT_QUOTES,'UTF-8'); }

// --- guard & db open ---
$TOKEN=$_GET['token']??''; if(!hash_equals(INIT_ADMIN_TOKEN,$TOKEN)) deny('invalid token');
if(!is_file(DB_PATH)) deny('database missing');

try {
  $db = new PDO('sqlite:'.DB_PATH, null, null, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (Throwable $e) { deny('cannot open db: '.$e->getMessage()); }

// --- helpers (tolerate INT epoch OR TEXT dates) ---
function count_where(PDO $db, string $where='1=1', array $params=[]): int {
  foreach ([
    // Use UNIX epoch interpretation if possible
    "SELECT COUNT(1) FROM messages m WHERE $where",
  ] as $sql) {
    try { $st=$db->prepare($sql); $st->execute($params); $v=$st->fetchColumn(); if($v!==false) return (int)$v; } catch(Throwable $e){}
  }
  return 0;
}
// Build date filter that works for INT epoch or TEXT
function where_date_equals(string $col, string $ymd): string {
  return "(date($col,'unixepoch','localtime') = :d OR date($col) = :d)";
}
function where_date_gte(string $col, string $ymd): string {
  return "(date($col,'unixepoch','localtime') >= :d OR date($col) >= :d)";
}
function where_month_eq(string $col, string $ym): string {
  return "(strftime('%Y-%m',$col,'unixepoch','localtime') = :m OR strftime('%Y-%m',$col) = :m)";
}
function fetch_rows(PDO $db, array $sqls, array $params=[]): array {
  foreach ($sqls as $sql) {
    try { $st=$db->prepare($sql); $st->execute($params); $rows=$st->fetchAll(); if($rows!==false) return $rows; } catch(Throwable $e){}
  }
  return [];
}

// --- dates ---
$today      = date('Y-m-d');
$yesterday  = date('Y-m-d', strtotime('-1 day'));
$week_start = date('Y-m-d', strtotime('monday this week'));
$lastweek_start = date('Y-m-d', strtotime('monday last week'));
$lastweek_end   = date('Y-m-d', strtotime('sunday last week'));
$month_start= date('Y-m-01');
$last_month = date('Y-m', strtotime('first day of -1 month'));

// --- totals (ALL rooms) ---
$total = count_where($db, "1=1");
$today_c = count_where($db, where_date_equals('m.created_at', ':d'), [':d'=>$today]);
$yest_c  = count_where($db, where_date_equals('m.created_at', ':d'), [':d'=>$yesterday]);
$week_c  = count_where($db, where_date_gte('m.created_at', ':d'), [':d'=>$week_start]);
$month_c = count_where($db, where_month_eq('m.created_at', ':m'), [':m'=>date('Y-m')]);

// last week / last month for deltas
$last_week_c = count_where(
  $db,
  "(" . where_date_gte('m.created_at', ':a') . ") AND (" . where_date_equals('m.created_at', ':b') . " OR date(m.created_at,'unixepoch','localtime') <= :b OR date(m.created_at) <= :b)",
  [':a'=>$lastweek_start, ':b'=>$lastweek_end]
);
// For last_week_c we mixed operators; simpler: recompute with BETWEEN using both modes:
if ($last_week_c===0) {
  $last_week_c = count_where($db,
    "( (date(m.created_at,'unixepoch','localtime') >= :a AND date(m.created_at,'unixepoch','localtime') <= :b)
     OR (date(m.created_at) >= :a AND date(m.created_at) <= :b) )",
     [':a'=>$lastweek_start, ':b'=>$lastweek_end]
  );
}

$last_month_c = count_where($db, where_month_eq('m.created_at', ':m'), [':m'=>$last_month]);

// --- per-room totals via LEFT JOIN (include zero-message rooms) ---
$room_totals = fetch_rows($db, [
  "SELECT r.slug AS slug, COUNT(m.id) AS c
     FROM rooms r
LEFT JOIN messages m ON m.room_id = r.id
 GROUP BY r.slug
 ORDER BY r.slug"
]);

// --- weekly per-room for 'most active' ---
$week_room_rows = fetch_rows($db, [
  "SELECT r.slug AS slug, COUNT(m.id) AS c
     FROM messages m
     JOIN rooms r ON r.id = m.room_id
    WHERE " . where_date_gte('m.created_at', ':d') . "
   GROUP BY r.slug
   ORDER BY c DESC"
], [':d'=>$week_start]);

$week_room_counts = [];
foreach ($week_room_rows as $r) $week_room_counts[$r['slug']] = (int)$r['c'];
$most_active = '—';
if ($week_room_counts) {
  $max = max($week_room_counts);
  $cands = array_keys(array_filter($week_room_counts, fn($v)=>$v===$max));
  $most_active = in_array('main',$cands,true) ? 'main' : $cands[0];
}

// --- 7-day series (ALL rooms) ---
$series = [];
for ($i=6; $i>=0; $i--) {
  $d = date('Y-m-d', strtotime("-$i day"));
  $series[$d] = count_where($db, where_date_equals('m.created_at', ':d'), [':d'=>$d]);
}

// --- simple derived ---
$avg_day = round(array_sum($series)/max(1,count($series)), 2);
$delta_pct = function(int $new, int $old): string {
  if ($old === 0) return $new>0 ? '+100%' : '0%';
  $p = round((($new - $old) / $old) * 100, 1);
  return ($p>0?'+':'').$p.'%';
};
$today_vs_yest = $delta_pct($today_c, $yest_c);
$week_vs_last  = $delta_pct($week_c, $last_week_c);
$month_vs_last = $delta_pct($month_c, $last_month_c);

// --- format room list map ---
$room_counts = [];
foreach ($room_totals as $r) $room_counts[$r['slug']] = (int)$r['c'];
ksort($room_counts);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>KPI Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="<?= $env['favicon_type'] ?>" href="<?= $env['favicon_path'] ?>">
<style>
:root{ --bg:#0b0f14; --ink:#e7eef7; --mut:#9ab; --panel:#121821; --border:#1e293b; --chip:#1c2430; --acc:#7dd3fc; }
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
body{margin:0;background:#0b0f14;color:#e8f0f7;font:14px/1.4 system-ui,-apple-system,Segoe UI,Roboto,Arial}
a{color: var(--acc);text-decoration: none;}
a:hover{text-decoration: underline;}
.wrap{max-width:1000px;margin:1vh auto 5vh auto;padding:20px}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px}
.card{background:#11161d;border:1px solid #1b2430;border-radius:12px;padding:14px}
.k{font-size:12px;color:#8ca0b3}.v{font-size:24px;font-weight:700}
.badge{font-size:11px;padding:2px 6px;border-radius:999px;margin-left:6px}
.up{color:#39ff8a}.down{color:#ff6060}.flat{color:#8ca0b3}
ul{list-style:none;padding:0;margin:0}
li{display:flex;justify-content:space-between;padding:6px 0;border-bottom:1px solid #1b2430}
canvas{width:100%;height:320px;background:#0a0e13;border:1px solid #1b2430;border-radius:12px;margin-top:14px}
.chart-wrap {
  height: 320px;            /* ← fixed height you want */
  width: 100%;
}
.chart-wrap > canvas {
  height: 100% !important;  /* fill the wrapper */
  width: 100% !important;
  display: block;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
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
  <h2>Simple KPI Dashboard</h2>

  <div class="grid">
    <div class="card"><div class="k">Total Messages</div><div class="v"><?= $total ?></div></div>
    <div class="card"><div class="k">Today</div>
      <div class="v"><?= $today_c ?>
        <span class="badge <?= $today_c>$yest_c?'up':($today_c<$yest_c?'down':'flat') ?>"><?= h($today_vs_yest) ?></span>
      </div>
    </div>
    <div class="card"><div class="k">This Week</div>
      <div class="v"><?= $week_c ?>
        <span class="badge <?= $week_c>$last_week_c?'up':($week_c<$last_week_c?'down':'flat') ?>"><?= h($week_vs_last) ?></span>
      </div>
    </div>
    <div class="card"><div class="k">This Month</div>
      <div class="v"><?= $month_c ?>
        <span class="badge <?= $month_c>$last_month_c?'up':($month_c<$last_month_c?'down':'flat') ?>"><?= h($month_vs_last) ?></span>
      </div>
    </div>
    <div class="card"><div class="k">Avg / Day (7d)</div><div class="v"><?= $avg_day ?></div></div>
    <div class="card"><div class="k">Most Active Room (This Week)</div><div class="v"><?= h($most_active) ?></div></div>
  </div>

  <div class="card" style="margin-top:14px;margin-bottom:16px;">
    <div class="k">Messages by Room (all time)</div>
    <ul>
      <?php foreach ($room_counts as $slug => $c): ?>
        <?php
          $params = ['room' => $slug, 'token' => $TOKEN];
          $sep    = (strpos(ROOM_VIEW_BASE, '?') === false) ? '?' : '&';
          $url    = ROOM_VIEW_BASE . $sep . http_build_query($params);
        ?>
        <li>
          <span><a href="<?= h($url) ?>" target="_blank" rel="noopener"><?= h($slug) ?></a></span>
          <span><?= (int)$c ?></span>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="card">
    <div class="k">Last 7 Days (all rooms)</div>
    <div class="chart-wrap"><canvas id="chart7"></canvas></div>
  </div>
</div>
<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
<script>
const ctx=document.getElementById('chart7');
const labels=<?= json_encode(array_keys($series)) ?>;
const data=<?= json_encode(array_values($series)) ?>;
if(ctx&&window.Chart){
  new Chart(ctx,{
    type:'line',
    data:{labels:labels,datasets:[{label:'Messages per Day',data:data}]},
    options:{responsive:true,maintainAspectRatio:false,scales:{y:{beginAtZero:true}}}
  });
}
</script>
</body>
</html>
