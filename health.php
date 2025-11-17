<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="This Portal is for students in any grade level, and their parents, who want to get ahead of the competition in school." />
        <meta name="author" content="<?= $site_name ?>" />
        
        <!-- Page title -->
        <title>Health & Wellness - Maintain and improve your physical and mental health.</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Health - <?= $site_name ?>" />
        <meta name="twitter:description" content="Maintain and improve your physical and mental health." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/assets/img/health/mural-mental-health.jpeg" />

        <meta property="og:url" content="https://<?= $site_domain ?>/health.php" />
        <meta property="og:title" content="Health - <?= $site_name ?>" />
        <meta property="og:description" content="Maintain and improve your physical and mental health." />
        <meta property="og:image" content="https://<?= $site_domain ?>/assets/img/health/mural-mental-health.jpeg" />    
        <meta property="og:site_name" content="<?= $site_name ?>" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <?php /*<?php /* <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /> */ ?>
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <style>

            header.masthead {
                background: url(assets/img/health/bg-masthead-health.gif);
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

            iframe {
                box-shadow: 0rem 1.5rem 2rem rgba(0, 0, 0, 0.15);
                background-color: #ff4800;
                padding: 2px 4px 4px 4px;
            }


            #emoji-and-game-section {
                /* background-color: #1a1a1a; */
                background-image: linear-gradient(to bottom, rgba(17,17,17,1), rgba(17,17,17,.9)), url(assets/img/health/emotions-bg.jpg);
                background-size: cover;
                padding-bottom: 6rem;
                padding-top: 6rem;
            }

            .feelings h4.link-color {
                color: white;
            }

            #howdoyoufeel {
                color: white;
                text-shadow: -2px 2px grey;
                font-size: 3rem;
                font-weight: 600;
            }

            .emoji {
                color: indigo;
                box-shadow: 0 0 10rem rgb(255, 255, 255);
                background: linear-gradient(-80deg, purple, orange);
            }

            .emoji:hover {
                color: white;
            }

            .p-1 a {
                text-decoration: none;
            }

            .p-1 a h4 {
                font-weight: 600;
            }

            #holodeck {
                background-image: none;
                background-color: transparent !important;
                padding-bottom: 0.75rem;
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
                        <li class="nav-item my-auto"><a class="nav-link" href="#base-station">Base Station</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#physical-health">Physical</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#mental-health">Mental</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#mood-board">Mood Board</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#emoji-and-game-section">Emotions</a></li>
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
                        <h1 class="text-white font-weight-bold"><strong>Health <span class="text-warning">+</span> Wellness</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="mb-3">This Portal is to help and motivate you to maintain and improve your physical and mental health.</p>
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
                        <a class="btn btn-dark btn-xl" href="#base-station">Explore Portal</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Call to action-->
        <section class="page-section text-dark" id="base-station">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Health <span class="text-pink">+</span> Wellness Base Station</strong></h2>
                        <p class="text-muted">Join the Health & Wellness Base Station to discuss physical and mental health issues in general.</p>
                        <a id="base-station-btn" class="btn btn-dark btn-xl mt-3" href="room.php?room=health-and-wellness-base-station">Join Base Station</a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="base-station-image img-fluid" style="" src="assets/img/all/base-station.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="physical-health">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="explanation-image img-fluid" style="margin-top: -100px; height: 370px; width: auto;" src="assets/img/health/doctor.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Physical Health</strong></h2>
                        <p class="text-muted">Join one of these spaces to discuss issues pertaining to maintaining a healty body.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=physical-health-in-general">In Genenral</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=health-insurance">Health Insurance</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=im-sick">I'm Sick</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=nutrition">Nutrition</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=fitness">Fitness</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=dental">Dental</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=vision">Vision</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=medical-issues">Medical Issues</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=illness-prevention">Illness Prevention</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=exercise">Exercise</a>
                            <?php //<a class="btn btn-dark btn-xl mb-3" href="room.php?room=vaping">Vaping</a> ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="mental-health">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Mental Health</strong></h2>
                        <p class="text-muted">Join one of these rooms to discuss mental health issues that you may have, or a friend or family member.</p>
                        <div class="mt-4">
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=mental-health-in-general">In General</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=health-insurance">Health Insurance</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=sleep">Sleep</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=stress">Stress</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=alcohol">Alcohol</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=meditation">Meditation</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=breathwork">Breathwork</a>
                            <?php //<a class="btn btn-warning btn-xl mb-3" href="room.php?room=ph.d.">Ph.D.</a> ?>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=emotional-wellness">Emotional Wellness</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=body-image">Body Image</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" style="" src="assets/img/health/brain.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="mood-board">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6" style="">
                        <img class="explanation-image img-fluid" style="margin-top: -100px; height: 370px; width: auto;" src="assets/img/health/mask.webp">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Mood Board</strong></h2>
                        <p class="text-muted">Fix you mood by watching memes of other people feeling the same way as you do. You may find it therapeutic!</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="mood-board.php">Fix Your Mood</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="emoji-and-game-section">
            <div class="container games">
                <h1 id="howdoyoufeel" class="pt-5" style="">How do you feel?</h1>
                <div class="row align-items-start mt-5 mb-4 feelings emoji-rack" style="">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-annoyed" class="feeling">
                                <i class="img-fluid rounded-circle far fa-angry fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-annoyed"><h4 class="text-white">Annoyed</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-bored" class="feeling">
                                <i class="img-fluid rounded-circle far fa-flushed fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-bored"><h4 class="text-white">Bored</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-anxious" class="feeling">
                                <i class="img-fluid rounded-circle far fa-frown-open fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-anxious"><h4 class="text-white">Anxious</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-depressed" class="feeling">
                                <i class="img-fluid rounded-circle far fa-sad-tear fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-depressed"><h4 class="text-white">Depressed</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-frustrated" class="feeling">
                                <i class="img-fluid rounded-circle far fa-tired fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-frustrated"><h4 class="text-white">Frustrated</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-high" class="feeling">
                                <i class="img-fluid rounded-circle far fa-grin-stars fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-high"><h4 class="text-white">High</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-sleepy" class="feeling">
                                <i class="img-fluid rounded-circle fas fa-bed fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-sleepy"><h4 class="text-white">Sleepy</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-lonely" class="feeling">
                                <i class="img-fluid rounded-circle far fa-sad-cry fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-loney"><h4 class="text-white">Lonely</h4></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once("___holodeck.php"); ?>

        </section>
        
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
