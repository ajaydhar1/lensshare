<?php

// ---------- helpers ----------
function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8'); }
function db(): PDO {
  static $pdo=null;
  if ($pdo) return $pdo;
  if (!is_dir(dirname(DB_PATH))) @mkdir(dirname(DB_PATH), 0775, true);
  $pdo = new PDO('sqlite:' . DB_PATH);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('PRAGMA journal_mode=WAL; PRAGMA foreign_keys=ON;');
  return $pdo;
}
function ensure_schema(){
  $sql = [
    "CREATE TABLE IF NOT EXISTS rooms (
       id INTEGER PRIMARY KEY AUTOINCREMENT,
       slug TEXT UNIQUE NOT NULL,
       name TEXT NOT NULL,
       created_at TEXT NOT NULL
     )",
    "CREATE TABLE IF NOT EXISTS posts (
       id INTEGER PRIMARY KEY AUTOINCREMENT,
       room_id INTEGER NOT NULL,
       title TEXT NOT NULL,
       body TEXT NOT NULL,
       created_at TEXT NOT NULL,
       FOREIGN KEY(room_id) REFERENCES rooms(id) ON DELETE CASCADE
     )",
    "CREATE TABLE IF NOT EXISTS messages (
       id INTEGER PRIMARY KEY AUTOINCREMENT,
       room_id INTEGER NOT NULL,
       user TEXT NOT NULL,
       body TEXT NOT NULL,
       created_at TEXT NOT NULL,
       FOREIGN KEY(room_id) REFERENCES rooms(id) ON DELETE CASCADE
     )",
  ];
  foreach ($sql as $q) db()->exec($q);

  // seed default data if empty
  $has = db()->query("SELECT COUNT(*) FROM rooms")->fetchColumn();
  if ((int)$has === 0){
    $now = date('c');
    $stmt = db()->prepare("INSERT INTO rooms(slug,name,created_at) VALUES(?,?,?)");
    $stmt->execute(['main','Main Room',$now]);
    $room_id = (int)db()->lastInsertId();

    $p = db()->prepare("INSERT INTO posts(room_id,title,body,created_at) VALUES(?,?,?,?)");
    $p->execute([$room_id,'Welcome to LensShare',
      "This is a global post for all Spaces.
Use the left navigation to jump between Rooms and manage your uploads.
Everything you share appears instantly across your connected Spaces.",
      $now]);
    $p->execute([$room_id,'Community Guidelines',
      "- Keep things friendly
- Share respectfully
- No spam or automated uploads
(Just a simple demo set of rules for layout and testing.)",
      $now]);

    $m = db()->prepare("INSERT INTO messages(room_id,user,body,created_at) VALUES(?,?,?,?)");
    $m->execute([$room_id,'system','Messages booted successfully.',$now]);
    $m->execute([$room_id,'Eve','Hi everyone! This looks clean.',$now]);
    $m->execute([$room_id,'Adam','Love the log vibe.',$now]);
  }
}

// Build an API URL relative to THIS script's folder
$BASE_PATH = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? '/'), '/'); // e.g. "" or "/logfeed"
$WATCH_API_URL = $BASE_PATH . '/api/watch_sync.php';

function csrf_token(): string {
  if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(16));
  return $_SESSION['csrf'];
}
function csrf_check($t){ return is_string($t) && hash_equals($_SESSION['csrf'] ?? '', $t); }

function room_slug_valid(string $slug): bool {
  // 2–32 chars, letters/numbers/hyphens only, start with letter/number
  return (bool)preg_match('~^[a-z0-9][a-z0-9\-]{1,63}$~i', $slug);
}
function current_room_by_slug($slug){
  $q = db()->prepare("SELECT * FROM rooms WHERE slug=?");
  $q->execute([$slug]);
  return $q->fetch(PDO::FETCH_ASSOC) ?: null;
}
function ensure_room_created(string $slug, ?string $name = null): int {
  // If the room already exists, just return its id
  $r = current_room_by_slug($slug);
  if ($r) return (int)$r['id'];

  // Otherwise create a new room
  $name = $name ?: strtoupper($slug);
  $now  = date('c');
  $ins  = db()->prepare("INSERT INTO rooms(slug,name,created_at) VALUES(?,?,?)");
  $ins->execute([$slug, $name, $now]);
  $room_id = (int)db()->lastInsertId();

  // NOTE: Previously we seeded two default posts here (Welcome to LogFeed / House Rules).
  // That behavior has been removed so new rooms start empty.
  // If you need starter posts for a specific app, seed them separately.

  return $room_id;
}