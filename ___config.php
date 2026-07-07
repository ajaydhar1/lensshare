<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

// Domain
$site_name = "LensShare";
$site_domain = "lensshare.co";

// Replace with your own background image. It should go in:
// assets/img/home/
$site_name_font_on_homepage = "lensshare-print.png";

// API keys / secrets
$giphy_api_key = $_ENV['GIPHY_API_KEY'] ?? '';
$twitch_client_id = $_ENV['TWITCH_CLIENT_ID'] ?? '';
$twitch_client_secret = $_ENV['TWITCH_CLIENT_SECRET'] ?? '';

// Google Analytics
$ga_measurement_id = $_ENV['GA_MEASUREMENT_ID'] ?? 'G-6XLL8VCVZS';

// Database
$database_url = $_ENV['DATABASE_URL'] ?? '';