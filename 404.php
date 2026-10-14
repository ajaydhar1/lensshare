<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="This page could not be found. Explore LensShare’s Rooms and Portals to get back to the conversation." />
        <meta name="author" content="LensShare" />
        <meta name="robots" content="noindex">

        <title>Page Not Found – LensShare</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />
        
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <?php require_once __DIR__ . '/includes/nav/site-nav.php'; ls_nav_head('/'); ?>

        <style>

            body {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.8) 100%), url(assets/img/all/bg-masthead-404.jpg) !important;
                background-size: cover;
                background-attachment: fixed;
            }

            body header.masthead {
                background: unset;
            }

            hr.divider {
                background-color: deeppink;
            }

        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php ls_nav_render(['base' => '/']); ?>
        <!-- Masthead-->
        <header class="masthead" id="main-content">
            <div class="container px-4 px-lg-5">
                <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"><strong>404</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="text-white-75 mb-3">
                            The page you’re looking for doesn’t exist or may have moved.
                        </p>
                        <p class="text-white-75 mb-4">
                            Use the options below to jump back into LensShare.
                        </p>

                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-8 d-flex flex-wrap justify-content-center gap-2">
                        <a class="btn btn-primary btn-xl mb-2" href="index.php">
                            Return Home
                        </a>
                        <a class="btn btn-outline-light btn-xl mb-2" href="explore.php">
                            Explore LensShare
                        </a>
                        <a class="btn btn-outline-light btn-xl mb-2" href="room.php?room=happy-hour">
                            Go to Happy Hour
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <img class="hi" src="assets/img/all/webcam7.gif" alt="" aria-hidden="true">
                        <img class="hi" src="assets/img/all/webcam2.gif" alt="" aria-hidden="true">
                        <img class="hi" src="assets/img/all/webcam4.gif" alt="" aria-hidden="true">
                        <img class="hi" src="assets/img/all/webcam6.gif" alt="" aria-hidden="true">
                    </div>
                </div>
            </div>
        </header>
        
        <?php require_once("___footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <?php ls_nav_scripts('/'); ?>
        
    </body>
</html>
