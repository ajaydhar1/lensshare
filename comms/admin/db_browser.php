<?php
// admin/db_browser.php — Single-DB, read-only SQLite browser for LogFeed
// Usage: /admin/db_browser.php?token=YOUR_INIT_ADMIN_TOKEN
// Optional: &table=<name>&q=...&page=1&pagesize=50&sql=SELECT...
//
// SECURITY
// - Token-gated: requires ?token=... to equal INIT_ADMIN_TOKEN
// - Read-only: free-form SQL limited to SELECT/WITH/PRAGMA
// - No file path input; DB is fixed at ../data/comms.sqlite

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();
header_remove('X-Powered-By');
date_default_timezone_set('America/New_York');

require_once __DIR__ . '/../config.php';

define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);
define('DB_PATH', env_db_path());

function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function deny($m='forbidden'){ http_response_code(403); echo h($m); exit; }

// ---- auth ----
$TOKEN = $_GET['token'] ?? '';
if (!$TOKEN || !hash_equals(INIT_ADMIN_TOKEN, $TOKEN)) deny();

// ---- db open (read-only-ish) ----
if (!is_file(DB_PATH)) { http_response_code(500); echo "DB missing at: " . h(DB_PATH); exit; }
$pdo = new PDO('sqlite:' . DB_PATH, null, null, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
]);
$pdo->query('PRAGMA foreign_keys=ON');
$pdo->query('PRAGMA busy_timeout=2000');

// ---- params ----
$PAGE_SIZE_DEFAULT = 50; $PAGE_SIZE_MAX = 500;
$table    = isset($_GET['table']) ? preg_replace('/[^\w.]/','', $_GET['table']) : '';
$page     = max(1, (int)($_GET['page'] ?? 1));
$pagesize = min($PAGE_SIZE_MAX, max(1, (int)($_GET['pagesize'] ?? $PAGE_SIZE_DEFAULT)));
$offset   = ($page-1)*$pagesize;
$q        = trim((string)($_GET['q'] ?? ''));
$sqlFree  = trim((string)($_GET['sql'] ?? ''));

function preserve($extra = []){
  $keep = ['token','table','q','pagesize','page'];
  $out = [];
  foreach ($keep as $k) if (isset($_GET[$k])) $out[$k] = $_GET[$k];
  foreach ($extra as $k=>$v) $out[$k] = $v;
  return '?' . http_build_query($out);
}

// ---- tables + counts ----
$tables = $pdo->query("SELECT name, type FROM sqlite_master WHERE type IN ('table','view') AND name NOT LIKE 'sqlite_%' ORDER BY name")->fetchAll();
$counts = [];
foreach ($tables as $t) {
  try { $counts[$t['name']] = (int)$pdo->query("SELECT COUNT(*) FROM \"{$t['name']}\"")->fetchColumn(); }
  catch(Throwable $e){ $counts[$t['name']] = null; }
}

// ---- ad-hoc query (read-only) ----
$freeResult = null; $freeError = null; $freeColumns = [];
if ($sqlFree !== '') {
  $head = strtoupper(ltrim($sqlFree));
  if (!preg_match('/^(SELECT|WITH|PRAGMA)\b/s', $head)) {
    $freeError = 'Only SELECT/WITH/PRAGMA queries are allowed.';
  } else {
    try {
      $stmt = $pdo->query($sqlFree);
      if ($stmt instanceof PDOStatement) {
        $freeResult = $stmt->fetchAll();
        if ($freeResult) $freeColumns = array_keys($freeResult[0]);
      }
    } catch(Throwable $e) {
      $freeError = $e->getMessage();
    }
  }
}

