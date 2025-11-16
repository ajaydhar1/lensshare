<?php
// admin/_footer_admin.php

require_once __DIR__ . '/../config.php';

if (!defined('ADM_FOOTER_LOADED')) {
  define('ADM_FOOTER_LOADED', true);

  $ver = 'v0.1.0';
  $dbLabel = defined('DB_PATH') ? basename(DB_PATH) : '';

  ?>
  <footer class="admin-footer">
    <div class="footer-inner">
      <span>© <?= date('Y') ?> <?= $brand['name'] ?> Admin</span>
      <span>•</span>
      <span><?= htmlspecialchars($ver) ?></span>
      <?php if ($dbLabel): ?>
        <span>•</span><span><?= htmlspecialchars($dbLabel) ?></span>
      <?php endif; ?>
    </div>
  </footer>
  <?php
}

