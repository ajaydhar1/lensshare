<?php
// tools/seed_rooms.php

require __DIR__ . '/../config.php'; // gives you $env['db_path'] etc.

$db = new PDO('sqlite:' . $env['db_path']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// very simple slugifier
function slugify($name) {
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

$file = __DIR__ . '/../data/rooms-new.txt';
$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$now = date('Y-m-d H:i:s');

$stmt = $db->prepare('INSERT OR IGNORE INTO rooms (slug, name, created_at) VALUES (:slug, :name, :created_at)');

foreach ($lines as $line) {
    $name = strtoupper(trim($line));
    if ($name === '') continue;

    $slug = slugify($name);

    $stmt->execute([
        ':slug'       => $slug,
        ':name'       => $name,
        ':created_at' => $now,
    ]);

    echo "Seeded: {$slug} ({$name})\n";
}

echo "Done.\n";
