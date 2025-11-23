<?php
// beta-test-agreement.php — LensShare Beta Test Agreement
// Simple legal-style page, no hero/masthead image needed.

?><!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once("___google-analytics.php"); ?>

  <meta charset="utf-8">
  <title>LensShare Beta Test Agreement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Learn how the LensShare Beta works and what we ask from Beta testers.">
  <meta name="author" content="LensShare" />
  <link rel="icon" type="image/png" href="/assets/img/all/galaxy.png">

  <!-- Bootstrap Icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/custom.css" rel="stylesheet" />


  <style>
    :root {
      --bg: #050b10;
      --panel: #0c131b;
      --text: #e8f0f7;
      --muted: #9aa8ba;
      --border: #1c2835;
      --accent: #3fa0ff;
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      background: radial-gradient(circle at top, #0e1722 0, #050b10 55%);
      color: var(--text);
    }
    .shell {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px 16px 60px;
      margin-top: 5rem;
      font: 15px/1.6 system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
    }
    .card {
      background: var(--panel);
      border-radius: 16px;
      border: 1px solid var(--border);
      padding: 22px 20px 26px;
      box-shadow: 0 18px 40px rgba(0,0,0,0.45);
    }
    h1 {
      margin: 0 0 4px;
      font-size: 22px;
      letter-spacing: 0.02em;
    }
    .subtitle {
      margin: 0 0 12px;
      font-size: 13px;
      color: var(--muted);
    }
    .updated {
      margin: 0 0 18px;
      font-size: 12px;
      color: var(--muted);
    }
    h2 {
      margin: 24px 0 8px;
      font-size: 16px;
    }
    p {
      margin: 0 0 10px;
    }
    ul {
      margin: 0 0 12px 20px;
      padding: 0;
    }
    li {
      margin: 0 0 6px;
    }
    .heart {
      font-size: 16px;
    }
    @media (max-width: 600px) {
      .card {
        padding: 18px 14px 22px;
        border-radius: 12px;
      }
    }


    /* Navbar tweak on dark bg */
    #mainNav {
      background: rgba(15,23,42,0.96);
      border-bottom: 1px solid #1f2933;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: #e5e7eb !important;
    }

    .navbar-nav .nav-link:hover {
      color: #a5b4fc !important;
    }
  </style>
