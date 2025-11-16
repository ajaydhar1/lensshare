<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="This Portal is for those who love professional sports and others who enjoy working out and partcipating in athletics and exercising themselves." />
        <meta name="author" content="<?= $site_name ?>" />
        
        <!-- Page title -->
        <title>Sports & Fitness - For those who love sports and exercising.</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Sports & Fitness - <?= $site_name ?>" />
        <meta name="twitter:description" content="For those who love sports and exercising." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/assets/img/sports/santa-snowboarding.jpeg" />
        
        <meta property="og:url" content="https://<?= $site_domain ?>/sports.php" />
        <meta property="og:title" content="Sports & Fitness - <?= $site_name ?>" />
        <meta property="og:description" content="For those who love sports and exercising." />
        <meta property="og:image" content="https://<?= $site_domain ?>/assets/img/sports/santa-snowboarding.jpeg" />    
        <meta property="og:site_name" content="<?= $site_name ?>" />

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
                background: url(assets/img/sports/bg-masthead-sports.gif);
                background-size: cover;
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

        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-secondary" href="index.php"><?= $site_name ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" href="#sports">Sports</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#fitness">Fitness</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" style="margin-right: 0.65rem;" href="#holodeck">Holodeck</a></li>
                        <li class="nav-item"><a class="btn btn-primary text-white" href="space.php?room=happy-hour">Happy Hour</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5">
                <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" style="">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-warning font-weight-bold"><strong>Sports & Fitness</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="text-white-75 mb-3">This Portal is for those who love professional sports and others who enjoy working out and partcipating in athletics and exercising themselves.</p>
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
                        <a class="btn btn-light btn-xl" href="#sports">Explore Portal</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Call to action-->
        <section class="page-section text-dark" id="sports">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Sports</strong></h2>
                        <p class="text-muted">Join a sports room if your a fan of professional sports or play a sport yourself and want help improving your skills.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=football">Football</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=baseball">Baseball</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=basketball">Basketball</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=hockey">Hockey</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=soccer">Soccer</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=golf">Golf</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=tennis">Tennis</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=auto-racing">Auto Racing</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=mma">MMA</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=wrestling">Wrestling</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=gymnastics">Gymnastics</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" style="" src="assets/img/sports/sports.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="fitness">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="explanation-image img-fluid" style="" src="assets/img/sports/fitness.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Fitness</strong></h2>
                        <p class="text-muted">Use these spaces to share your fitness goals and journey with others that workout the same way as you.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=lifting-weights">Lifting Weights</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=calisthenics">Calisthenics</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=cardio">Cardio</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=running">Running</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=biking">Biking</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=walking">Walking</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=stretching">Stretching</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=swimming">Swimming</a>
                            <a class="btn btn-dark btn-xl mb-3" href="space.php?room=cross-training">Cross Training</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="space.php?room=fitness-wearables">Fitness Wearables</a>
                        </div>
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
