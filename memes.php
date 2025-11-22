<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("___google-analytics.php"); ?>

      <!-- Meta -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="Search and discover the most fun and popular gifs, memes, and stickers on the Internet." />
      <meta name="author" content="LensShare" />
      
      <!-- Page title -->
      <title>The Meme Factory - Enjoy discovering fun and playful animated gifs.</title>
      
      <!-- Favicon-->
      <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

      <!-- Twitter card and Open Graph-->
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="Memes - LensShare" />
      <meta name="twitter:description" content="Enjoy discovering fun and playful animated gifs." />
      <meta name="twitter:image" content="https://lensshare.co/assets/img/entertainment/meme-card.jpg" />
      
      <meta property="og:url" content="https://lensshare.co/memes.php" />
      <meta property="og:title" content="Memes - LensShare" />
      <meta property="og:description" content="Enjoy discovering fun and playful animated gifs." />
      <meta property="og:image" content="https://lensshare.co/assets/img/entertainment/meme-card.jpg" />    
      <meta property="og:site_name" content="LensShare" />

      <!-- Bootstrap Icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
      
      <!-- Custom fonts for this template -->
      <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
      <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet" />
      <link href="css/custom.css" rel="stylesheet" />

      <style>

          .row {
              margin-right: unset;
          }

          header.masthead {
              background: url("assets/img/homepage/bg-masthead-home.png");
              background-position: bottom
          }

          hr.divider {
              background-color: white;
          }

          .hash-btn {
              background-image: linear-gradient(-80deg,#FF7676,#F54EA2);
              color: #fff;
              letter-spacing: .01px;
              cursor: pointer;
              width: 9.5rem;
              max-width: 100%;
              border: 2px solid white;
          }

          /* Resume.css */

          .container-fluid {
              font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';     
          }
          
          h1, h2, h3 {
              font-family: 'Saira Extra Condensed', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
              font-weight: 700;
              text-transform: uppercase;
              color: #343a40;
          }

          h2.title-indent {
              margin-left: 3rem!important;
          }

          @media (max-width: 480px) {
              h2.title-indent {
                  margin-left: 0px !important;
              }
          }

          h1 {
              font-size: 4rem;
          }

          h2 {
              font-size: 3.25rem;
          }


          /* Gifs */

          #photos {
              /* Prevent vertical gaps */
              line-height: 0;
               
              -webkit-column-count: 5;
              -webkit-column-gap:   0px;
              -moz-column-count:    5;
              -moz-column-gap:      0px;
              column-count:         5;
              column-gap:           0px;
          }

          #photos img {
              /* Just in case there are inline attributes */
              width: 100% !important;
              height: auto !important;
          }

          @media (max-width: 1200px) {
              #photos {
                  -moz-column-count:    4;
                  -webkit-column-count: 4;
                  column-count:         4;
              }
          }
          @media (max-width: 1000px) {
              #photos {
                  -moz-column-count:    3;
                  -webkit-column-count: 3;
                  column-count:         3;
              }
          }
          @media (max-width: 800px) {
              #photos {
                  -moz-column-count:    2;
                  -webkit-column-count: 2;
                  column-count:         2;
              }
          }
          @media (max-width: 400px) {
              #photos {
                  -moz-column-count:    1;
                  -webkit-column-count: 1;
                  column-count:         1;
              }
          }


          @media(max-width: 1198px) {
              #hello {
                  margin-top: 5.5rem !important;
              }
          }

      </style>

  </head>
  <body id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
          <div class="container px-4 px-lg-5">
              <a class="navbar-brand" href="index.php">LensShare</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ms-auto my-2 my-lg-0">
                      <li class="nav-item my-auto"><a class="nav-link text-nav-dark" style="margin-right: 0.65rem;" href="entertainment.php">Entertainment</a></li>
                      <li class="nav-item"><a class="btn btn-primary text-white" href="https://video-lensshare.com/Happy%20Hour#config.disableDeepLinking=true">Happy Hour</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <div id="hello" class="row justify-content-center mb-4">
          <div class="col-lg-12 text-center">
              <img class="hi" src="assets/img/all/webcam7.gif">
              <img class="hi" src="assets/img/all/webcam2.gif">
              <img class="hi" src="assets/img/all/webcam4.gif">
              <img class="hi" src="assets/img/all/webcam6.gif">
          </div>
      </div>

      <?php require_once("___modules.php"); ?>


      <div class="container">
          <div class="row h-100 justify-content-center" style="">
              <div class="col-lg-7 col-md-8 col-10 text-center">
                  <h1 class=""><?php if (isset($_GET["stickers"])) {echo "Stickers!";} else { echo "Gifs!"; } ?></h1>
                  <form class="form-inline" action="memes.php" style="" method="get">
                      <div class="input-group">
                          <input placeholder="Search..." type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" id="q" name="q" value="<?php if(isset($_GET['q'])) {echo $_GET['q'];} else {echo 'unicorn';} ?>">
                          <div class="input-group-append">
                              <button class="btn btn-dark" type="submit">Gifs</button>
                              <button class="btn btn-warning" type="button" onclick="searchStickers();">Stickers</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
  
          <hr>
      </div>

      <div class="container p-4">
          <section class="p-3 p-lg-5 d-flex justify-content-center" style="padding-top:0px!important;padding-bottom: .6rem !important;" id="bot-config">
              <div class="w-100">

                  <h3 class="text-center">Popular Categories</h3>
                  <div class="row mb-5">
                      <div class="col-lg-2 col-md-4 col-6">
                          <a href="#Actions" class="btn btn-primary hash-btn" style="box-shadow:none;">Actions</a>
                      </div>
                      <div class="col-lg-2 col-md-4 col-6">
                          <a href="#Adjectives" class="btn btn-primary hash-btn" style="box-shadow:none;">Adjectives</a>
                      </div>
                      <div class="col-lg-2 col-md-4 col-6">
                          <a href="#Animals" class="btn btn-primary hash-btn" style="box-shadow:none;">Animals</a>
                      </div>
                      <div class="col-lg-2 col-md-4 col-6">
                          <a href="#Emotions" class="btn btn-primary hash-btn" style="box-shadow:none;">Emotions</a>
                      </div>
                      <div class="col-lg-2 col-md-4 col-6">
                          <a href="#Reactions" class="btn btn-primary hash-btn" style="box-shadow:none;">Reactions</a>
                      </div>
                      <div class="col-lg-2 col-md-4 col-6">
                          <a href="#Sports" class="btn btn-primary hash-btn" style="box-shadow:none;">Sports</a>
                      </div>  
                  </div>

                  <h2 class="mt-5">Now Showing:&nbsp;<span class="text-pink">
                  <?php
                      if(isset($_GET['q'])) {
                          echo $_GET['q'];
                      }
                      else {
                          echo 'Unicorn';
                      }
                  ?>
                  </span></h2>
      

                  <div class="row text-center text-lg-left">

                  <?php

                  // Get gifs

                  $url = '';

                  if (isset($_GET['q']) && isset($_GET['stickers'])) {
                      $url = searchStickerUrl(rawurlencode($_GET['q']));
                  }
                  else if (isset($_GET['q'])) {
                     $url = searchUrl(rawurlencode($_GET['q']));
                  }
                  else {
                      //$url = trendingUrl();
                        $url = searchUrl("unicorn");
                  }

                  $giphy_data = basic_getData($url);

                  ?>

                  </div>

              </div>
          </section>

          <section id="photos">

              <?php

                  $count = 0;

                  foreach ($giphy_data['data'] as $key) {
                      if ($count>50) {
                          break;
                      }

                      echo '<img class="img-fluid img-thumbnail" src="'.$key['images']['original']['url'].'" alt="" style="border:none !important;">';

                      $count++;

                  }

              ?>

          </section>

          <section class="p-3 p-lg-5 d-flex justify-content-center" style="padding-top:0px!important;">
              <div>
                  <hr/>
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card gedf-card mb-3">
                              <div class="card-header" style="background-color:white;">
                                  <h3 id="Actions">Actions</h3>
                              </div>   
                              <div class="card-body" style="background-color:white;">
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=crying">#crying</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=dancing">#dancing</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=dreaming">#dreaming</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=fainting">#fainting</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=falling">#falling</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=flirting">#flirting</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=laughing">#laughing</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=pout">#pout</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=sleeping">#sleeping</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=smiling">#smiling</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=sneezing">#sneezing</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=waiting">#waiting</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card gedf-card mb-3">
                              <div class="card-header" style="background-color:white;">
                                  <h3 id="Adjectives">Adjectives</h3>
                              </div>   
                              <div class="card-body" style="background-color:white;">
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=bright">#bright</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=cold">#cold</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=cute">#cute</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=dark">#dark</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=funny">#funny</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=hot">#hot</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=scary">#scary</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=sexy">#sexy</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=slow+motion">#slow motion</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=trippy">#trippy</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=vintage">#vintage</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=weird">#weird</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card gedf-card mb-3">
                              <div class="card-header" style="background-color:white;">
                                  <h3 id="Animals">Animals</h3>
                              </div>   
                              <div class="card-body" style="background-color:white;">
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=bird">#bird</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=cat">#cat</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=dog">#dog</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=goat">#goat</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=hedgehog">#hedgehog</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=monkey">#monkey</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=otter">#otter</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=panda">#panda</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=penguin">#penguin</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=rabbit">#rabbit</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=sloth">#sloth</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=unicorn">#unicorn</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card gedf-card mb-3">
                              <div class="card-header" style="background-color:white;">
                                  <h3 id="Emotions">Emotions</h3>
                              </div>   
                              <div class="card-body" style="background-color:white;">
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=awkward">#awkward</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=bored">#bored</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=confused">#confused</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=drunk">#drunk</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=excited">#excited</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=frustrated">#frustrated</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=happy">#happy</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=hungry">#hungry</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=mind+blown">#mind blown</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=shocked">#shocked</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=suprised">#suprised</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=tired">#tired</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
      
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card gedf-card mb-3">
                                <div class="card-header" style="background-color:white;">
                                    <h3 id="Reactions">Reactions</h3>
                                </div>   
                                <div class="card-body" style="background-color:white;">
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=crying">#crying</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=eye+roll">#eye roll</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=high+five">#high five</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=huh">#huh</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=lol">#lol</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=no">#no</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=ok">#ok</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=sad">#sad</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=shrug">#shrug</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=thumbs+up">#thumbs up</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=um">#um</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=yes">#yes</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card gedf-card mb-3">
                              <div class="card-header" style="background-color:white;">
                                  <h3 id="Sports">Sports</h3>
                              </div>   
                              <div class="card-body" style="background-color:white;">
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=baseball">#baseball</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=basketball">#basketball</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=gymnastics">#gymnastics</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=mlb">#mlb</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=nba">#nba</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=nfl">#nfl</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=nhl">#nhl</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=skateboarding">#skateboarding</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=snowboarding">#snowboarding</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=soccer">#soccer</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=surfing">#surfing</a>
                                      </div>
                                      <div class="col-lg-4 col-md-4 col-6">
                                          <a class="btn btn-primary hash-btn" href="memes.php?q=wrestling">#wrestling</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </section>
        </div>

        <?php require_once('___footer.php'); ?>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>

            function searchStickers() {
                keyword = $("#q").val();
                if (keyword != "" && keyword != null) {
                    location.href = "memes.php?q=" + encodeURIComponent(keyword) + "&stickers=true"
                }
            }

        </script>
    </body>
</html>
