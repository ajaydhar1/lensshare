<?php
// includes/rooms_sql.php — rooms using SQLite
require_once __DIR__ . '/db.php';

function make_room_id(int $len=10): string {
  $alphabet = 'abcdefghjkmnpqrstuvwxyz23456789';
  $id = '';
  for ($i=0;$i<$len;$i++) $id .= $alphabet[random_int(0, strlen($alphabet)-1)];
  return $id;
}

function room_create_sql(string $name, string $slug=''): array {
  $name = trim($name);
  if ($name==='') throw new Exception('Room name is required');
  $slug = $slug ? slugify($slug) : slugify($name);
  $id   = make_room_id(10);
  $now  = date('c');

  $ins = db()->prepare('INSERT INTO rooms(id,name,slug,status,created_at,updated_at) VALUES(?,?,?,?,?,?)');
  $ins->execute([$id,$name,$slug,'active',$now,$now]);

  return ['id'=>$id,'name'=>$name,'slug'=>$slug,'status'=>'active','created_at'=>$now,'updated_at'=>$now];
}

function room_get_sql(string $id): ?array {
  $q = db()->prepare('SELECT * FROM rooms WHERE id=?');
  $q->execute([$id]);
  $r = $q->fetch();
  return $r ?: null;
}

function room_by_slug_sql(string $slug): ?array {
  $q = db()->prepare('SELECT * FROM rooms WHERE slug=?');
  $q->execute([$slug]);
  $r = $q->fetch();
  return $r ?: null;
}

function rooms_list_sql(?string $status=null): array {
  if ($status) {
    $q = db()->prepare('SELECT * FROM rooms WHERE status=? ORDER BY created_at DESC');
    $q->execute([$status]);
  } else {
    $q = db()->query('SELECT * FROM rooms ORDER BY created_at DESC');
  }
  return $q->fetchAll();
}

function room_set_status_sql(string $id, string $status): ?array {
  if (!in_array($status, ['active','paused','archived'], true)) throw new Exception('Invalid status');
  $q = db()->prepare('UPDATE rooms SET status=?, updated_at=? WHERE id=?');
  $q->execute([$status, date('c'), $id]);
  return room_get_sql($id);
}

function room_update_meta_sql(string $id, ?string $name=null, ?string $slug=null): ?array {
  $cur = room_get_sql($id); if (!$cur) return null;
  $name = $name !== null ? trim($name) : $cur['name'];
  $slug = $slug !== null ? slugify($slug) : $cur['slug'];
  $q = db()->prepare('UPDATE rooms SET name=?, slug=?, updated_at=? WHERE id=?');
  $q->execute([$name,$slug,date('c'),$id]);
  return room_get_sql($id);
}

function room_delete_sql(string $id): bool {
  $q = db()->prepare('DELETE FROM rooms WHERE id=?');
  $q->execute([$id]);
  return $q->rowCount() > 0;
}

/* simple helpers reused from your codebase */
if (!function_exists('slugify')) {
  function slugify(string $s): string {
    $s = strtolower(trim($s));
    $s = preg_replace('/[^a-z0-9\-\s]/', '', $s);
    $s = preg_replace('/[\s_]+/', '-', $s);
    $s = preg_replace('/\-+/', '-', $s);
    return trim($s, '-');
  }
}
if (!function_exists('h')) {
  function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
}
