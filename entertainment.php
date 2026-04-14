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

        <link rel="preconnect" href="https://player.twitch.tv">
        <link rel="preconnect" href="https://static.twitchcdn.net">
        <link rel="preconnect" href="https://embed.twitch.tv">
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <link rel="preload" as="image" href="assets/img/entertainment/bg-masthead-entertainment.png">
        <link rel="preload" as="image" href="assets/img/all/webcam7.gif">
        <link rel="preload" as="image" href="assets/img/all/webcam2.gif">
        <link rel="preload" as="image" href="assets/img/all/webcam4.gif">
        <link rel="preload" as="image" href="assets/img/all/webcam6.gif">

        <style>

            header.masthead {
                background: url(assets/img/entertainment/bg-masthead-entertainment.png);
                background-position: bottom;
                margin-top: -7rem;
            }

            hr.divider {
                background-color: #ffc107;
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
                        <li class="nav-item my-auto"><a class="nav-link" href="#watch-party">Watch Party Central</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#media">Media</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#memes">Memes</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#games">Game Watch</a></li>
                        
                        <!-- New: Explore icon/link -->
                        <li class="nav-item my-auto">
                            <a class="nav-link d-flex align-items-center" href="explore.php">
                                <span class="me-1">🧭</span>
                                <span>Explore</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary text-white ms-lg-2" href="room.php?room=happy-hour">
                                Happy Hour
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5">
                <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
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
                        <img class="hi" src="assets/img/all/webcam7.gif" alt="" aria-hidden="true">
                        <img class="hi" src="assets/img/all/webcam2.gif" alt="" aria-hidden="true">
                        <img class="hi" src="assets/img/all/webcam4.gif" alt="" aria-hidden="true">
                        <img class="hi" src="assets/img/all/webcam6.gif" alt="" aria-hidden="true">
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-6 text-center">
                        <a class="btn btn-dark btn-xl mb-2" href="#watch-party">Explore Portal</a>
                        <a class="btn btn-secondary btn-xl" href="room.php?room=watch-party-central">Join Watch Party Central</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Watch Party -->
        <section class="page-section text-dark" id="watch-party">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Watch Party Central</strong></h2>
                        <p class="text-muted">The main hangout in the Entertainment Portal. Jump in to watch clips, react to trailers, talk about shows, share music videos, or just vibe with people watching the same thing.</p>
                        <div class="mt-4">
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=watch-party-central">Watch Party Central</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <img class="explanation-image img-fluid" src="assets/img/entertainment/watch-party.gif" alt="A visual slideshow on an LCD TV">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Mass Media -->
        <section class="page-section bg-light text-dark" id="media">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="explanation-image img-fluid" src="assets/img/entertainment/spiderman.gif" alt="A glitching image of Spiderman's mask">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Mass Media</strong></h2>
                        <p class="text-muted">Discuss the latest hit projects from your favorite creators across film, TV, streaming, and more.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=trending-releases">Trending Releases</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=movies-film">Movies &amp; Film Talk</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=music-artists">Music &amp; Artists</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=tv-streaming">TV &amp; Streaming</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=books-literature">Books &amp; Literature</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=art-creativity">Art &amp; Creativity</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=celebrities-pop">Celebrities &amp; Pop Culture</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- I Heart Radio-->
        <section class="page-section text-dark" id="iheartradio">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>iHeartRadio</strong></h2>
                        <p class="text-muted">Listen to top radio stations from across the U.S., including NYC, Chicago, LA, Miami, and more.</p>
                        <div class="mt-3">
                            <a class="btn btn-danger btn-xl mb-3" href="iheartradio.php">Listen Now - iHeartRadio</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <img class="explanation-image" style="height: 370px; width: auto;" src="assets/img/entertainment/heart.gif" alt="A 3D heart-eyes emoji">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- The Meme Factory -->
        <section class="page-section bg-light text-dark" id="memes">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="meme-image img-fluid shadow" src="assets/img/entertainment/memes.gif" alt="A meme of a girl with a wow expression on her face">
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
        <!-- Game Watch -->
        <section class="page-section text-dark" id="games">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Game Watch</strong></h2>
                        <p class="text-muted">Watch some of the most entertaining gameplay, sports, music, and “just chatting” live streams from around the world.</p><div class="mt-3">
                            <a class="btn btn-dark btn-xl mb-3" href="game-watch.php">Game Watch</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
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
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Games & Play -->
        <section class="page-section bg-light text-dark" id="games">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Games &amp; Play</strong></h2>
                        <p class="text-muted">
                            Join a Games Room to talk strategy, builds, deck ideas, and iconic moments. 
                            Whether you’re into competitive online titles, legendary RPGs, or cult-favorite 
                            card games, these Spaces are perfect for meeting players who share your passion.
                        </p>
                        <div class="mt-4">

                            <!-- Video Game Staples -->
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=fortnite">Fortnite</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=call-of-duty">Call of Duty</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=league-of-legends">League of Legends</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=zelda">Zelda</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=minecraft">Minecraft</a>

                            <!-- Tabletop & Card Games -->
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=magic-the-gathering">Magic: The Gathering</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=pokemon-tcg">Pokémon TCG</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=dnd">Dungeons &amp; Dragons (D&amp;D)</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=catan">Catan</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=chess">Chess Masters</a>

                            <!-- Retro & Party -->
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=mario">Mario Fans</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=retro-games">Retro Classics</a>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <img class="explanation-image img-fluid" 
                             src="assets/img/entertainment/gaming.gif" 
                             alt="A cool layered video game graphic">
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid bg-light d-flex" style="padding: 0; margin: 0;">
            <img class="img-fluid mx-auto" src="assets/img/entertainment/party.gif">
        </div>
        
        <?php require_once("___holodeck.php"); ?>
        
        <?php require_once("___footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables/datatables-demo.js"></script>

    </body>
</html>
