<?php

/**
 * config.php — unified app configuration
 * Drop-in: require_once __DIR__ . '/config.php';
 */

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

/* ============================================================
 * Branding
 * ============================================================ */
$brand = [
  'name'        => 'LensShare',
  'slug'        => 'lensshare',      // lowercase identifier
  'brand_emoji' => '🙂💬',          // generic/brand
  'chat_emoji'  => '🌈',           // used in viewer headers
  'tagline'     => 'Publishing + Messages',
  'favicon'     => '/favicon.svg',
];


/* ============================================================
 * Locale
 * ============================================================ */
$timezone = 'America/New_York';


/* ============================================================
 * Rooms
 * ============================================================ */
$main_room_slug = 'main';


/* ============================================================
 * Beta mode
 * ============================================================ */
$beta = true;


/* ============================================================
 * Feature flags (future-friendly)
 * ============================================================ */
$features = [
  'watch_together' => true,
  'video_chat'     => true,
  'toasts'         => true,
  'futuristic'     => true,
];


/* ============================================================
 * Infrastructure / Endpoints / Paths
 * ============================================================ */
$env = [
  // SQLite path (absolute recommended). Keep writable dir.
  'db_path'        => __DIR__ . '/data/comms.sqlite',

  // Jitsi base (self-hosted); trailing slash optional
  'jitsi_base_url' => 'https://video-lensshare.com/',

  // WebSocket broker
  'ws_url'         => 'wss://logfeed-socket-broker.onrender.com',

  // Optional: per-deploy “room write key” if your server uses one
  'room_key'       => '',

  'favicon_path'   => 'https://lensshare.co/assets/img/all/galaxy.png',

  'favicon_type'   => 'image/png',

  'web_base'       => '/comms',

  'shell'          => 'lensshare',

];

function env_db_path(): string {
    global $env;
    $dbPath = $env['db_path'] ?? (__DIR__ . '/data/comms.sqlite');
    return realpath($dbPath) ?: $dbPath;
}


/* ============================================================
 * Secrets (keep out of version control in production)
 * ============================================================ */
$secrets = [
    'init_admin_token' => $_ENV['INIT_ADMIN_TOKEN'] ?? '',
];


/* ============================================================
 * Runtime application of config (helpers + legacy constants)
 * ============================================================ */

// 1) timezone
date_default_timezone_set($timezone ?: 'UTC');

// 2) IMPORTANT: keep this secret in production
define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);

// 3) single SQLite file
define('DB_PATH', $env['db_path']);

// 4) global messages room slug
define('MAIN_ROOM_SLUG', $main_room_slug);

// 5) Jitsi (self-hosted) base — trailing slash optional
define('JITSI_BASE_URL', $env['jitsi_base_url']);


/* ============================================================
 * Strings
 * ============================================================ */

$page_title = $beta ? $brand['name'] . ' (BETA)' : $brand['name'];
$slug = strtolower(preg_replace('/[^a-z0-9_-]/i', '', $brand['slug']));
$username_local_key = "{$slug}.name";