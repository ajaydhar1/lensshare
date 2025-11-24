<?php 
require_once("___config.php");
$room_slug  = $room['slug']  ?? ($_GET['room'] ?? '');
$room_title = $room['title'] ?? ucfirst(str_replace('-', ' ', $room_slug));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="LensShare is a video-chat platform that lets you interact with people who share common interests with you. Meet people, make friends, no sign up needed!" />
        <meta name="author" content="LensShare" />
        <meta name="robots" content="noindex,follow">
        
        <!-- Page title -->
        <title><?= strtoupper(str_replace("-", " ", $_GET['room'])) ?> · Space</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="LenShare" />
        <meta name="twitter:description" content="A video-chat platform that lets you interact with people who share common interests with you." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/homepage/bg-masthead-home.png" />
        
        <meta property="og:url" content="https://lensshare.co/" />
        <meta property="og:title" content="LensShare" />
        <meta property="og:description" content="A video-chat platform that lets you interact with people who share common interests with you." />
        <meta property="og:image" content="https://lensshare.co/assets/img/homepage/bg-masthead-home.png" />    
        <meta property="og:site_name" content="LensShare" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <style>

            header.masthead {
                background: url("assets/img/homepage/bg-masthead-home.png");
                background-position: bottom;
                margin-top: -7rem;
            }

            hr.divider {
                background-color: white;
            }

            hr.rectangle-divider {
                height: 1rem;
                max-width: 2rem;
                margin: 1.5rem auto;
                background-color: #cfcfcf;
                opacity: .5;
                z-index: 10;
            }

            #two-step {
                background-image: url(assets/img/homepage/<?= $site_name_font_on_homepage ?>);
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
            }

            #cta-btn {
                background-image: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.4)), url(assets/img/homepage/cta-bg.gif);
            }

        </style>

        <style>

            /* comms include */

            html, body {
                overflow-x: hidden;
                scroll-behavior: smooth;
            }

            #mainNav {
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                background-color: #fff !important;
            }

            #mainNav .navbar-nav .nav-item .nav-link {
                color: #212529
            }

            #mainNav .navbar-nav .nav-item .nav-link:hover {
                color: #f4623a;
            }

            .admtn-wrap {
                top: 87px;
            }

            header {
                margin-top: 87px;
                text-align: center;
                padding-left: 3rem;
                padding-right: 3rem;
            }

            @media (max-width: 740px) {
                header {
                    padding: 10px;
                }
            }

            header .main-title {
                font-size: 2.5rem;
            }

            .list {
                margin-bottom: 2.5rem;
            }

            .row {
                padding-left: 3rem;
                padding-right: 3rem;
            }

            #workspace {
                margin-top: 1rem;
            }

            main {
                margin-top: 1.75rem !important;
            }

            a.btn.chip:not(.btn-secondary), #btn-futuristic,
            .btn:not(.btn-primary):not(.btn-secondary):not(.name-modal-btn) {
                border: solid black 2px;
            }

            .btn.chip {
                margin: 2px 0;
            }

            .toolbar textarea {
                width: 100%;
            }

            input#watch-url {
                width: 100%;
            }

            #video-panel .video-bar {
                background: #22242a;
            }

            a.anchor {
                display: block;
                position: relative;
                top: -87px;
                visibility: hidden;
            }

            a.anchor.panel-viewer {
                display: block;
                position: relative;
                top: -69px;
                visibility: hidden;
            }

            .space-error {
              margin-top: 6rem;      /* clears the fixed nav */
              padding: 1rem 1.5rem;
              text-align: center;
              color: #f97373;
              background: rgba(248, 113, 113, 0.1);
            }

            @media (max-width: 740px) {

              #workspace {
                    margin-top: 0;
                }

              main.panel {
                display: block !important;            /* kill the grid for mobile */
                grid-template-columns: 1fr !important;
              }

              main.panel > .panel {
                width: 100% !important;
                margin-bottom: 1rem;
              }
            }

        </style>

    </head>
    <body id="page-top" data-room-slug="<?= htmlspecialchars($room_slug, ENT_QUOTES, 'UTF-8') ?>" data-room-name="<?= htmlspecialchars($room_title, ENT_QUOTES, 'UTF-8') ?>">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">LensShare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" href="#sections">Sections</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#panel">Panel</a></li>
                        
                        <!-- New: Search icon/link -->
                        <li class="nav-item my-auto">
                            <a class="nav-link d-flex align-items-center" href="search.php">
                                <span class="me-1">🔍</span>
                                <span class="d-none d-lg-inline">Search</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary text-white" style="margin-left: 0.65rem;" href="room.php?room=happy-hour">
                                Happy Hour
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        

        <?php require __DIR__.'/comms/index.php'; ?>
        
        <?php if ($_GET['view'] !== 'post'): ?>

        <!-- Quick Holodeck: Private Room Jump -->
        <section class="private-room-quickjump my-4">
            <div class="container-fluid px-0">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="card bg-light border-0 shadow-sm">
                            <div class="card-body p-3 p-sm-4">
                                <h3 class="h5 mb-2">Jump to a Private Room</h3>
                                <p class="mb-3 small text-muted">
                                    Enter a room name to open a private video space, then share the link with a friend.
                                </p>
                                <form id="quick-holodeck-form" class="mb-0">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text">Room Name</span>
                                        <input
                                            id="quick-holodeck-room"
                                            type="text"
                                            class="form-control"
                                            placeholder="e.g., Study Pod A"
                                            required
                                            pattern="[a-zA-Z0-9 ]+"
                                            aria-label="Private room name"
                                        >
                                        <button class="btn btn-secondary" type="submit">
                                            Go
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            (function () {
                const form  = document.getElementById('quick-holodeck-form');
                const input = document.getElementById('quick-holodeck-room');

                if (!form || !input) return;

                // Small helper to generate a GUID/UUID
                function generateGuid() {
                    if (window.crypto && window.crypto.randomUUID) {
                        return window.crypto.randomUUID();
                    }
                    // Fallback: not a perfect RFC UUID, but random enough for our use
                    const hex = () => Math.floor((1 + Math.random()) * 0x10000)
                    .toString(16)
                    .substring(1);
                    return (
                        hex() + hex() + "-" +
                        hex() + "-" +
                        hex() + "-" +
                        hex() + "-" +
                        hex() + hex() + hex()
                    );
                }

                form.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Use built-in browser validation
                    if (!form.checkValidity()) {
                        form.reportValidity();
                        return;
                    }

                    const raw = input.value.trim();
                    if (!raw) return;

                    const room = encodeURIComponent(raw);
                    const guid = encodeURIComponent(generateGuid());

                    // Match main Holodeck behavior: room = label, id = secret key
                    window.location.href = 'holodeck-video.php?room=' + room + '&id=' + guid;
                });
            })();
        </script>

        <?php endif; ?>


        <?php require_once("___footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
            (function () {
                function safeGetJSON(key, fallback) {
                    try {
                        var raw = localStorage.getItem(key);
                        if (!raw) return fallback;
                        return JSON.parse(raw);
                    } catch (e) {
                        return fallback;
                    }
                }

                function safeSetJSON(key, value) {
                    try {
                        localStorage.setItem(key, JSON.stringify(value));
                    } catch (e) {
                        // ignore quota / private mode issues
                    }
                }

                function addRecentRoom(slug, name) {
                    if (!slug) return;

                    var key = 'lensshare_recent_rooms';
                    var list = safeGetJSON(key, []);

                    // Remove any existing entry for this slug
                    list = list.filter(function (item) {
                        return item.slug !== slug;
                    });

                    // Add to front with timestamp
                    list.unshift({
                        slug: slug,
                        name: name || slug,
                        ts: Math.floor(Date.now() / 1000)
                    });

                    // Cap at 5 rooms
                    if (list.length > 5) {
                        list = list.slice(0, 5);
                    }

                    safeSetJSON(key, list);
                }

                document.addEventListener('DOMContentLoaded', function () {
                    var body = document.body;
                    if (!body) return;

                    var slug = body.getAttribute('data-room-slug');
                    var name = body.getAttribute('data-room-name');

                    if (slug) {
                        addRecentRoom(slug, name);
                    }
                });
            })();
        </script>

    </body>
</html>
