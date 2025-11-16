<?php
// admin/_footer_admin.php

require_once __DIR__ . '/config.php';

if (!defined('FOOTER_LOADED')) {
  define('FOOTER_LOADED', true);

  $ver = 'v0.1.0';

  // Prefer an explicit label from the page; else fall back to DB_PATH basename; else blank.
  $label = '';
  if (isset($FOOTER_LABEL) && $FOOTER_LABEL !== '') {
    $label = $FOOTER_LABEL;
  } elseif (defined('DB_PATH')) {
    $label = basename(DB_PATH);
  }
  ?>
  <footer class="footer">
    <div class="footer-inner">
      <span>© <?= date('Y') ?> <?= $brand['name'] ?></span>
      <span>•</span>
      <span><?= htmlspecialchars($ver) ?></span>
      <?php if ($label): ?>
        <span>•</span>
        <span><?= htmlspecialchars($label) ?></span>
      <?php endif; ?>
    </div>
  </footer>
  <?php
}