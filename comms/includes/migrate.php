<?php
// includes/migrate.php — create schema if not exists
require_once __DIR__ . '/db.php';

function migrate(): void {
  $sql = <<<SQL
CREATE TABLE IF NOT EXISTS rooms (
  id TEXT PRIMARY KEY,         -- short id like nanoid
  name TEXT NOT NULL,
  slug TEXT NOT NULL,
  status TEXT NOT NULL DEFAULT 'active', -- active|paused|archived
  created_at TEXT NOT NULL,
  updated_at TEXT NOT NULL
);

CREATE UNIQUE INDEX IF NOT EXISTS idx_rooms_slug ON rooms(slug);

CREATE TABLE IF NOT EXISTS posts (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  room_id TEXT NOT NULL REFERENCES rooms(id) ON DELETE CASCADE,
  slug TEXT,                   -- optional pretty slug
  title TEXT NOT NULL,
  body_md TEXT NOT NULL,
  meta_json TEXT,              -- extras (summary, tags, etc.)
  status TEXT NOT NULL DEFAULT 'published', -- published|draft
  published_at TEXT,
  created_at TEXT NOT NULL,
  updated_at TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS watch_sync (
  room_slug TEXT PRIMARY KEY,
  video_id  TEXT NOT NULL,
  state     TEXT NOT NULL,          -- 'playing' | 'paused'
  position  REAL NOT NULL,          -- seconds
  updated_at TEXT NOT NULL          -- ISO8601
);

CREATE INDEX IF NOT EXISTS idx_posts_room ON posts(room_id, created_at DESC);
SQL;

  // Run multiple statements
  db()->exec($sql);
}
