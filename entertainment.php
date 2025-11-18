<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Explore Entertainment Rooms where you can talk movies, TV, music, memes, live streams, and everything happening in pop culture." />
        <meta name="author" content="LensShare" />

        <!-- Page title -->
        <title>Entertainment Rooms — Talk Movies, TV, Music & More | LensShare</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Entertainment Rooms — LensShare" />
        <meta name="twitter:description" content="Join Entertainment Rooms to chat about shows, movies, music, memes, live streams, and the latest in pop culture." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/entertainment/bg-masthead-entertainment.png" />

        <meta property="og:url" content="https://lensshare.co/entertainment.php" />
        <meta property="og:title" content="Entertainment Rooms — LensShare" />
        <meta property="og:description" content="Join Entertainment Rooms to chat about shows, movies, music, memes, live streams, and the latest in pop culture." />
        <meta property="og:image" content="https://lensshare.co/assets/img/entertainment/bg-masthead-entertainment.png" />
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
                background: url(assets/img/entertainment/bg-masthead-entertainment.png);
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
                background-color: #ffc107;
                opacity: 1;
            }

            .meme-image {
                height: 375px;
                border-radius: 20px;
                object-fit: cover;
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
                        <li class="nav-item my-auto"><a class="nav-link" href="#media">Media</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#iheartradio">iHeartRadio</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#memes">Memes</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#games">Game Watch</a></li>
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
                        <h1 class="text-white font-weight-bold"><strong>Entertainment</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="mb-3">This Portal is for chatting about and immersing yourself in the latest media, shows, music, and entertainment.</p>
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
                        <a class="btn btn-dark btn-xl mb-2" href="#media">Explore Portal</a>
                        <a class="btn btn-secondary btn-xl" style="" href="room.php?room=watch-party-central">Join Watch Party Central</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Call to action-->
        <section class="page-section text-dark" id="media">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Watch Party Central</strong></h2>
                        <p class="text-muted">The main hangout in the Entertainment Portal. Jump in to watch clips, react to trailers, talk about shows, share music videos, or just vibe with people watching the same thing.</p>
                        <div class="mt-4">
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=watch-party-central">Watch Party Central</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="explanation-image img-fluid" style="" src="assets/img/entertainment/watch-party.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="media">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-left">
                        <img class="explanation-image img-fluid" style="" src="assets/img/entertainment/spiderman.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Mass Media</strong></h2>
                        <p class="text-muted">Discuss the latest hit projects from your favorite creators across film, TV, streaming, and more.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=latest-projects">Latest Projects</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=films">Films</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=music">Music</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=tv">TV</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=books">Books</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=art">Art</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=celebrities">Celebrities</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="iheartradio">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>iHeartRadio</strong></h2>
                        <p class="text-muted">Listen to top radio stations from across the U.S., including NYC, Chicago, LA, Miami, and more.</p>
                        <div class="mt-3">
                            <a class="btn btn-danger btn-xl mb-3" href="iheartradio.php">iHeartRadio</a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <img class="explanation-image mx-auto" style="height: 370px; width: auto;" src="assets/img/entertainment/heart.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="memes">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-left">
                        <img class="meme-image img-fluid shadow" style="" src="assets/img/entertainment/memes.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>The Meme Factory</strong></h2>
                        <p class="text-muted">Enter the Meme Factory to discover wild GIFs and stickers you can enjoy, react with, and share with friends.</p>
                         <div class="mt-3">
                            <a class="btn btn-dark btn-xl mb-3" href="memes.php">Meme Factory</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="games">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Game Watch</strong></h2>
                        <p class="text-muted">Watch some of the most entertaining gameplay, sports, music, and “just chatting” live streams from around the world.</p><div class="mt-3">
                            <a class="btn btn-dark btn-xl mb-3" href="game-watch.php">Game Watch</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php

                            require_once("___modules.php");

                            $twitch_arr = get_liveTwitchStreams();

                            $channel_ids = Array();
                            foreach ($twitch_arr["data"] as $stream) {
                                if ($stream["language"] == "en") {
                                    array_push($channel_ids, $stream["user_name"]);
                                }
                            }

                            $first_channel_id = $channel_ids[0];

                            echo "
                                <style>.twitch-embed-container { 
                                          position: relative; 
                                          padding-bottom: 56.25%;
                                          height: 0;
                                          overflow: hidden;
                                          max-width: 100%;
                                          height: auto;
                                        } 
                                        .twitch-embed-container iframe, .twitch-embed-container object, .twitch-embed-container embed {
                                          position: absolute;
                                          top: 0;
                                          left: 0;
                                          width: 100%;
                                          height: 100%;
                                        }
                                </style>
                                <div id='twitch-home' class='row justify-content-center' style='padding:0;margin:0;'>
                                  <div class='col-lg-10' style='padding:0;margin:0;'>
                                        <div class='twitch-embed-container shadow'><iframe src='https://player.twitch.tv/?channel=" . $first_channel_id . "&parent=".$site_domain."&muted=true' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                        </div>
                                  </div>
                                </div>";
                        ?>

                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid d-flex" style="padding: 0; margin: 0;">
            <img class="img-fluid mx-auto" src="assets/img/entertainment/party.gif">
        </div>
        
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
