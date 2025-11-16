<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    	<meta name="description" content="Your favorite songs and artists in one place. Listen to live radio."> 
        <meta name="author" content="<?= $site_name ?>" />
        
        <!-- Page title -->
        <title><?= strtoupper(str_replace("-", " ", $_GET['room'])) ?> · Holodeck</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />
        
        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="iHeartRadio - <?= $site_name ?>" />
        <meta name="twitter:description" content="Your favorite songs and artists in one place. Listen to live radio." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/assets/img/entertainment/heart.jpg" />
        
        <meta property="og:url" content="https://<?= $site_domain ?>/iheartradio.php" />
        <meta property="og:title" content="iHeartRadio - <?= $site_name ?>" />
        <meta property="og:description" content="Your favorite songs and artists in one place. Listen to live radio." />
        <meta property="og:image" content="https://<?= $site_domain ?>/assets/img/entertainment/heart.jpg" />    
        <meta property="og:site_name" content="<?= $site_name ?>" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <?php /*<?php /* <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /> */ ?>
        
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">

        <!--
        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/img/angry.png">
        -->

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <style>
            html, body {
              height: 100%;
            }
            body {
              margin: 0;
              display: flex;
              flex-direction: column;
              background: #020617; /* dark slate */
              color: #e5e7eb;
              font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            }

            /* Simple LensShare-style header */
            .ls-header {
              height: 56px;
              display: flex;
              align-items: center;
              justify-content: space-between;
              padding: 0 1.5rem;
              background: rgba(15, 23, 42, 0.95);
              border-bottom: 1px solid rgba(148, 163, 184, 0.35);
              backdrop-filter: blur(10px);
              position: sticky;
              top: 0;
              z-index: 20;
            }
            .ls-header-title {
              font-weight: 600;
              letter-spacing: 0.03em;
            }
            .ls-header-title a {
              color: #f8fafc;               /* soft white */
              text-decoration: none;        /* remove underline */
              font-weight: 600;             /* slightly bold */
              letter-spacing: 0.03em;       /* subtle “brand” spacing */
              transition: color 0.2s ease, opacity 0.2s ease;
            }

            .ls-header-title a:hover {
              opacity: 0.75;                /* gentle fade on hover */
            }

            .ls-header-title a:active {
              opacity: 0.6;                 /* tap/click feedback */
            }
            /* Right side (note + button) */
            .ls-header-right {
              display: flex;
              align-items: center;
              gap: 0.75rem;
              font-size: 0.85rem;
            }

            /* Copy link button */
            .ls-copy-link {
              border: 1px solid rgba(148, 163, 184, 0.6);
              background: rgba(15, 23, 42, 0.9);
              color: #e5e7eb;
              border-radius: 999px;
              padding: 0.3rem 0.9rem;
              font-size: 0.8rem;
              cursor: pointer;
              display: inline-flex;
              align-items: center;
              gap: 0.35rem;
              transition: background 0.15s ease, border-color 0.15s ease, transform 0.08s ease;
            }

            .ls-copy-link:hover {
              background: rgba(30, 64, 175, 0.9); /* soft indigo */
              border-color: rgba(129, 140, 248, 0.9);
            }

            .ls-copy-link:active {
              transform: translateY(1px);
            }

            /* Tiny tweak for mobile */
            @media (max-width: 640px) {
              .ls-header-right {
                gap: 0.5rem;
              }
              .ls-header-note {
                display: none; /* optional: hide note on very small screens */
              }
            }
            .ls-header-sub {
              font-size: 0.85rem;
              opacity: 0.8;
            }

            .ls-main {
              flex: 1;
              min-height: 0; /* important for flex children */
              display: flex;
              flex-direction: column;
            }

            .holodeck-bar {
              padding: 0.75rem 1.5rem;
              font-size: 0.9rem;
              color: #cbd5f5;
              border-bottom: 1px solid rgba(148, 163, 184, 0.15);
              display: flex;
              justify-content: space-between;
              align-items: center;
              gap: 1rem;
            }
            .holodeck-room {
              font-weight: 500;
            }
            .holodeck-room span {
              opacity: 0.7;
              font-weight: 400;
            }

            /* Jitsi shell fills remaining space */
            #jitsi-shell {
              flex: 1;
              min-height: 0;
              display: flex;
            }

            #jitsi-root {
              flex: 1;
              min-height: 0;
              /* background placeholder while Jitsi loads */
              background: radial-gradient(circle at top, #0f172a, #020617);
            }

            /* Jitsi will create a div inside; make sure it fills parent */
            #jitsi-root > div {
              width: 100%;
              height: 100%;
            }

            .ls-footer {
              padding: 0.5rem 1.5rem;
              font-size: 0.8rem;
              color: #9ca3af;
              border-top: 1px solid rgba(148, 163, 184, 0.2);
              background: #020617;
              text-align: right;
            }

            @media (max-width: 640px) {
              .ls-header {
                padding: 0 1rem;
              }
              .holodeck-bar {
                padding: 0.5rem 1rem;
                flex-direction: column;
                align-items: flex-start;
              }
            }
          </style>

          <script>
            // We'll call this once external_api.js finishes loading
            function initJitsiHolodeck() {
              const JITSI_DOMAIN = "video-lensshare.com"; // your Jitsi host

              // 1) Derive room name from ?room=... (fallback "holodeck")
              const params = new URLSearchParams(window.location.search);
              let roomRaw = (params.get("room") || "holodeck").trim();

              // Slugify: letters, numbers, hyphens
              let roomSlug = roomRaw
                .replace(/[^a-zA-Z0-9]+/g, "-")
                .replace(/-+/g, "-")
                .replace(/^-|-$/g, "")
                .toLowerCase() || "holodeck";

              // 2) Display name from localStorage("lensshare:name") or "Guest"
              let displayName = (localStorage.getItem("lensshare:name") || "").trim();
              if (!displayName) displayName = "Guest";

              // 3) Mount Jitsi into #jitsi-root
              const parent = document.getElementById("jitsi-root");
              if (!parent || !window.JitsiMeetExternalAPI) {
                console.warn("[Holodeck] Jitsi API not available");
                return;
              }

              const api = new window.JitsiMeetExternalAPI(JITSI_DOMAIN, {
                roomName: roomSlug,
                parentNode: parent,
                configOverwrite: {
                  prejoinPageEnabled: true
                },
                interfaceConfigOverwrite: {
                  // tweak if you want a cleaner UI
                  HIDE_DEEP_LINKING_LOGO: true
                },
                userInfo: {
                  displayName: displayName
                }
              });

              // Optional: expose for debugging in console
              window.holodeckJitsi = api;

              // Update visible room label text
              const labelEl = document.getElementById("holodeck-room-label");
              if (labelEl) {
                labelEl.textContent = roomRaw || roomSlug;
              }
            }
          </script>

          <!-- Load your self-hosted Jitsi external API, then init -->
          <script
            src="https://video-lensshare.com/external_api.js"
            async
            onload="initJitsiHolodeck()"
          ></script>
        </head>
        <body>
          <!-- Replace this with your real LensShare nav include if you like -->
          <header class="ls-header">
            <div>
              <div class="ls-header-title"><a href="index.php">LensShare</a></div>
              <div class="ls-header-sub">Holodeck · Custom Video Space</div>
            </div>
            <div class="ls-header-right">
              <div class="ls-header-sub ls-header-note">No login · Just a link</div>
              <button class="ls-copy-link" type="button" id="btn-copy-link">
                Copy link
              </button>
            </div>
          </header>

          <main class="ls-main">
            <div class="holodeck-bar">
              <div class="holodeck-room">
                Room: <strong id="holodeck-room-label">Loading…</strong>
                <span>(from ?room=…)</span>
              </div>
              <div class="holodeck-room">
                Name: <strong>
                  <script>
                    (function () {
                      var n = (localStorage.getItem("lensshare:name") || "Guest").trim();
                      document.write(n || "Guest");
                    })();
                  </script>
                </strong>
              </div>
            </div>

            <div id="jitsi-shell">
              <div id="jitsi-root"></div>
            </div>
          </main>

          <footer class="ls-footer">
            Holodeck is powered by LensShare &middot; Jitsi video spaces
          </footer>


          <script>
            (function () {
              const btn = document.getElementById('btn-copy-link');
              if (!btn) return;

              btn.addEventListener('click', async function () {
                const url = window.location.href;
                const originalText = btn.textContent;

                try {
                  if (navigator.clipboard && navigator.clipboard.writeText) {
                    await navigator.clipboard.writeText(url);
                  } else {
                    // Fallback for older browsers
                    const tmp = document.createElement('textarea');
                    tmp.value = url;
                    tmp.style.position = 'fixed';
                    tmp.style.left = '-9999px';
                    document.body.appendChild(tmp);
                    tmp.select();
                    document.execCommand('copy');
                    document.body.removeChild(tmp);
                  }

                  btn.textContent = 'Copied!';
                  btn.disabled = true;
                  setTimeout(() => {
                    btn.textContent = originalText;
                    btn.disabled = false;
                  }, 1800);
                } catch (e) {
                  console.warn('[Holodeck] copy failed', e);
                  btn.textContent = 'Error copying';
                  setTimeout(() => {
                    btn.textContent = originalText;
                  }, 1800);
                }
              });
            })();
          </script>

    </body>

</html>