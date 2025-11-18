<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?= $site_name ?> is a video-chat platform that lets you interact with people who share common interests with you. Meet people, make friends, no sign up needed!" />
        <meta name="author" content="<?= $site_name ?>" />
        
        <!-- Page title -->
        <title><?= strtoupper(str_replace("-", " ", $_GET['room'])) ?> · Space</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="LenShare" />
        <meta name="twitter:description" content="A video-chat platform that lets you interact with people who share common interests with you." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/assets/img/homepage/bg-masthead-home.png" />
        
        <meta property="og:url" content="https://<?= $site_domain ?>/" />
        <meta property="og:title" content="<?= $site_name ?>" />
        <meta property="og:description" content="A video-chat platform that lets you interact with people who share common interests with you." />
        <meta property="og:image" content="https://<?= $site_domain ?>/assets/img/homepage/bg-masthead-home.png" />    
        <meta property="og:site_name" content="<?= $site_name ?>" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <?php /*<!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />*/ ?>
        
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

            hr {
                border-top: none;
            }

            hr.divider {
                height: 0.2rem;
                max-width: 3.25rem;
                margin: 1.5rem auto;
                background-color: white;
                opacity: 1;
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

            <?php /*

            * {
              box-sizing: border-box;
            }

            body * {
              outline: 1px solid rgba(255, 0, 0, 0.2);
            }

            */ ?>

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
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><?= $site_name ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" href="#sections">Sections</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" style="margin-right: 0.65rem;" href="#panel">Panel</a></li>
                        <li class="nav-item"><a class="btn btn-primary text-white" href="room.php?room=happy-hour">Happy Hour</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        

        <?php require __DIR__.'/comms/index.php'; ?>
        
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

            form.addEventListener('submit', function (e) {
              e.preventDefault();

              // Use built-in browser validation
              if (!form.checkValidity()) {
                form.reportValidity();
                return;
              }

              const raw = input.value.trim();
              if (!raw) return;

              // Navigate to the private video space
              const room = encodeURIComponent(raw);
              window.location.href = 'holodeck-video.php?room=' + room;
            });
          })();
        </script>


        <?php require_once("___footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <?php /* <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script> */ ?>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>



    </body>
</html>
