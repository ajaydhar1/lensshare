<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Watch some of the most entertaining video gameplay, sports, music, and just chatting live streams from around the world.">
        <meta name="author" content="<?= $site_name ?>">
      
        <!-- Page title -->
        <title>Game Watch</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Game Watch - <?= $site_name ?>" />
        <meta name="twitter:description" content="Watch some of the most entertaining video gameplay, sports, music, and just chatting live streams." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/assets/img/entertainment/game-tournament.jpeg" />

        <meta property="og:url" content="https://<?= $site_domain ?>/game-watch.php" />
        <meta property="og:title" content="Game Watch - <?= $site_name ?>" />
        <meta property="og:description" content="Watch some of the most entertaining video gameplay, sports, music, and just chatting live streams." />
        <meta property="og:image" content="https://<?= $site_domain ?>/assets/img/entertainment/game-tournament.jpeg" />    
        <meta property="og:site_name" content="<?= $site_name ?>" />

        <!-- Font Awesome for all fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

        <!-- Bootstrap core CSS -->
        <?php //<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> ?>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

        <!-- Custom fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <?php //<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> ?>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <style>

            /* Twitch */

            #twitch-iframe {
                margin-top: 72px;
            }

            .splide__slide img {
                border-radius: 10px;
                height: 300px;
                object-fit: cover;
                width: 300px;
            }

            #twitch-slider {
                padding-top: 1.5rem !important;
            }

            @media (min-width: 768px) and (max-width: 1024px) {
                .splide__slide img {
                    border-radius: 10px;
                    height: 200px;
                    width: 200px;
                }

                .btn-xl {
                    padding: 1.5rem 2rem;
                }

                #twitch-slider {
                    margin-top: 1rem !important;
                }
            }

            @media (max-width: 767px) {
                .splide__slide img {
                    border-radius: 10px;
                    height: 100px;
                    width: 100px;
                }

                .btn-xl {
                    padding: 1.5rem 2rem;
                }

                #twitch-slider {
                    margin-top: .5rem !important;
                }
            }

            button#close-twitch {
              /* background-image: url(../img/after-effects.gif); */
            }

            button#random-channel {
                background-image: url(../img/cta-bg.gif);
            }

            .splide__list .splide__slide.text-center a p {
                position: absolute;
                bottom: 0;
                left: 10px;
                background: rgb(0,0,0);
                color: grey;
                /*
                color: aqua;
                */
            }

            .shadow-purple {
                box-shadow: rgb(0 0 255 / 34%) 0rem .15rem 2.3rem 18px;
            }

            .p-3.shadow-purple {
                border-radius: 10px;
            }

        </style>
      
    </head>

    <body>

        <main>

            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="index.php"><?= $site_name ?></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto my-2 my-lg-0">
                            <li class="nav-item my-auto"><a class="nav-link text-nav-dark" style="margin-right: 0.65rem;" href="entertainment.php">Entertainment</a></li>
                            <li class="nav-item"><a class="btn btn-primary text-white" href="https://video-lensshare.com/Happy%20Hour#config.disableDeepLinking=true">Happy Hour</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="document">
                <?php

                    require_once("___modules.php");

                    $twitch_arr = get_liveTwitchStreams();

                    $channel_ids = Array();
                    foreach ($twitch_arr["data"] as $stream) {
                        if ($stream["language"] == "en") {
                            array_push($channel_ids, $stream["user_name"]);
                        }
                    }

                    $first_channel_id = $channel_ids[array_rand($channel_ids)];

                    echo "<div id='twitch-frame' style=''><style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe id='twitch-iframe' src='https://player.twitch.tv/?channel=" . $first_channel_id . "&parent=";
                        
                    if(isset($_SERVER['HTTP_SEC_FETCH_DEST']) && $_SERVER['HTTP_SEC_FETCH_DEST'] == 'iframe' ) { echo 'www.' . $site_domain; } else { echo $site_domain; }

                    echo "&muted=true' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen onload='loadTwitchButtons();'></iframe></div></div>";

                      echo "
                          <div id='twitch-slider' class='row'>
                                <div class='col-12'>
                                    <div class='splide'>
                                        <div class='splide__track'>
                                            <ul class='splide__list'>";
                                                

                                foreach ($twitch_arr["data"] as $stream) {

                                  if ($stream["language"] == "en") {

                                    $thumbnail = str_replace("{width}", "1280", $stream['thumbnail_url']);
                                    $thumbnail = str_replace("{height}", "720", $thumbnail);

                                    echo "<li class='splide__slide text-center'><a href='javascript:void(0)' onclick='changeTwitchChannel(\"".$stream['user_name']."\");'><img src='".$thumbnail."' alt='twitch user'/><p>".$stream['user_name']."<br><span style='color:white;'>".$stream['game_name']."</span></p></a></li>";

                                  }

                                }
                                            
                                            

                      echo "

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>";


                ?>
            </section>
        </main>


        <!-- Footer -->
        <?php require_once("___footer.php"); ?>

        <audio id="sfx" src="assets/audio/sfx.mp3"></audio>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


        <script>

            // Twitch controls

            function changeChannel() {
                
            <?php

              $count = 0;
              $channels = 'channels = [';
              foreach ($twitch_arr["data"] as $stream) {

                if ($stream["language"] == "en") {
                  if ($count == 0) {
                    $channels = $channels . '"https://player.twitch.tv/?channel=' . $stream['user_name'] . '&parent=' . $site_domain . '&muted=true"';
                  }
                  else {
                    $channels = $channels . ', "https://player.twitch.tv/?channel=' . $stream['user_name'] . '&parent=' . $site_domain . '&muted=true"';
                  }
                  $count = $count + 1;
                }

              }

              $channels = $channels . '];';

              echo $channels;

            ?>

            random = Math.floor(Math.random() * channels.length);

            $('#twitch-iframe').attr('src', channels[random]);
                $("html, body").animate({ scrollTop: 0 }, "slow");
                
            }

            function changeTwitchChannel(name) {
                source = 'https://player.twitch.tv/?channel=' + name + '&parent=lensshare.co&muted=true'
                $('#twitch-iframe').attr('src', source);
                $("html, body").animate({ scrollTop: 0 }, "slow");
            }

            function loadTwitchButtons() {
                $('#twitch-buttons').html("<div class='col-12 text-center'><button id='random-channel' type='button' class='btn btn-primary btn-xl rounded-pill mt-3' onclick='changeChannel();'>Random Channel</button><button id='close-twitch' type='button' class='btn btn-dark btn-xl rounded-pill mt-3 ml-3' aria-label='Close'><span aria-hidden='true'>X</span></button></div>");
                
                $("#close-twitch").click(function () {
                    $('#twitch-frame').remove();
                    $('#twitch-slider').remove();
                    $('#twitch-buttons').remove();
                });

            }

            function closeTwitch() {
                $('#twitch-frame').remove();
                $('#twitch-slider').remove();
                $('#twitch-buttons').remove();
            }

            // ++++ Sound effects

            $('.splide__slide img').click(function(e) {
                var audio = document.getElementById("sfx");
                audio.volume = 0.1;
                playSFX();
            });

            $("#twitch-buttons").on("click", "button", function(event){
                var audio = document.getElementById("sfx");
                audio.volume = 0.3;
                playSFX();
            });

            function playSFX() {
                $("#sfx").get(0).currentTime=0;
                var playPromise = $("#sfx").get(0).play();

                // In browsers that don't yet support this functionality,
                // playPromise won't be defined.
                if (playPromise != undefined) {
                    playPromise.then(function() {
                        // automatic playback started!
                    }).catch(function(error) {
                        console.log(error);
                    })
                }
            }

        </script>


        <script>
            new Splide( ".splide", {
                type    : "loop",
                perPage : 4
            }).mount();
        </script>

    </body>

</html>
