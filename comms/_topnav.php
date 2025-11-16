<?php
// admin/_topnav.php — thin admin top nav (self-contained, token-aware)
// Usage in a page:
//   require_once __DIR__ . '/_topnav.php';
//   render_admin_topnav([
//     'token'    => $_GET['token'] ?? ($TOKEN ?? ''),
//     // 'preserve' => ['room','db'], // optional; defaults to both
//     // 'links'    => [...],         // optional
//     // 'brand'    => 'Comms Admin',
//     // 'sticky'   => true,
//     // 'right_html' => '...'
//   ]);

require_once __DIR__ . '/config.php';

if (!defined('ADM_TOPNAV_LOADED')) {
  define('ADM_TOPNAV_LOADED', true);

  function _admtn_qs_with(array $pairs, array $preserveKeys = []) {
    $cur = $_GET ?? [];
    $keep = [];
    foreach ($preserveKeys as $k) if (isset($cur[$k])) $keep[$k] = $cur[$k];
    return http_build_query(array_merge($keep, $pairs));
  }
  function _admtn_join_url($href, array $extraParams) {
    $parts = parse_url($href);
    $q = [];
    if (!empty($parts['query'])) parse_str($parts['query'], $q);
    $q = array_merge($q, $extraParams);
    $query = http_build_query($q);
    $scheme = $parts['scheme'] ?? '';
    $host   = $parts['host']   ?? '';
    $port   = isset($parts['port']) ? ':' . $parts['port'] : '';
    $path   = $parts['path']   ?? '';
    $frag   = isset($parts['fragment']) ? '#' . $parts['fragment'] : '';
    $prefix = $scheme ? ($scheme . '://' . $host . $port) : '';
    return $prefix . $path . ($query ? ('?' . $query) : '') . $frag;
  }

  function render_admin_topnav(array $opts = []) {
    global $brand;
    
    $navBrand     = $opts['brand']      ?? $brand['name'];
    $navBrandHref = $opts['brand_href'] ?? '/';          // homepage URL
    $navBrandIcon = $opts['brand_icon'] ?? $brand['brand_emoji'];         // optional, set '' to remove

    $token     = (string)($opts['token'] ?? '');
    $links     = $opts['links']  ?? [
      //['label'=>'Home',     'href'=>'/admin/index.php'],
      //['label'=>'Logs',     'href'=>'/admin/log_browser.php'],
      //['label'=>'DB',      'href'=>'/admin/db_browser.php'],
      //['label'=>'KPIs',      'href'=>'/admin/kpi_dashboard.php'],
      //['label'=>'Dashboard','href'=>'/admin/dashboard.php'],
    ];
    // Preserve both room & db by default so context sticks across tools
    $preserve  = $opts['preserve'] ?? ['room','db'];
    $sticky    = array_key_exists('sticky',$opts) ? (bool)$opts['sticky'] : true;

    // Build a right-side "Room: ..." pill automatically
    $curRoom   = trim((string)($_GET['room'] ?? ''));
    $curDB     = trim((string)($_GET['db']   ?? ''));
    $roomLabel = '';
    if ($curRoom !== '') {
      $roomLabel = $curRoom;
    } elseif ($curDB !== '') {
      // derive from /path/to/<room>/chat.sqlite
      $roomLabel = basename(dirname($curDB)) ?: '';
    }
    $roomBadge = '';
    if ($roomLabel !== '') {
      $roomLabelSafe = htmlspecialchars($roomLabel, ENT_QUOTES, 'UTF-8');
      // use CSS vars if present; provide fallback colors to ensure visibility
      $roomBadge = '<span class="admtn__pill">Slug: '.$roomLabelSafe.'</span>';
    }

    // Merge user-provided right_html with our badge
    $rightHTML = $opts['right_html'] ?? '';

    // Theme toggle button
    /*
    $rightHTML .= '<div id="theme-toggle"
  class="theme-toggle"
  type="button"
  aria-label="Toggle color theme"
  aria-pressed="false"
  title="Toggle theme">
  <button class="sun">☀️</button>
  <button class="moon">🌙</button>
</div>';
*/

  
    // User name chip
    $rightHTML .= '<span id="chip-you" class="chip">
      You: <strong id="chip-you-name">

      <script>
    // runs synchronously while parsing; no flicker
    (function(s){
      var n = (window.UI_NAME || \'Guest\');
      s.parentNode.setAttribute(\'aria-label\', n);
      document.write(n);
    })(document.currentScript);
  </script>

      </strong>
      <button id="chip-you-edit" class="chip-edit" aria-label="Edit display name">✎</button>
    </span>';

    if ($roomBadge) $rightHTML = $roomBadge . ($rightHTML ? $rightHTML.' ' : '');

    $self = $_SERVER['SCRIPT_NAME'] ?? '';

    // Output CSS once
    static $cssOut = false;
    if (!$cssOut) {
      $cssOut = true;
      echo <<<CSS
<style>
  /* admin thin nav (namespaced .admtn-*) */
  .admtn-wrap{position:relative;z-index:1000}
  .admtn{--bg:transparent;--fg:#e5e7eb;--muted:#9aa4b2;--acc:#7aa2f7;--bd:#1c2030;
         display:flex;align-items:center;justify-content:space-between;gap:12px;
         width:100%;min-height:38px;padding:6px 12px;background:var(--bg);
         /*color:var(--fg);border-bottom:1px solid var(--bd);font:13px/1.2 system-ui,-apple-system,Segoe UI,Roboto;*/}
  .admtn.sticky{position:sticky;top:0}
  .admtn__brand{display:flex;align-items:center;gap:10px;font-weight:700;white-space:nowrap}
  .admtn__brand small{color:var(--muted);font-weight:500}
  .admtn__brand a.admtn__home {
    color: var(--fg);
    text-decoration: none;
    font-weight: 700;
  }
  .admtn__links{display:flex;gap:10px;flex-wrap:wrap;align-items:center}
  .admtn__links a{display:inline-flex;align-items:center;gap:6px;padding:6px 8px;border-radius:8px;color:var(--fg);text-decoration:none;border:1px solid transparent}
  .admtn__links a:hover{border-color:var(--bd);background:#0f1320}
  .admtn__links a.is-active{border-color:var(--acc);box-shadow:0 0 0 1px color-mix(in srgb, var(--acc) 40%, transparent)}
  .admtn__sp{flex:1}
  .admtn__right{display:flex;gap:10px;align-items:center;}
  /* room pill — includes CSS var fallbacks so it always shows */
  .admtn__pill{
    border:1px solid var(--bd, #1c2030);
    padding:4px 8px;border-radius:999px;
    /*color:var(--muted, #9aa4b2);*/ background:rgba(16,20,32,.35);
    font-weight:500; white-space:nowrap;
  }
  @media (max-width:720px){
    .admtn{padding:6px 8px}
    .admtn__links{gap:6px}
    .admtn__links a{padding:5px 6px}
  }
</style>
CSS;
    }

    // Build links with token & preserved params
    $outLinks = [];
    foreach ($links as $L) {
      $label = htmlspecialchars($L['label'] ?? '', ENT_QUOTES, 'UTF-8');
      $href  = (string)($L['href'] ?? '#');
      // Merge token + preserved keys
      $preserved = array_intersect_key($_GET, array_flip($preserve));
      $hrefFinal = _admtn_join_url($href, array_merge(['token'=>$token], $preserved));
      $isActive  = ($self && str_ends_with($self, parse_url($href, PHP_URL_PATH) ?? ''));
      $cls = 'href="'.$hrefFinal.'"'.($isActive ? ' class="is-active"' : '');
      $outLinks[] = "<a {$cls}>{$label}</a>";
    }

    $stickyCls = $sticky ? ' sticky' : '';
    echo '<div class="admtn-wrap"><nav class="admtn'.$stickyCls.'" role="navigation" aria-label="Admin thin navigation">';
    $navBrandLabel = htmlspecialchars($navBrand, ENT_QUOTES, 'UTF-8');
    $navBrandURL   = htmlspecialchars($navBrandHref, ENT_QUOTES, 'UTF-8');
    $fileLabel  = htmlspecialchars(basename($self), ENT_QUOTES, 'UTF-8');

    /*
    echo '  <div class="admtn__brand">'.
           ($navBrandIcon ? $navBrandIcon.' ' : '').
           '<small>'.$fileLabel.'</small>'.
         '</div>';
    */

    echo '  <div class="admtn__links">'.implode('', $outLinks).'</div>';
    echo '  <div class="admtn__sp"></div>';
    echo '  <div class="admtn__right">'.$rightHTML.'</div>';
    echo '</nav></div>';
  }
}
