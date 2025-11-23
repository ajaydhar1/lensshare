<?php
// ___beta-banner.php — simple global Beta notice

$betaAgreementUrl = 'beta-test-agreement.php';
?>
<div id="lsBetaBanner" class="ls-beta-banner" style="">
  <div class="ls-beta-inner text-center">
    <span class="ls-beta-text">
      <span class="ls-beta-label">LensShare Beta</span>
      LensShare is currently in Beta. By using the site, you agree to our
      <a href="<?= htmlspecialchars($betaAgreementUrl) ?>" class="ls-beta-link">Beta Test Agreement</a>.
    </span>
    <?php /*
    <button type="button" class="ls-beta-close" aria-label="Dismiss">
      &times;
    </button>
    */ ?>
  </div>
</div>
