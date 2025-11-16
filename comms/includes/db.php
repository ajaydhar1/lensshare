<?php
// includes/db.php — PDO to SQLite, foreign keys on
function db(): PDO {
  static $pdo = null;
  if ($pdo) return $pdo;
  $path = __DIR__ . '/../data/comms.sqlite';
  if (!is_dir(dirname($path))) @mkdir(dirname($path), 0775, true);
  $pdo = new PDO('sqlite:' . $path, null, null, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
  $pdo->exec('PRAGMA foreign_keys = ON');
  return $pdo;
}
