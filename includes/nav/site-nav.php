<?php
// includes/nav/site-nav.php — reusable LensShare top navigation.
//
// Usage on a page:
//   In <head>:   require_once __DIR__ . '/includes/nav/site-nav.php'; ls_nav_head();
//   In <body>:   ls_nav_render(['active' => 'explore', 'portal' => 'work', 'page_links' => [...]]);
//   Before </body>: ls_nav_scripts();
//
// Options for ls_nav_render():
//   variant      'site' (default). 'comms' / 'admin' are reserved for future variants.
//   active       key of a global link to mark as current page (see nav-config.php).
//   portal       key of the current Portal; highlights the Portals menu and its item.
//   page_links   [['label' => 'How it Works', 'href' => '#how-it-works'], ...]
//                Same-page section links, shown as a secondary "On this page" group.
//   page_label   heading for the page_links group (default 'On this page').
//   holodeck_local  true when the page has its own #holodeck section (links to #holodeck).
//   skip_target  id of the main content for the skip link (default 'main-content').
//   cta          false to hide the Happy Hour call to action.
//   base         string prefixed to relative hrefs (default '').

if (!function_exists('ls_nav_esc')) {

    function ls_nav_esc($value): string
    {
        return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
    }

    function ls_nav_config(): array
    {
        static $config = null;
        if ($config === null) {
            $config = require __DIR__ . '/nav-config.php';
        }
        return $config;
    }

    function ls_nav_url(string $href, string $base): string
    {
        // Leave absolute, root-relative and fragment-only URLs untouched.
        if ($href === '' || $href[0] === '#' || $href[0] === '/' || preg_match('#^[a-z][a-z0-9+.-]*:#i', $href)) {
            return $href;
        }
        return $base . $href;
    }

    function ls_nav_asset(string $relative): string
    {
        $root = dirname(__DIR__, 2);
        $path = $root . '/' . $relative;
        $v = is_file($path) ? filemtime($path) : 0;
        return $relative . '?v=' . $v;
    }

    function ls_nav_head(string $base = ''): void
    {
        echo '<link href="' . ls_nav_esc($base . ls_nav_asset('assets/css/ls-nav.css')) . '" rel="stylesheet" />' . "\n";
    }

    function ls_nav_scripts(string $base = ''): void
    {
        echo '<script src="' . ls_nav_esc($base . ls_nav_asset('assets/js/ls-nav.js')) . '" defer></script>' . "\n";
    }

    function ls_nav_chevron(): string
    {
        return '<svg class="ls-nav__chev" viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false">'
             . '<path d="M2.5 4.5 6 8l3.5-3.5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    }

    function ls_nav_logo(): string
    {
        return '<svg class="ls-nav__mark" viewBox="0 0 32 32" width="32" height="32" aria-hidden="true" focusable="false">'
             . '<defs><linearGradient id="ls-nav-grad" x1="4" y1="4" x2="28" y2="28" gradientUnits="userSpaceOnUse">'
             . '<stop offset="0" stop-color="#3A0B4F"/><stop offset=".55" stop-color="#F53D9C"/><stop offset="1" stop-color="#FF8A3D"/>'
             . '</linearGradient></defs>'
             . '<circle cx="16" cy="16" r="12" fill="none" stroke="url(#ls-nav-grad)" stroke-width="3.5"/>'
             . '<circle cx="16" cy="16" r="5" fill="url(#ls-nav-grad)"/>'
             . '<circle cx="12.6" cy="12.6" r="1.6" fill="#fff"/></svg>';
    }

    function ls_nav_render(array $opts = []): void
    {
        $cfg     = ls_nav_config();
        $variant = (string)($opts['variant'] ?? 'site');
        if (!preg_match('/^[a-z-]+$/', $variant)) {
            $variant = 'site';
        }
        $active  = (string)($opts['active'] ?? '');
        $portal  = (string)($opts['portal'] ?? '');
        $pages   = $opts['page_links'] ?? [];
        $skip    = preg_replace('/[^A-Za-z0-9_-]/', '', (string)($opts['skip_target'] ?? 'main-content'));
        $base    = (string)($opts['base'] ?? '');
        $showCta = ($opts['cta'] ?? true) !== false;
        $label   = (string)($opts['page_label'] ?? 'On this page');
        $localHolodeck = !empty($opts['holodeck_local']);
        $e       = 'ls_nav_esc';

        $out  = '<header class="ls-nav" data-ls-nav data-variant="' . $e($variant) . '">';
        $out .= '<a class="ls-nav__skip" href="#' . $e($skip) . '">Skip to content</a>';
        $out .= '<div class="ls-nav__bar">';

        $out .= '<a class="ls-nav__brand" href="' . $e(ls_nav_url($cfg['brand']['href'], $base)) . '">'
              . ls_nav_logo() . '<span class="ls-nav__wordmark">' . $e($cfg['brand']['name']) . '</span></a>';

        $out .= '<button class="ls-nav__toggle" type="button" aria-expanded="false" aria-controls="ls-nav-menu" aria-label="Open menu">'
              . '<span class="ls-nav__bars" aria-hidden="true"><span></span><span></span><span></span></span></button>';

        $out .= '<nav class="ls-nav__menu" id="ls-nav-menu" aria-label="Primary">';

        $out .= '<ul class="ls-nav__list">';
        foreach ($cfg['global'] as $item) {
            if (isset($item['menu'])) {
                $isActive = $portal !== '' || $active === $item['key'];
                $out .= '<li class="ls-nav__item ls-nav__item--menu" data-ls-menu>'
                      . '<button class="ls-nav__link ls-nav__trigger' . ($isActive ? ' is-active' : '') . '" type="button" '
                      . 'aria-expanded="false" aria-controls="ls-nav-' . $e($item['menu']) . '">'
                      . '<span>' . $e($item['label']) . '</span>' . ls_nav_chevron() . '</button>'
                      . '<div class="ls-nav__panel" id="ls-nav-' . $e($item['menu']) . '">'
                      . '<p class="ls-nav__panel-title">Browse Portals</p><ul class="ls-nav__portals">';
                foreach ($cfg[$item['menu']] as $p) {
                    $current = $portal === $p['key'];
                    $out .= '<li><a class="ls-nav__portal' . ($current ? ' is-active' : '') . '" href="' . $e(ls_nav_url($p['href'], $base)) . '"'
                          . ($current ? ' aria-current="page"' : '') . '>'
                          . '<span class="ls-nav__portal-icon" aria-hidden="true">' . $e($p['icon']) . '</span>'
                          . '<span class="ls-nav__portal-text"><span class="ls-nav__portal-name">' . $e($p['label']) . '</span>'
                          . '<span class="ls-nav__portal-desc">' . $e($p['desc']) . '</span></span></a></li>';
                }
                $out .= '</ul></div></li>';
                continue;
            }
            $isActive = $active === $item['key'];
            $spy = isset($item['spy']) ? ' data-ls-spy="' . $e($item['spy']) . '"' : '';
            $href = ($localHolodeck && isset($item['spy'])) ? '#' . $item['spy'] : ls_nav_url($item['href'], $base);
            $out .= '<li class="ls-nav__item"><a class="ls-nav__link' . ($isActive ? ' is-active' : '') . '" href="'
                  . $e($href) . '"' . $spy . ($isActive ? ' aria-current="page"' : '') . '>'
                  . $e($item['label']) . '</a></li>';
        }
        $out .= '</ul>';

        if ($pages) {
            $out .= '<div class="ls-nav__page"><span class="ls-nav__page-label" id="ls-nav-page-label">' . $e($label) . '</span>'
                  . '<ul class="ls-nav__list ls-nav__list--page" aria-labelledby="ls-nav-page-label">';
            foreach ($pages as $link) {
                $href = (string)($link['href'] ?? '#');
                $spy  = ($href !== '' && $href[0] === '#') ? ' data-ls-spy="' . $e(substr($href, 1)) . '"' : '';
                $out .= '<li class="ls-nav__item"><a class="ls-nav__link ls-nav__link--page" href="' . $e($href) . '"' . $spy . '>'
                      . $e($link['label'] ?? '') . '</a></li>';
            }
            $out .= '</ul></div>';
        }

        if ($showCta && !empty($cfg['cta'])) {
            $cta = $cfg['cta'];
            $out .= '<a class="ls-nav__cta" href="' . $e(ls_nav_url($cta['href'], $base)) . '">'
                  . '<span class="ls-nav__live" aria-hidden="true"></span>' . $e($cta['label']) . '</a>';
        }

        $out .= '</nav></div></header>';
        echo $out, "\n";
    }
}
