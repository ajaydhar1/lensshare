<?php
declare(strict_types=1);
ini_set('display_errors','0'); error_reporting(E_ALL);
date_default_timezone_set('America/New_York');

header('Content-Type: application/json');

// --- minimal bootstrap (no index.php require) ---
define('DB_PATH', __DIR__ . '/../data/comms.sqlite');
function db(): PDO {
  static $pdo=null;
  if ($pdo) return $pdo;
  if (!is_dir(dirname(DB_PATH))) @mkdir(dirname(DB_PATH), 0775, true);
  $pdo = new PDO('sqlite:' . DB_PATH);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('PRAGMA journal_mode=WAL; PRAGMA foreign_keys=ON;');
  return $pdo;
}
function ensure_watch_table(){
  db()->exec("
    CREATE TABLE IF NOT EXISTS watch_sync (
      room_slug TEXT PRIMARY KEY,
      video_id  TEXT NOT NULL,
      state     TEXT NOT NULL,       -- 'playing' | 'paused'
      position  REAL NOT NULL,       -- seconds
      updated_at TEXT NOT NULL       -- ISO8601
    )");
}
function out($data, $code=200){ http_response_code($code); echo json_encode($data); exit; }

ensure_watch_table();

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$room   = preg_replace('~[^a-z0-9\-]~i','', $_REQUEST['room'] ?? '');
if ($room === '') out(['error'=>'missing room'], 400);

if ($method === 'GET') {
  $q = db()->prepare("SELECT room_slug,video_id,state,position,updated_at FROM watch_sync WHERE room_slug=?");
  $q->execute([$room]);
  $row = $q->fetch(PDO::FETCH_ASSOC);
  if (!$row) out(['exists'=>false]);
  out(['exists'=>true] + $row);
}

if ($method === 'POST') {
  session_start();
  $csrf = $_POST['csrf'] ?? '';
  if (!hash_equals($_SESSION['csrf'] ?? '', $csrf)) out(['error'=>'bad csrf'], 403);

  // NEW: reset op
  if (($_POST['op'] ?? '') === 'reset') {
    $del = db()->prepare("DELETE FROM watch_sync WHERE room_slug=?");
    $del->execute([$room]);
    out(['ok'=>true, 'reset'=>true, 'room'=>$room]);
  }

  $video_id = preg_replace('~[^a-zA-Z0-9_\-]~','', $_POST['video_id'] ?? '');
  $state    = $_POST['state'] ?? 'paused';
  $position = (float)($_POST['position'] ?? 0);

  if ($video_id === '' || !in_array($state, ['playing','paused'], true)) out(['error'=>'bad payload'], 422);

  $now = date('c');
  $up = db()->prepare("
    INSERT INTO watch_sync(room_slug, video_id, state, position, updated_at)
    VALUES(?,?,?,?,?)
    ON CONFLICT(room_slug) DO UPDATE SET
      video_id=excluded.video_id, state=excluded.state, position=excluded.position, updated_at=excluded.updated_at
  ");
  $up->execute([$room, $video_id, $state, $position, $now]);
  out(['ok'=>true, 'updated_at'=>$now]);
}

out(['error'=>'method'], 405);
