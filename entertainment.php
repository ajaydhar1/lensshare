<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="This Portal is to chat and immerse yourself in the latest media and entertainment." />
        <meta name="author" content="<?= $site_name ?>" />
        
        <!-- Page title -->
        <title>Entertainment - Chat and immerse yourself in the latest media and entertainment.</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Entertainment - <?= $site_name ?>" />
        <meta name="twitter:description" content="Chat and immerse yourself in the latest media and entertainment." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/assets/img/entertainment/bg-masthead-entertainment.png" />
        
        <meta property="og:url" content="https://<?= $site_domain ?>/entertainment.php" />
        <meta property="og:title" content="Entertainment - <?= $site_name ?>" />
        <meta property="og:description" content="Chat and immerse yourself in the latest media and entertainment." />
        <meta property="og:image" content="https://<?= $site_domain ?>/assets/img/entertainment/bg-masthead-entertainment.png" />    
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
                <a class="navbar-brand" href="index.php"><?= $site_name ?></a>
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
                        <p class="mb-3">This Portal is to chat and immerse yourself in the latest media and entertainment.</p>
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
                        <a class="btn btn-dark btn-xl" href="#media">Explore Portal</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Call to action-->
        <section class="page-section text-dark" id="media">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-left">
                        <img class="explanation-image img-fluid" style="" src="assets/img/entertainment/spiderman.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Mass Media</strong></h2>
                        <p class="text-muted">Discuss the latest hit and indie projects from some of the best creators in the entertainment industry.</p>
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
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="iheartradio">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>iHeartRadio</strong></h2>
                        <p class="text-muted">Listen to the most popular radio stations in America, including broadcasts from NYC, Chi-town, LA, Miami, and more.</p>
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
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="memes">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-left">
                        <img class="meme-image img-fluid shadow" style="" src="assets/img/entertainment/memes.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>The Meme Factory</strong></h2>
                        <p class="text-muted">Enter the Meme Factory to find some crazy animated gifs and stickers for you to enjoy and share with your friends.</p>
                         <div class="mt-3">
                            <a class="btn btn-dark btn-xl mb-3" href="memes.php">Meme Factory</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="games">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Game Watch</strong></h2>
                        <p class="text-muted">Watch some of the most entertaining video gameplay, sports, music, and just chatting live streams from around the world.</p><div class="mt-3">
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