</head>
<body>

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand text-secondary" href="index.php">LensShare</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item my-auto"><a class="nav-link" href="terms.php">Terms</a></li>
                  <li class="nav-item my-auto"><a class="nav-link" style="margin-right: 0.65rem;" href="privacy.php">Privacy</a></li>
                  <li class="nav-item"><a class="btn btn-primary text-white" href="room.php?room=happy-hour">Happy Hour</a></li>
              </ul>
          </div>
      </div>
  </nav>

  <div class="shell">
    <div class="card">
      <h1>LensShare Beta Test Agreement</h1>
      <p class="subtitle">How the LensShare Beta works and what we ask from you.</p>
      <p class="updated">Last updated: <?= date('F j, Y'); ?> <!-- set date manually or echo date() here --></p>

      <p>Hi there 👋 &mdash; thanks so much for helping us test LensShare. This is an early version of the platform, and your feedback means a lot to us. This page explains how the Beta works, what you can expect from us, and what we kindly ask from you.</p>
      <p>We’re trying to keep this friendly and clear, not heavy legal speak.</p>

      <h2>1. What “Beta” Means</h2>
      <p>LensShare is still in development. That means:</p>
      <ul>
        <li>Things may change quickly.</li>
        <li>Features may be added, removed, or rearranged.</li>
        <li>You might see bugs, glitches, or odd behavior.</li>
        <li>Messages or rooms might be reset or disappear.</li>
        <li>Outages or downtime may happen from time to time.</li>
      </ul>
      <p>We’ll do our best to keep things stable, but there are no guarantees during this Beta period.</p>

      <h2>2. Your Privacy</h2>
      <p>We care about your privacy. While you’re using the Beta:</p>
      <ul>
        <li>We may review logs, rooms, or message data <strong>only</strong> to fix bugs, diagnose issues, or keep the platform safe.</li>
        <li>We do not sell or share your personal data.</li>
        <li>You can stop using the Beta at any time.</li>
      </ul>
      <p>Our full Privacy Policy still applies and should be read together with this Beta Agreement.</p>

      <h2>3. Content &amp; Conversations</h2>
      <p>LensShare is about conversation and connection. During the Beta, please help us keep things positive and safe:</p>
      <ul>
        <li>No harassment, hate, or abusive behavior.</li>
        <li>No illegal content of any kind.</li>
        <li>No spam, scams, or disruptive behavior.</li>
        <li>No sharing of private personal information (yours or anyone else’s) without consent.</li>
        <li>No impersonating other people or pretending to represent organizations you don’t actually represent.</li>
      </ul>
      <p>We want LensShare to feel welcoming for everyone who visits.</p>

      <h2>4. Safety &amp; Moderation</h2>
      <p>To keep things healthy during testing, we may:</p>
      <ul>
        <li>Remove or hide messages, rooms, or content at our discretion.</li>
        <li>Limit, suspend, or end access for accounts that break the rules or create a harmful experience for others.</li>
        <li>Use automated and/or manual moderation tools.</li>
        <li>Reset or clear chat histories if needed for maintenance, testing, or safety.</li>
      </ul>
      <p>We’ll always aim to act thoughtfully and in good faith.</p>

      <h2>5. Feedback (Optional but Awesome)</h2>
      <p>You’re never required to send us feedback, but it helps a lot. If you notice bugs, rough edges, or have ideas for improvement, we would love to hear them.</p>
      <p>When we provide feedback channels (like email, forms, or in-app links), you agree not to submit anything unlawful or abusive there either.</p>

      <h2>6. Friendly Confidentiality</h2>
      <p>We’re keeping this Beta fairly small for now. To help us shape LensShare before a wider release, please:</p>
      <ul>
        <li>Avoid sharing invite-only links or internal pages publicly.</li>
        <li>Avoid posting screenshots of clearly unfinished features.</li>
        <li>Avoid discussing experimental tools or “hidden” sections in public channels unless we say it’s okay.</li>
      </ul>
      <p>We’re not trying to be secretive for the sake of it; this just helps us improve things without confusion for people who aren’t in the Beta yet.</p>

      <h2>7. No Warranties (Friendly but Clear)</h2>
      <p>We’ve built LensShare with care, but during the Beta it is provided <strong>“as is”</strong> and <strong>“as available”</strong>. That means:</p>
      <ul>
        <li>We can’t guarantee that LensShare will always work perfectly.</li>
        <li>We can’t guarantee that messages or rooms won’t be lost, reset, or changed.</li>
        <li>We are not responsible for any loss of data, opportunity, or other damages that result from using the Beta.</li>
      </ul>
      <p>If you decide to use the Beta, you do so at your own risk.</p>

      <h2>8. Ending or Changing the Beta</h2>
      <p>This Beta Agreement applies while you’re using the LensShare Beta. We may:</p>
      <ul>
        <li>End the Beta or switch to a full release.</li>
        <li>Change or update this Agreement.</li>
      </ul>
      <p>When we update this Agreement, we’ll change the “Last updated” date at the top. If you keep using LensShare after the Agreement changes, that means you accept the new version.</p>

      <h2>9. Thank You ❤️</h2>
      <p>Thank you for being here, testing with us, and helping shape what LensShare becomes. Your time, attention, and feedback truly matter.</p>
      <p>If you ever feel uncomfortable, confused, or unsure about anything here, please reach out through the contact methods we provide.</p>
      <p>We’re really glad you’re here. <span class="heart">✨</span></p>
    </div>
  </div>

  <?php require_once('___footer.php'); ?>
</body>
</html>
