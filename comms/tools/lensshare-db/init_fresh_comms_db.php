<?php
// init_fresh_comms_db.php
//
// Standalone script to create a fresh LensShare/Comms SQLite DB
// with your current table schemas:
//
// - messages
// - posts
// - rooms
// - watch_sync
//
// Seeds:
// - rooms: a small template list (edit before/after running)
// - posts: two initial global posts (room_id = 1)
// - messages: empty
// - watch_sync: empty
//
// Usage (from CLI):
//   php init_fresh_comms_db.php
//
// IMPORTANT:
// - Adjust $DB_PATH before running.
// - This script REFUSES to overwrite an existing DB file.

ini_set('display_errors', '1');
error_reporting(E_ALL);
date_default_timezone_set('America/New_York');

// TODO: change this to where you want the DB file created.
$DB_PATH = __DIR__ . '/comms_fresh.sqlite';

if (file_exists($DB_PATH)) {
    die("Refusing to overwrite existing DB file at: {$DB_PATH}\n");
}

// ---- open PDO ----
$pdo = new PDO('sqlite:' . $DB_PATH, null, null, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]);

// PRAGMAs (safe for small app DBs; tweak if you like)
$pdo->exec("PRAGMA foreign_keys = OFF");   // match your current schema: no explicit FKs
$pdo->exec("PRAGMA journal_mode = WAL");
$pdo->exec("PRAGMA busy_timeout = 2000");

// ---- schema: matched to your current tables ----
//
// messages
// # name        type     notnull default pk
//   id          INTEGER  0      NULL    1
//   room_id     INTEGER  1      NULL    0
//   user        TEXT     1      NULL    0
//   body        TEXT     1      NULL    0
//   created_at  TEXT     1      NULL    0
//   is_deleted  INTEGER  1      '0'     0
//
// posts
// # name        type     notnull default pk
//   id          INTEGER  0      NULL    1
//   room_id     INTEGER  1      NULL    0
//   title       TEXT     1      NULL    0
//   body        TEXT     1      NULL    0
//   created_at  TEXT     1      NULL    0
//   is_archived INTEGER  1      '0'     0
// index: idx_posts_room on room_id
//
// rooms
// # name        type     notnull default pk
//   id          INTEGER  0      NULL    1
//   slug        TEXT     1      NULL    0
//   name        TEXT     1      NULL    0
//   created_at  TEXT     1      NULL    0
//   is_active   INTEGER  1      '1'     0
// indices: unique idx_rooms_slug(slug)
//
// watch_sync
// # name        type     notnull default pk
//   room_slug   TEXT     0      NULL    1
//   video_id    TEXT     1      NULL    0
//   state       TEXT     1      NULL    0
//   position    REAL     1      NULL    0
//   updated_at  TEXT     1      NULL    0
// pk: room_slug

$schemaSql = [
    // rooms
    "
    CREATE TABLE rooms (
        id         INTEGER PRIMARY KEY,
        slug       TEXT    NOT NULL,
        name       TEXT    NOT NULL,
        created_at TEXT    NOT NULL,
        is_active  INTEGER NOT NULL DEFAULT 1
    )
    ",

    // messages
    "
    CREATE TABLE messages (
        id         INTEGER PRIMARY KEY,
        room_id    INTEGER NOT NULL,
        user       TEXT    NOT NULL,
        body       TEXT    NOT NULL,
        created_at TEXT    NOT NULL,
        is_deleted INTEGER NOT NULL DEFAULT 0
    )
    ",

    // posts
    "
    CREATE TABLE posts (
        id          INTEGER PRIMARY KEY,
        room_id     INTEGER NOT NULL,
        title       TEXT    NOT NULL,
        body        TEXT    NOT NULL,
        created_at  TEXT    NOT NULL,
        is_archived INTEGER NOT NULL DEFAULT 0
    )
    ",

    // watch_sync
    "
    CREATE TABLE watch_sync (
        room_slug  TEXT PRIMARY KEY,
        video_id   TEXT NOT NULL,
        state      TEXT NOT NULL,
        position   REAL NOT NULL,
        updated_at TEXT NOT NULL
    )
    ",

    // indexes
    "CREATE UNIQUE INDEX idx_rooms_slug ON rooms(slug)",
    "CREATE INDEX idx_posts_room ON posts(room_id)"
];

$pdo->beginTransaction();
try {
    // create all tables + indexes
    foreach ($schemaSql as $sql) {
        $pdo->exec($sql);
    }

    // ---- seed rooms (template) ----
    //
    // Assumes first room inserted gets id = 1.
    // If you use room_id = 1 for "global posts", make the first room
    // represent that (you can change slug/name to match your convention).
    //
    // TODO: Replace this list with your real finalized room slugs later.
    $now = date('c');

    require 'rooms_seed.php';

    $roomInsert = $pdo->prepare("
        INSERT INTO rooms (slug, name, created_at, is_active)
        VALUES (:slug, :name, :created_at, :is_active)
    ");

    foreach ($roomsSeed as $r) {
        $roomInsert->execute([
            ':slug'       => $r['slug'],
            ':name'       => $r['name'],
            ':created_at' => $r['created_at'],
            ':is_active'  => (int)$r['is_active'],
        ]);
    }

    // Assuming first room inserted has id=1 and is your global room:
    $GLOBAL_ROOM_ID = 1;

    // ---- seed two initial global posts (room_id = 1) ----
    $globalPostsSeed = [
        [
            'title' => 'Welcome to LensShare ✨',
            'body'  => "Thanks for joining LensShare.\n\nThis is a global announcement that appears across all spaces.",
        ],
        [
            'title' => 'Getting Started',
            'body'  => "1. Pick a portal.\n2. Enter a room.\n3. Say hello 👋\n\nYou can edit or replace this from the Post Editor.",
        ],
    ];

    $postInsert = $pdo->prepare("
        INSERT INTO posts (room_id, title, body, created_at, is_archived)
        VALUES (:room_id, :title, :body, :created_at, 0)
    ");

    foreach ($globalPostsSeed as $p) {
        $postInsert->execute([
            ':room_id'    => $GLOBAL_ROOM_ID,
            ':title'      => $p['title'],
            ':body'       => $p['body'],
            ':created_at' => $now,
        ]);
    }

    // messages: intentionally empty
    // watch_sync: intentionally empty

    $pdo->commit();
} catch (Throwable $e) {
    $pdo->rollBack();
    die("Error creating fresh DB: " . $e->getMessage() . "\n");
}

echo "Fresh LensShare DB created at:\n  {$DB_PATH}\n";
echo "Tables: rooms, messages, posts, watch_sync\n";
echo "Seeded: " . count($roomsSeed) . " rooms, " . count($globalPostsSeed) . " global posts.\n";
