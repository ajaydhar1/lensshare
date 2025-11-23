<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    	<meta name="description" content="Your favorite songs and artists in one place. Listen to live radio."> 
        <meta name="author" content="<?= $site_name ?>" />
        
        <!-- Page title -->
        <title>iHeartRadio - Real-time radio broadcasts</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />
        
        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="iHeartRadio - <?= $site_name ?>" />
        <meta name="twitter:description" content="Your favorite songs and artists in one place. Listen to live radio." />
        <meta name="twitter:image" content="https://<?= $site_domain ?>/assets/img/entertainment/heart.jpg" />
        
        <meta property="og:url" content="https://<?= $site_domain ?>/iheartradio.php" />
        <meta property="og:title" content="iHeartRadio - <?= $site_name ?>" />
        <meta property="og:description" content="Your favorite songs and artists in one place. Listen to live radio." />
        <meta property="og:image" content="https://<?= $site_domain ?>/assets/img/entertainment/heart.jpg" />    
        <meta property="og:site_name" content="<?= $site_name ?>" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <?php /*<?php /* <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /> */ ?>
        
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">

        <!--
        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/img/angry.png">
        -->

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <style>       

            .footer small.not(.footer) {
              font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';     
            }
            
            h1, h2, h3, h4, h5, h6 {
                font-family: 'Saira Extra Condensed', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                font-weight: 700;
                text-transform: uppercase;
                color: #343a40;
            }

            .footer .small {
                font-family: Merriweather, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            }

            h2.title-indent {
                margin-left: 3rem!important;
            }

            h1 {
                font-size: 4rem;
            }

            h2 {
                font-size: 3.25rem;
            }

            body {      
                background-image: url(assets/img/entertainment/starry-bg-min.gif);
                background-size: cover;
                background-attachment: fixed;
            }

            @media screen and (max-width: 1300px) {
                body {
                    background-image: url(assets/img/entertainment/starry-bg-still.jpg);
                    background-attachment: unset;
                }
            }

            iframe {
                /*
                border: solid deeppink;
                border-radius: 8px;
                opacity: .95;
                */
                box-shadow: 0 0.15rem 2.35rem 0 white !important;
                overflow-y: hidden;
            }

            hr {
                height: 3px;
                background-color: white;
            }
            

        </style>

    </head>

    <body class="wide side-panel side-panel-static">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-secondary" href="index.php"><?= $site_name ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" href="entertainment.php">Entertainment</a></li>
                        <li class="nav-item"><a class="btn btn-primary text-white" style="margin-left: 0.65rem;" href="room.php?room=happy-hour">Happy Hour</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row justify-content-center mb-3 w-100" style="margin-top: 7.5rem !important;">
            <div class="col-lg-12 text-center">
                <img class="hi" src="assets/img/all/webcam7.gif">
                <img class="hi" src="assets/img/all/webcam2.gif">
                <img class="hi" src="assets/img/all/webcam4.gif">
                <img class="hi" src="assets/img/all/webcam6.gif">
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="container h-100">
                <div class="justify-content-center align-self-center text-center">
                    <h1 class="text-white">i<span style="color:red;">Heart</span>Radio</h1>
                    <h4 class="text-white">Live broadcast radio</h4>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-6 text-center">
                            <select class="custom-select" onChange="filter(this.value);">
                                <option value="title" selected>Genre</option>
                                <option value="rap">Rap</option>
                                <option value="pop">Pop</option>
                                <option value="rock">Rock</option>
                                <option value="sports">Sports</option>
                                <option value="news">News</option>
                            </select>
                        </div>
                    </div>
                    <br>
                </div>

                <h2 class="text-white text-right">Live Radio</h2>

                <h4 class="text-center text-warning">New York City</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-4 station rap">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/power-1051-1481/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station rap">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/hot-97-6046/?embed=true" frameborder="0"></iframe>
                    </div>
                    <?php /*
                    <div class="col-lg-4 station rock">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/rock-drive-7402/?embed=true" frameborder="0"></iframe>
                    </div>
                    */ ?>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/z100-1469/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">Los Angeles</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-4 station rap">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/power106-6045/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station rap">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/real-923-181/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/1027-kiis-fm-los-angeles-185/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>



                <h4 class="text-center text-warning mt-5">Chicago</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-4 station rap">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/1075-wgci-chicago-841/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/1035-kiss-fm-849/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station rock">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/rock-955-857/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>


                <h4 class="text-center text-warning mt-5">Atlanta</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-4 station rap">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/hot-1079-8936/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/power-961-741/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station rock">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/971-the-river-5886/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>
                
                <h4 class="text-center text-warning mt-5">Miami</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-4 station rap">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/99jamz-wedr-5903/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/hits-973-5906/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/y100-miami-1007fm-561/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">Albany</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/995-the-river-1433/?embed=true" frameborder="0" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station news">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/news-radio-1031-and-810-wgy-1413/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station rock">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/rock-nation-4443/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/power-973-729/?embed=true" frameborder="0" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station pop">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/kiss-1023-1421/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station rock">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/pyx-106-albany-1429/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-lg-12 station rap">
                        <iframe class="wo-player player" src="https://player.amperwave.net/7420?playerUrl=https%3A%2F%2Fhot991.com%2Flisten-live%2F" allow="autoplay" title="Listen Live" width="100%" height="600" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">Sports</h4>
                <div class="row justify-content-center">
                    <div class="col-lg-4 station sports">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/espn-radio-7903/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station sports">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/fox-sports-radio-4732/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station sports">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/sportsgrid-radio-network-7417/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">News</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-4 station news">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/nbc-news-radio-6043/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station news">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/fox-news-radio-8627/?embed=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-lg-4 station news">
                        <iframe allow="autoplay" width="100%" height="200" src="https://www.iheart.com/live/associated-press-radio-6986/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <hr>

                <h2 class="text-white text-right">Playlists</h2>

                <h4 class="text-center text-warning mt-5">Rap Reign Playlist</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station rap">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/playlist/rap-reign-312064750-PurSNURsazhXeGsH5tpvq5/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">iHeartRadio Leaderboard</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station pop">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/playlist/iheartradio-leaderboard-312064750-2AL8dU5D7GquY5KGTcNwUm/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">The New Hit list</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station pop">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/playlist/the-new-hit-list-312064750-RbisVGYJ9GmN5DDwGabFkf/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">Pop Top 40</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station pop">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/playlist/pop-top-40-312064750-GyZXToRd3rRqdcpVy8A6JW/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">Rock Top 40</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station rock">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/playlist/rock-top-40-312064750-NJCTNpPvjHrjdW92uGvRBG/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <!--
                <h4 class="text-center text-warning mt-5">Best of Bollywood</h4>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-12 station rock">
                    <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/playlist/bollywood-312064750-Khf5xi2S5KSkXqJTffKBcP/?embed=true" frameborder="0"></iframe>
                  </div>
                </div>
                -->
                <?php /*
                <h4 class="text-center text-warning mt-5">Best of Bollywood</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station pop">
                        <iframe src="https://www.boomplay.com/embed/28599686/COL" width="100%" height="600" frameborder="0"></iframe>
                    </div>
                </div>
                */ ?>

                <hr>

                <h2 class="text-white text-right">Podcasts</h2>

                <h4 class="text-center text-warning mt-5">The Megyn Kelly Show</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station news">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/podcast/269-the-megyn-kelly-show-71878122/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">On Purpose with Jay Shetty</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station news">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/podcast/1119-on-purpose-with-jay-shett-30589432/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>

                <h4 class="text-center text-warning mt-5">The Sean Hannity Show</h4>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 station news">
                        <iframe allow="autoplay" width="100%" height="300" src="https://www.iheart.com/podcast/51-the-sean-hannity-show-24392822/?embed=true" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once('___footer.php'); ?>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <?php /* <!-- SimpleLightbox plugin JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script> */ ?>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables/datatables-demo.js"></script>

        <script>

            function filter(keyword) {

              // show all
              if (keyword == "title") {
                $(".station").each(function() {
                  $(this).css("display","block");
                });
              }
              else {
                // hide components
                $(".station").each(function() {
                  if (!$(this).hasClass(keyword)) {
                    $(this).css("display","none");
                  }
                  else {
                    $(this).css("display","block");
                  }
                  
                });
              }

            }

          </script>

    </body>

</html>