<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="A Portal designed to help you strengthen existing relationships and build new ones." />
        <meta name="author" content="LensShare" />

        <!-- Page title -->
        <title>Relationships – Strengthen existing relationships and build new ones.</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Relationships – LensShare" />
        <meta name="twitter:description" content="Strengthen existing relationships and build new ones." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/relationships/bg-masthead-relationships.png" />

        <meta property="og:url" content="https://lensshare.co/relationships.php" />
        <meta property="og:title" content="Relationships – LensShare" />
        <meta property="og:description" content="Strengthen existing relationships and build new ones." />
        <meta property="og:image" content="https://lensshare.co/assets/img/relationships/bg-masthead-relationships.png" />
        <meta property="og:site_name" content="LensShare" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <?php /*<?php /* <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /> */ ?>
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <style>

            header.masthead {
                background: url(assets/img/relationships/bg-masthead-relationships.png);
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
                background-color: deeppink;
                opacity: 1;
            }

            .hi {
                border: solid 3px white;
            }

        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">LensShare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" href="#dating">Dating</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#marriage">Married Life</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#parenting">Parenting</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" style="margin-right: 0.65rem;" href="#holodeck">Holodeck</a></li>
                        <li class="nav-item"><a class="btn btn-primary text-white" href="room.php?room=happy-hour">Happy Hour</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5">
                <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" style="">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-dark font-weight-bold"><strong>Relationships</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="text-white mb-3">This Portal helps you grow existing relationships and make new ones along the way.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <img class="hi" src="assets/img/all/webcam7.gif">
                        <img class="hi" src="assets/img/all/webcam2.gif">
                        <img class="hi" src="assets/img/all/webcam4.gif">
                        <img class="hi" src="assets/img/all/webcam6.gif">
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-4 text-center">
                        <a class="btn btn-dark btn-xl" href="#dating">Start Connecting</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Call to action-->
        <section class="page-section text-dark" id="dating">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Dating</strong></h2>
                        <p class="text-muted">LensShare can also help you meet new people. Chat online, then see where the connection goes offline.</p>
                        <div class="mt-4">
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=virtual-hookups">Virtual Hookups</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=college-dating">College</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=20s-dating">20s</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=30s-dating">30s</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=40s-dating">40s</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=50s-dating">50s</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=silver-singles">Silver Singles</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=gay-dating">Gay</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=lesbian-dating">Lesbian</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=bisexual-dating">Bisexual</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=trans-dating">Trans</a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <img class="explanation-image mx-auto my-auto" style="height: 370px; width: auto;" src="assets/img/relationships/dating.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="marriage">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-flex">
                        <img class="explanation-image my-auto" style="height: 370px; width: auto;" src="assets/img/relationships/married.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Married Life</strong></h2>
                        <p class="text-muted">Marriage can be complicated. Talk with other couples your age and see how you can support each other.</p>
                        <div class="mt-4">
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=wedding-planning">Wedding Planning</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=newlyweds">Newlyweds</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=married-2-to-5-years">2-5 Years</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=married-5-to-10-years">5-10 Years</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=married-10-to-15-years">10-15 Years</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=married-15-to-20-years">15-20 Years</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=married-20-plus-years">20+ Years</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=separated">Separated</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=divorced">Divorced</a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="parenting">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Parenting</strong></h2>
                        <p class="text-muted">Parenting is a lifelong responsibility. Connect with other parents and work together to make the best decisions for your kids.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=newborns">Newborns (0-2 Months)</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=infants">Infants (3-11 months)</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=toddlers">Toddlers (1-2 Years)</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=preschoolers">Preschoolers (3-4 Years)</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=school-aged">School-Aged (5-12 Years)</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=teenagers">Teens (13-17)</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=college-kids">College Kids (18-21 years)</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=adult-children">Adult Children (22+)</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" style="" src="assets/img/relationships/kids.gif">
                    </div>
                </div>
            </div>
        </section>
        
        <?php require_once("___holodeck.php"); ?>
        
        <?php require_once("___footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <?php /* <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script> */ ?>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables/datatables-demo.js"></script>

    </body>
</html>
