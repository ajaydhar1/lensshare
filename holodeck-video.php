<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php
          $roomSlug = $_GET['room'] ?? '';
          $roomName = $roomSlug ? ucwords(str_replace('-', ' ', $roomSlug)) : 'Private Room';
        ?>
        <meta name="description" content="Join <?= htmlspecialchars($roomName) ?> in a private Holodeck video room on LensShare. Create an invite-only space to talk, collaborate, or hang out face-to-face." />
        <meta name="author" content="LensShare" />

        <!-- Page title -->
        <title><?= htmlspecialchars($roomName) ?> · Holodeck</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?= htmlspecialchars($roomName) ?> · Holodeck – LensShare" />
        <meta name="twitter:description" content="Start or join a private Holodeck video room on LensShare to talk, collaborate, or hang out face-to-face." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/all/teleport.png" />

        <meta property="og:url" content="https://lensshare.co/holodeck-video.php?room=<?= urlencode($roomSlug) ?>" />
        <meta property="og:title" content="<?= htmlspecialchars($roomName) ?> · Holodeck – LensShare" />
        <meta property="og:description" content="Join <?= htmlspecialchars($roomName) ?> in a private Holodeck video room on LensShare. Create an invite-only space to connect in real time." />
        <meta property="og:image" content="https://lensshare.co/assets/img/all/teleport.png" />
        <meta property="og:site_name" content="LensShare" />

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

            .ls-edit-name {
              margin-left: 0.5rem;
              font-size: 0.75rem;
              padding: 0.15rem 0.6rem;
              border-radius: 999px;
              border: 1px solid rgba(148, 163, 184, 0.6);
              background: transparent;
              color: #e5e7eb;
              cursor: pointer;
              transition: background 0.15s ease, border-color 0.15s ease, transform 0.08s ease;
            }
            .ls-edit-name:hover {
              background: rgba(30, 64, 175, 0.9);
              border-color: rgba(129, 140, 248, 0.9);
            }
            .ls-edit-name:active {
              transform: translateY(1px);
            }

          </style>

          <script>
            function setHolodeckDisplayName(name) {
              var clean = (name || "").trim();
              if (!clean) clean = "Guest";

              // 1) Update localStorage
              try {
                localStorage.setItem("lensshare:name", clean === "Guest" ? "" : clean);
              } catch (e) {
                console.warn("[Holodeck] Could not save name to localStorage", e);
              }

              // 2) Update visible label
              var label = document.getElementById("ls-display-name");
              if (label) {
                label.textContent = clean;
              }

              // 3) Tell Jitsi (if loaded)
              if (window.holodeckJitsi && window.holodeckJitsi.executeCommand) {
                window.holodeckJitsi.executeCommand("displayName", clean);
              }
            }
          </script>

          <script>
            // We'll call this once external_api.js finishes loading
            function initJitsiHolodeck() {
              const JITSI_DOMAIN = "video-lensshare.com"; // your Jitsi host

              // 1) Derive room data from URL
              const params = new URLSearchParams(window.location.search);
              let roomRaw = (params.get("room") || "holodeck").trim();  // human label
              let roomId  = (params.get("id") || "").trim();           // secret GUID

              // Slugify label: letters, numbers, hyphens
              let roomSlugBase = roomRaw
                .replace(/[^a-zA-Z0-9]+/g, "-")
                .replace(/-+/g, "-")
                .replace(/^-|-$/g, "")
                .toLowerCase() || "holodeck";

              // Derive a short, safe token from the GUID
              let token = "";
              if (roomId) {
                token = roomId.replace(/[^a-zA-Z0-9]+/g, "").slice(0, 10);
              }

              // Final Jitsi room slug:
              // - if token exists → label + token
              // - else → just label (for backwards compatibility)
              let roomSlug = token
                ? roomSlugBase + "-" + token
                : roomSlugBase;

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
                  HIDE_DEEP_LINKING_LOGO: true
                },
                userInfo: {
                  displayName: displayName
                }
              });

              // Optional: expose for debugging
              window.holodeckJitsi = api;

              // Update visible room label text (keep the friendly name only)
              const labelEl = document.getElementById("holodeck-room-label");
              if (labelEl) {
                labelEl.textContent = roomRaw || roomSlugBase;
              }

              // Initialize name display + push into Jitsi as well
              setHolodeckDisplayName(displayName);
            
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
                Name:
                <strong id="ls-display-name">Guest</strong>
                <button type="button" class="ls-edit-name" id="btn-edit-name">
                  Edit
                </button>
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

              // Name edit behavior
              var editBtn = document.getElementById("btn-edit-name");
              if (editBtn) {
                editBtn.addEventListener("click", function () {
                  var KEY_CURRENT_NAME = 'lensshare:name';
                  var KEY_LAST_NAME    = 'lensshare_last_used_name';

                  function loadString(key) {
                    try {
                      return (localStorage.getItem(key) || '').trim();
                    } catch (e) {
                      return '';
                    }
                  }

                  function saveString(key, value) {
                    try {
                      if (!value) return;
                      localStorage.setItem(key, value);
                    } catch (e) {
                      // ignore
                    }
                  }

                  var current = loadString(KEY_CURRENT_NAME);
                  var last    = loadString(KEY_LAST_NAME);

                  // Build prompt message
                  var msg = "Enter the name you want to show in this space:";
                  if (last) {
                    msg += "\n\nLast used name: " + last;
                  }

                  // Default value: current name or Guest
                  var defaultName = current || "Guest";

                  var proposed = window.prompt(msg, defaultName);

                  if (proposed === null) {
                    // user cancelled
                    return;
                  }

                  proposed = proposed.trim();
                  if (!proposed) {
                    return;
                  }

                  // Move current -> last, if it's changing
                  if (current && current !== proposed) {
                    saveString(KEY_LAST_NAME, current);
                  }

                  // Save the new one as the current name
                  saveString(KEY_CURRENT_NAME, proposed);

                  // Keep Holodeck's display in sync
                  setHolodeckDisplayName(proposed);
                });

              }

              // On load, set UI name from storage (even before Jitsi loads)
              var stored = (localStorage.getItem("lensshare:name") || "").trim();
              setHolodeckDisplayName(stored || "Guest");
            })();
          </script>

    </body>

</html>