<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Explore Sports & Fitness Rooms where you can talk pro sports, share workouts, and support each other’s athletic and fitness goals." />
        <meta name="author" content="LensShare" />

        <!-- Page title -->
        <title>Sports & Fitness Rooms — Talk Sports, Share Workouts | LensShare</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Sports & Fitness Rooms — LensShare" />
        <meta name="twitter:description" content="Join Sports & Fitness Rooms to talk games, compare training, and stay motivated with others who love being active." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/sports/santa-snowboarding.jpeg" />

        <meta property="og:url" content="https://lensshare.co/sports.php" />
        <meta property="og:title" content="Sports & Fitness Rooms — LensShare" />
        <meta property="og:description" content="Join Sports & Fitness Rooms to talk games, compare training, and stay motivated with others who love being active." />
        <meta property="og:image" content="https://lensshare.co/assets/img/sports/santa-snowboarding.jpeg" />
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
                <a class="navbar-brand text-secondary" href="index.php">LensShare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" href="#pro-league-fans">Pro Leagues</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#sports">Sports</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#fitness">Fitness</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#sports-talk-central" style="margin-right: 0.65rem;">Sports Talk Central</a></li>
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
                        <h1 class="text-warning font-weight-bold"><strong>Sports & Fitness</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="text-white-75 mb-3">This Portal is for people who love professional sports, enjoy working out, or participate in athletics. Share your interests, connect with others, and stay active together.</p>
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
                    <div class="col-lg-6 text-center">
                        <a class="btn btn-light btn-xl mb-2" href="#sports">Explore Rooms</a>
                        <a class="btn btn-secondary btn-xl" style="" href="room.php?room=sports-talk-central">Join Sports Talk Central</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Pro League Fans -->
        <section class="page-section bg-light text-dark" id="pro-league-fans">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Pro League Fans</strong></h2>
                        <p class="text-muted">
                            Jump into a Pro League Room if you love watching the games, following trades, 
                            and reacting in real time. Talk matchups, big plays, controversies, and 
                            everything happening around your favorite teams and players.
                        </p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=nfl-fans">NFL Fans</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=nba-fans">NBA Fans</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=mlb-fans">MLB Fans</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=nhl-fans">NHL Fans</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=global-football-fans">Soccer / Global Football</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=college-football">College Football</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=college-basketball">College Basketball</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=fantasy-sports">Fantasy Sports</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=big-fight-night">Big Fight Night (Boxing & MMA)</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=motorsport-fans">Motorsport & F1 Fans</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" src="assets/img/sports/pro-leagues.gif" alt="Pro league fans watching sports together">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="sports">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="explanation-image img-fluid" style="" src="assets/img/sports/sports.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Sports</strong></h2>
                        <p class="text-muted">Join a Sports Room to talk training, technique, and everything that goes into playing the sports you love. Compare experiences, improve your skills, and connect with others who share your passion for staying active.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=football">Football</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=baseball">Baseball</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=basketball">Basketball</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=hockey">Hockey</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=soccer">Soccer</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=golf">Golf</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=tennis">Tennis</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=auto-racing">Auto Racing</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=boxing">Boxing</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=mma">MMA</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=wrestling">Wrestling</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=gymnastics">Gymnastics</a>
                        </div>
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
                        <h2 class="mb-3"><strong>Fitness</strong></h2>
                        <p class="text-muted">Use these rooms to share your fitness goals, routines, and progress with others who train the same way you do. Support each other and stay motivated.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=lifting-weights">Lifting Weights</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=calisthenics">Bodyweight &amp; Calisthenics</a>

                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=cardio">Cardio &amp; HIIT</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=running">Running &amp; Jogging</a>

                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=biking">Cycling &amp; Biking</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=walking">Walking &amp; Daily Steps</a>

                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=stretching">Mobility &amp; Stretching</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=swimming">Swimming &amp; Water Training</a>

                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=cross-training">Cross Training</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=fitness-wearables">Fitness Trackers &amp; Wearables</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" style="" src="assets/img/sports/fitness.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="sports-talk-central">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="explanation-image img-fluid" style="" src="assets/img/sports/sports-talk.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Sports Talk Central</strong></h2>
                        <p class="text-muted">Sports Talk Central is the main hub for sports fans in this Portal. Talk about games, trades, players, and storylines across any league — or just hang out and react in real time.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=sports-talk-central">Sports Talk Central</a>
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