// ---- selected table browse ----
$schema = []; $indexes = [];
$rows = []; $cols = []; $rowCount = null;
if ($table !== '') {
  try {
    $schema  = $pdo->query("PRAGMA table_info(\"$table\")")->fetchAll();
    $indexes = $pdo->query("PRAGMA index_list(\"$table\")")->fetchAll();
    $rowCount = (int)$pdo->query("SELECT COUNT(*) FROM \"$table\"")->fetchColumn();

    $colNames = array_map(fn($c)=>$c['name'], $schema);
    $where=''; $params=[];
    if ($q !== '' && $colNames){
      $likeCols=[];
      foreach ($schema as $c){
        $t = strtoupper($c['type'] ?? '');
        if ($t==='' || str_contains($t,'CHAR') || str_contains($t,'CLOB') || str_contains($t,'TEXT')){
          $likeCols[] = "\"{$c['name']}\" LIKE :qq";
        }
      }
      if ($likeCols){ $where = 'WHERE '.implode(' OR ',$likeCols); $params[':qq'] = '%'.$q.'%'; }
    }
    $sql = "SELECT * FROM \"$table\" $where LIMIT :lim OFFSET :off";
    $stmt = $pdo->prepare($sql);
    foreach ($params as $k=>$v) $stmt->bindValue($k,$v,PDO::PARAM_STR);
    $stmt->bindValue(':lim',$pagesize,PDO::PARAM_INT);
    $stmt->bindValue(':off',$offset,PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    if ($rows) $cols = array_keys($rows[0]);
  } catch(Throwable $e){
    $rows=[]; $schema=[]; $indexes=[]; $rowCount=null;
  }
}
$now = date('Y-m-d H:i:s');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SQLite Browser — <?=h(basename(DB_PATH))?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
a{color:var(--acc);text-decoration:none} a:hover{text-decoration:underline}
.wrap{max-width:1200px;margin:0 auto;padding:12px}
.card{background:var(--panel);border:1px solid var(--border);border-radius:12px;overflow:hidden;margin-bottom:12px}
.header{display:flex;flex-wrap:wrap;gap:8px;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--border)}
.badge{border:1px solid var(--border);padding:3px 8px;border-radius:10px;color:var(--mut)}
.grid{display:grid;grid-template-columns:260px 1fr;gap:12px}
@media (max-width:900px){ .grid{grid-template-columns:1fr} .panel h3{position:sticky;top:0;z-index:1;background:#0e1620}}
.panel{background:var(--panel);border:1px solid var(--border);border-radius:12px}
.panel h3{margin:0;padding:10px 12px;border-bottom:1px solid var(--border);background:#0e1620;font-size:13px;color:#cbd5e1}
.section{padding:10px 12px}
table{width:100%;border-collapse:collapse}
th,td{border-bottom:1px solid var(--border);padding:8px 10px;text-align:left;vertical-align:top}
th{background:#0f1621;position:sticky;top:0}
.input, textarea.input{padding:8px 10px;border:1px solid var(--border);border-radius:8px;background:#0b1220;color:var(--ink);width:100%}
.btn{padding:8px 10px;border:1px solid var(--border);border-radius:8px;background:#122232;color:#e5e7eb;cursor:pointer}
.note{color:var(--mut);font-size:12px}
.mono{font-family:ui-monospace,SFMono-Regular,Consolas,monospace}
.list{max-height:70vh;overflow:auto}
@media (max-width:740px){ .list{max-height:none;overflow:visible} .input, .btn{font-size:16px} }

/* Keep the page itself from getting a horizontal scrollbar */
html, body { overflow-x: hidden; }

/* Let ONLY the right panel scroll sideways on small screens */
@media (max-width: 740px){
  .right-panel{
    overflow-x: auto;                 /* horizontal scroll lives here */
    overflow-y: visible;
    -webkit-overflow-scrolling: touch;/* smooth on iOS */
    overscroll-behavior-x: contain;   /* don't bubble the scroll to page */
  }

  /* Make wide tables actually overflow inside the panel (not the page) */
  .right-panel table{
    display: block;                   /* break out of shrink-to-fit */
    width: max-content;               /* expand to the table's intrinsic width */
    max-width: none;                  /* don't clamp to panel width */
    table-layout: auto;
  }

  /* If your table lives inside a .section, ensure the container allows overflow */
  .right-panel .section{
    overflow: visible;
  }

  /* Safety: long code / pre blocks shouldn't force page width */
  .right-panel pre, .right-panel code{
    white-space: pre;                 /* preserve formatting */
    overflow-x: auto;                 /* scroll inside panel */
    max-width: 100%;
  }
}

/* Flexbox safety in case left/right are in a flex row */
.panel { min-width: 0; }              /* prevents flex overflow push */


</style>
</head>
<body>
<div class="page">

<?php

require_once __DIR__ . '/_topnav_admin.php';
render_admin_topnav([
  'token'    => $_GET['token'] ?? ($TOKEN ?? '')
]);

?>

<div class="wrap">
  <div class="card header">
    <div>
      <strong><?= $brand['name'] ?> · SQLite Browser</strong>
      <span class="badge mono"><?=h(basename(DB_PATH))?></span>
      <span class="badge mono"><?=h($now)?></span>
    </div>
    <div class="badge">token auth</div>
  </div>

  <div class="grid">
    <!-- LEFT: tables + ad-hoc -->
    <div class="panel">
      <h3>Tables (<?=count($tables)?>)</h3>
      <div class="section list" style="padding:0">
        <table>
          <thead><tr><th>name</th><th style="width:110px">rows</th></tr></thead>
          <tbody>
          <?php foreach($tables as $t): ?>
            <tr>
              <td>
                <a href="<?=h(preserve(['table'=>$t['name'],'page'=>1]))?>"><?=h($t['name'])?></a>
                <span class="note"> · <?=h($t['type'])?></span>
              </td>
              <td class="mono"><?= isset($counts[$t['name']]) ? number_format((int)$counts[$t['name']]) : '—' ?></td>
            </tr>
          <?php endforeach; ?>
          <?php if (!$tables): ?>
            <tr><td class="note" colspan="2">No user tables found.</td></tr>
          <?php endif; ?>
          </tbody>
        </table>
      </div>

      <h3>Ad-hoc query <span class="note">(SELECT/WITH/PRAGMA)</span></h3>
      <div class="section">
        <form method="get" class="mono">
          <input type="hidden" name="token" value="<?=h($TOKEN)?>">
          <textarea class="input" name="sql" rows="6" placeholder="SELECT name FROM sqlite_master WHERE type='table' ORDER BY name"><?=h($sqlFree)?></textarea>
          <div style="display:flex;gap:8px;align-items:center;margin-top:8px">
            <button class="btn" type="submit">Run</button>
            <a class="btn" href="<?=h(preserve(['sql'=>null]))?>">Clear</a>
          </div>
        </form>

        <?php if ($sqlFree !== ''): ?>
          <?php if ($freeError): ?>
            <div class="section note mono" style="color:#fca5a5"><?=h($freeError)?></div>
          <?php else: ?>
            <div class="section note mono">Rows: <?= $freeResult ? count($freeResult) : 0 ?></div>
            <?php if ($freeColumns): ?>
              <div style="overflow:auto;max-height:50vh">
                <table>
                  <thead><tr><?php foreach($freeColumns as $c) echo '<th>'.h($c).'</th>'; ?></tr></thead>
                  <tbody>
                  <?php foreach($freeResult as $r){ echo '<tr>'; foreach($freeColumns as $c){ echo '<td class="mono">'.h(var_export($r[$c], true)).'</td>'; } echo '</tr>'; } ?>
                  </tbody>
                </table>
              </div>
            <?php else: ?>
              <pre class="mono" style="white-space:pre-wrap;word-break:break-word"><?=h(var_export($freeResult,true))?></pre>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>

    <!-- RIGHT: table browse -->
    <div class="panel right-panel">
      <?php if ($table===''): ?>
        <h3>Viewer</h3>
        <div class="section note">Select a table on the left to browse rows and schema.</div>
      <?php else: ?>
        <h3><?=h($table)?></h3>
        <div class="section" style="padding-bottom:0">
          <form method="get" style="display:flex;gap:8px;flex-wrap:wrap;align-items:center">
            <input type="hidden" name="token" value="<?=h($TOKEN)?>">
            <input type="hidden" name="table" value="<?=h($table)?>">
            <input class="input" type="text" name="q" value="<?=h($q)?>" placeholder="search (TEXT columns)">
            <input class="input" style="max-width:120px" type="number" min="1" name="pagesize" value="<?=h($pagesize)?>" title="rows per page">
            <button class="btn" type="submit">Filter</button>
            <?php if ($rowCount!==null): ?><span class="badge">Rows: <?=number_format($rowCount)?></span><?php endif; ?>
          </form>
        </div>

        <div class="section" style="overflow:auto; max-height:55vh">
          <table>
            <thead><tr><?php foreach($cols as $c) echo '<th>'.h($c).'</th>'; ?></tr></thead>
            <tbody>
            <?php foreach($rows as $r): ?>
              <tr><?php foreach($cols as $c): ?><td class="mono"><?=h(var_export($r[$c], true))?></td><?php endforeach; ?></tr>
            <?php endforeach; ?>
            <?php if (!$rows): ?><tr><td class="note" colspan="999">No rows.</td></tr><?php endif; ?>
            </tbody>
          </table>
        </div>

        <?php
          $maxPage = $rowCount ? max(1, (int)ceil($rowCount / $pagesize)) : $page;
          $qs = function($p){ return preserve(['page'=>$p]); };
        ?>
        <div class="section" style="display:flex;gap:8px;justify-content:flex-end;align-items:center">
          <a class="btn" href="<?=h($qs(max(1,$page-1)))?>">&larr; Prev</a>
          <span class="badge">Page <?=h($page)?> / <?=h($maxPage)?></span>
          <a class="btn" href="<?=h($qs(min($maxPage,$page+1)))?>">Next &rarr;</a>
        </div>

        <div class="section" style="border-top:1px solid var(--border)">
          <details open>
            <summary><strong>Schema</strong></summary>
            <div style="overflow:auto">
              <table>
                <thead><tr><th>#</th><th>name</th><th>type</th><th>notnull</th><th>default</th><th>pk</th></tr></thead>
                <tbody>
                <?php foreach($schema as $c): ?>
                  <tr>
                    <td class="mono"><?=h($c['cid'])?></td>
                    <td class="mono"><?=h($c['name'])?></td>
                    <td class="mono"><?=h($c['type'])?></td>
                    <td class="mono"><?= (int)$c['notnull'] ? '1' : '0' ?></td>
                    <td class="mono"><?=h(var_export($c['dflt_value'], true))?></td>
                    <td class="mono"><?= (int)$c['pk'] ? '1' : '0' ?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <?php if ($indexes): ?>
              <div style="margin-top:8px;overflow:auto">
                <table>
                  <thead><tr><th>#</th><th>index</th><th>unique</th><th>origin</th></tr></thead>
                  <tbody>
                  <?php foreach($indexes as $ix): ?>
                    <tr>
                      <td class="mono"><?=h($ix['seq'])?></td>
                      <td class="mono"><?=h($ix['name'])?></td>
                      <td class="mono"><?= (int)$ix['unique'] ? '1' : '0' ?></td>
                      <td class="mono"><?=h($ix['origin'])?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php endif; ?>
          </details>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php require __DIR__ . '/_footer_admin.php'; ?>
</div>
</body>
</html>
