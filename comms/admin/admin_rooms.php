<?php
require_once __DIR__ . '/../includes/bootstrap.php';
require_once __DIR__ . '/../includes/rooms_sql.php';
require_once __DIR__ . '/../config.php';
require_login();

$msg=''; $err=''; $a = $_GET['a'] ?? '';

try {
  if ($_SERVER['REQUEST_METHOD']==='POST') {
    if ($a==='create') {
      $r = room_create_sql($_POST['name'] ?? '', $_POST['slug'] ?? '');
      $msg = 'Created <strong>'.h($r['name']).'</strong> (ID <code>'.h($r['id']).'</code>)';
    } elseif ($a==='status') {
      $r = room_set_status_sql($_POST['id'] ?? '', $_POST['status'] ?? '');
      $msg = $r ? 'Status → <code>'.h($r['status']).'</code>' : 'Room not found';
    } elseif ($a==='rename') {
      $r = room_update_meta_sql($_POST['id'] ?? '', $_POST['name'] ?? null, $_POST['slug'] ?? null);
      $msg = $r ? 'Updated <strong>'.h($r['name']).'</strong>' : 'Room not found';
    } elseif ($a==='delete') {
      $ok = room_delete_sql($_POST['id'] ?? '');
      $msg = $ok ? 'Deleted room' : 'Room not found';
    }
  }
} catch (Throwable $e) { $err = $e->getMessage(); }

$title = 'Rooms — Admin';
include __DIR__ . '/../templates/_header.php';
?>
<h1>Rooms</h1>
<?php if ($msg): ?><div class="msg"><?= $msg ?></div><?php endif; ?>
<?php if ($err): ?><div class="msg" style="background:#3b2a2a;color:#fca5a5"><?= h($err) ?></div><?php endif; ?>

<div class="card">
  <h2>Create a room</h2>
  <form method="post" action="?a=create" style="display:grid;gap:10px;grid-template-columns:2fr 1fr auto">
    <label>Name <input name="name" placeholder="e.g., Morning Specials" required></label>
    <label>Slug (optional) <input name="slug" placeholder="morning-specials"></label>
    <div style="align-self:end"><button class="btn" type="submit">Create</button></div>
  </form>
</div>

<div style="height:12px"></div>

<div class="card">
  <h2>All rooms</h2>
  <?php $rows = rooms_list_sql(); if (!$rows): ?>
    <p class="muted">No rooms yet.</p>
  <?php else: ?>
  <table class="table" style="width:100%">
    <thead><tr><th>ID</th><th>Name</th><th>Status</th><th>Created</th><th>Actions</th></tr></thead>
    <tbody>
      <?php foreach ($rows as $r): ?>
        <tr>
          <td><code><?= h($r['id']) ?></code></td>
          <td><?= h($r['name']) ?><br><small class="muted">/<?= h($r['slug']) ?></small></td>
          <td><span class="badge <?= $r['status']==='active'?'success':($r['status']==='paused'?'info':'ghost') ?>"><?= h($r['status']) ?></span></td>
          <td><small class="muted"><?= h(substr($r['created_at'],0,16)) ?></small></td>
          <td>
            <a class="btn ghost" href="index.php?room=<?= urlencode($r['id']) ?>" target="_blank" rel="noopener">Open</a>

            <form method="post" action="?a=rename" style="display:inline-grid;grid-template-columns:1fr 1fr auto;gap:6px;margin-top:6px">
              <input type="hidden" name="id" value="<?= h($r['id']) ?>">
              <input name="name" placeholder="rename…" value="<?= h($r['name']) ?>">
              <input name="slug" placeholder="reslug…" value="<?= h($r['slug']) ?>">
              <button class="btn ghost">Save</button>
            </form>

            <form method="post" action="?a=status" style="display:inline-block;margin-left:6px">
              <input type="hidden" name="id" value="<?= h($r['id']) ?>">
              <select name="status">
                <option value="active"   <?= $r['status']==='active'?'selected':'' ?>>active</option>
                <option value="paused"   <?= $r['status']==='paused'?'selected':'' ?>>paused</option>
                <option value="archived" <?= $r['status']==='archived'?'selected':'' ?>>archived</option>
              </select>
              <button class="btn ghost" style="margin-left:4px">Update</button>
            </form>

            <form method="post" action="?a=delete" style="display:inline-block;margin-left:6px" onsubmit="return confirm('Delete this room? (posts will cascade if you store them in SQLite)')">
              <input type="hidden" name="id" value="<?= h($r['id']) ?>">
              <button class="btn danger">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
</div>
<?php include __DIR__ . '/../templates/_footer.php'; ?>
