<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="LensShare is a text + video chat platform where you can join interest-based rooms, meet people, and hang out — no sign-up needed." />
        <meta name="author" content="LensShare" />
        
        <!-- Page title -->
        <title>LensShare — Text & Video Chat Rooms for Shared Interests</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="LensShare: Text + Video Chat Rooms" />
        <meta name="twitter:description" content="Join interest-based rooms on LensShare for instant text and video chat. Meet new people, share conversations, and connect without creating an account." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/homepage/bg-masthead-home.png" />
        
        <meta property="og:url" content="https://lensshare.co/" />
        <meta property="og:title" content="LensShare: Text + Video Chat Rooms" />
        <meta property="og:description" content="Join interest-based rooms on LensShare for instant text and video chat. Meet new people, share conversations, and connect without creating an account." />
        <meta property="og:image" content="https://lensshare.co/assets/img/homepage/bg-masthead-home.png" />    
        <meta property="og:site_name" content="LensShare" />

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
                        <li class="nav-item my-auto"><a class="nav-link" href="#how-it-works">How it Works</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#the-metaverse">The Metaverse</a></li>
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
                        <h1 class="text-white font-weight-bold"><strong>The <?= $site_name ?> Metaverse</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="text-white mb-0"><?= $site_name ?> is a text + video chat platform with interest-based rooms.</p>
                        <p class="text-white mb-3">Hang out, meet people — no sign-up needed.</p>
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
                        <a id="" class="btn btn-xl text-white cta" style="" href="#how-it-works">
                            <span>How it Works</span>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h12m-5-5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="2"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section-smaller">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <a class="btn btn-dark btn-xl mb-3" href="work.php">Work Rooms</a>
                        <a class="btn btn-dark btn-xl mb-3" href="sports.php">Sports & Fitness</a>
                        <a class="btn btn-dark btn-xl mb-3" href="education.php">School & Education</a>
                        <a class="btn btn-dark btn-xl mb-3" href="entertainment.php">Entertainment</a>
                        <a class="btn btn-dark btn-xl mb-3" href="health.php">Health & Wellbeing</a>
                        <a class="btn btn-dark btn-xl mb-3" href="relationships.php">Relationships</a>
                        <a class="btn btn-dark btn-xl mb-3" href="technology.php">Technology</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section id="how-it-works" class="page-section-smaller" style="padding-top: 2rem; padding-bottom: 8rem">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0"><strong>How it Works</strong></h2>
                <hr class="divider" style="background-color: deeppink"/>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-4">
                            <div class="mb-2"><img class="" src="assets/img/homepage/category-icon.png"></div>
                            <h3 class="h4 mb-2"><strong>Choose a Portal</strong></h3>
                            <p class="text-muted mb-0">First, choose a portal based on your interest.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-4">
                            <div class="mb-2"><img class="" src="assets/img/homepage/space-icon.png"></div>
                            <h3 class="h4 mb-2"><strong>Click on a Room</strong></h3>
                            <p class="text-muted mb-0">Then click into a room to start a text or video chat on that topic.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-4">
                            <div class="mb-2"><img class="" src="assets/img/homepage/call-icon.png"></div>
                            <h3 class="h4 mb-2"><strong>Chat with People</strong></h3>
                            <p class="text-muted mb-0">Finally, just dive in, meet people, and have fun!</p>
                        </div>
                    </div>
                </div>
                <div id="two-step" class="row justify-content-center mt-5">
                    <div class="col-lg-4 text-center mt-5">
                        <img class="img-fluid mt-2" style="height: 400px;" src="assets/img/homepage/dancing.gif">
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action-->
        <section class="page-section-smaller bg-light text-dark" id="the-metaverse">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>The <?= $site_name ?> Metaverse</strong></h2>
                        <p class="text-muted">LensShare is a 2D network of “Rooms,” which are simple, interest-based spaces with text and video chat.</p>
                        <p class="text-muted mb-0">There’s no 3D world, no cartoon avatars, and no complicated controls.</p>
                        <p class="text-muted">Just people talking to people — face-to-face, in real time.</p>
                        <span style="font-size: 2.7rem;">😀😆🤣😇</span>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" style="" src="assets/img/homepage/metaverse.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section-smaller text-dark">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="explanation-image img-fluid" style="margin-top: -65px;" src="assets/img/homepage/portals.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Portals</strong></h2>

                        <p class="text-muted">LensShare has an unlimited number of Rooms, so we group them into themed Portals to make it easier to explore.</p>
                        <p class="text-muted">Just choose a Portal → click a Room → and you’re instantly in a space where someone might already be hanging out.</p>
                        <p class="text-muted">Here is the complete list of Portals:</p>
                        <div class="mt-4">
                            <a class="btn btn-dark mb-3" href="work.php">Work Rooms</a>
                            <a class="btn btn-dark mb-3" href="sports.php">Sports & Fitness</a>
                            <a class="btn btn-dark mb-3" href="education.php">School & Education</a>
                            <a class="btn btn-dark mb-3" href="entertainment.php">Entertainment</a>
                            <a class="btn btn-dark mb-3" href="health.php">Health & Wellbeing</a>
                            <a class="btn btn-dark mb-3" href="relationships.php">Relationships</a>
                            <a class="btn btn-dark mb-3" href="technology.php">Technology</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section-smaller bg-light text-dark">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Rooms</strong></h2>
                        <p class="text-muted">Rooms are simple video + text chat spaces built around a topic.</p>
                        <p class="text-muted">You can join public Rooms or create a private one by typing a secret name into the Holodeck.</p>
                        <p class="text-muted">Each Portal has a Holodeck, and there’s one on the homepage too.</p>
                        <p class="text-muted">Here are examples of Rooms in the <a class="btn btn-dark btn-sm" href="sports.php">Sports & Fitness</a> Portal.</p>
                        <div class="mt-5">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=football">Football</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=baseball">Baseball</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=basketball">Basketball</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" style="margin-top: -65px;" src="assets/img/homepage/space.png">
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=managers" title="room name">
                            <img class="img-fluid" src="assets/img/work/managers.gif" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Managers</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=programmers" title="room name">
                            <img class="img-fluid" src="assets/img/work/programmers.gif" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Programmers</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=startups" title="room name">
                            <img class="img-fluid" src="assets/img/work/startups.gif" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Startups</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once("___holodeck.php"); ?>

        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=marketers" title="room name">
                            <img class="img-fluid" src="assets/img/work/marketers.gif" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Marketers</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=accountants" title="room name">
                            <img class="img-fluid" src="assets/img/work/accountants.gif" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Accountants</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=doctors" title="room name">
                            <img class="img-fluid" src="assets/img/work/doctors.gif" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Doctors</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once("___footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <?php /* <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script> */ ?>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
