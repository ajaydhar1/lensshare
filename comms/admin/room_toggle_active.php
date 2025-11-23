<?php
// admin/room_toggle_active.php — toggle rooms.is_active via Room Links page

ini_set('display_errors','0'); error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../config.php';

define('INIT_ADMIN_TOKEN', $secrets['init_admin_token']);
define('REGISTRY_DB', env_db_path());

function deny($msg='forbidden'){
    http_response_code(403);
    echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
    exit;
}

// ----- guard -----
$TOKEN = $_POST['token'] ?? '';
if (!hash_equals(INIT_ADMIN_TOKEN, $TOKEN ?? '')) {
    deny('invalid or missing token');
}

$slug = $_POST['slug'] ?? '';
$slug = strtolower(trim($slug));
if ($slug === '') {
    deny('missing slug');
}

// ----- open DB -----
if (!is_file(REGISTRY_DB)) {
    http_response_code(500);
    echo "<pre>Registry DB not found at ".htmlspecialchars(REGISTRY_DB, ENT_QUOTES, 'UTF-8')."</pre>";
    exit;
}

try {
    $pdo = new PDO('sqlite:' . REGISTRY_DB, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Throwable $e) {
    http_response_code(500);
    echo "<pre>Cannot open DB: ".htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8')."</pre>";
    exit;
}

// ----- toggle is_active -----
$stmt = $pdo->prepare(
    'UPDATE rooms
     SET is_active = CASE WHEN COALESCE(is_active,1) = 1 THEN 0 ELSE 1 END
     WHERE LOWER(slug) = :slug'
);
$stmt->execute([':slug' => $slug]);

// back to room_links
header('Location: room_links.php?token=' . urlencode($TOKEN));
exit;
