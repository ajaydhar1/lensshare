<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="LensShare">

  <title>Game Distract - Gifs!</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
  
  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="css/animate.css">
  <script src="/js/wow.min.js"></script>
  <script src="/js/lazysizes.min.js" async></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script src='https://salesportal.aptaracorp.com/PPDI/POC/js/geometry/geometryangle.js'></script>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="/img/angry.png">

  <!-- Custom scripts for this template -->
  <script src="resume.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="/css/one-page-wonder.css" rel="stylesheet">
  <link href="/css/game-custom.css" rel="stylesheet">

  <style>

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

    h2 {
        font-size: 3.5rem;
    }

    a {
        color: #F54EA2;
    }



  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <?php 
    require_once("../../__modules.php");
    //require_once("../../__nav.php"); 
  ?>


  <div class="container-fluid">
    <div class="row h-100" style="margin-top: 5rem !important;">
        <div class="col-md-4 col-4">
            <h2 class="title-indent">Gifs!</h2>
        </div>
        <div class="col-md-4 col-4 align-self-center">
            <div style="text-align: center">
              <a href="gifs.php" class="navbar-brand <?php if(isset($_GET['q'])) echo 'text-muted'; ?>">Trending</a>
            </div>
        </div>
        <div class="col-md-4 align-self-center text-md-right">
            <form class="form-inline" action="gifs.php" style="float: right" method="get">
                <div class="input-group">
                    <input placeholder="Search..." type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" name="q">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit" id="button-addon2">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <hr>
  </div>

  <div class="container-fluid p-0">
    <section class="p-3 p-lg-5 d-flex justify-content-center" style="padding-top:0px!important;" id="bot-config">
      <div class="w-100">

        <h3>Popular Categories</h3>
        <div class="row mb-5">
          <div class="col-lg-2 col-md-4 col-4">
            <a href="#Actions" class="btn btn-primary hash-btn" style="box-shadow:none;">Actions</a>
          </div>
          <div class="col-lg-2 col-md-4 col-4">
            <a href="#Adjectives" class="btn btn-primary hash-btn" style="box-shadow:none;">Adjectives</a>
          </div>
          <div class="col-lg-2 col-md-4 col-4">
            <a href="#Animals" class="btn btn-primary hash-btn" style="box-shadow:none;">Animals</a>
          </div>
          <div class="col-lg-2 col-md-4 col-4">
            <a href="#Emotions" class="btn btn-primary hash-btn" style="box-shadow:none;">Emotions</a>
          </div>
          <div class="col-lg-2 col-md-4 col-4">
            <a href="#Reactions" class="btn btn-primary hash-btn" style="box-shadow:none;">Reactions</a>
          </div>
          <div class="col-lg-2 col-md-4 col-4">
            <a href="#Sports" class="btn btn-primary hash-btn" style="box-shadow:none;">Sports</a>
          </div>  
        </div>

        <h3 class="mt-5 text-pink">
          <?php
            if(isset($_GET['q'])) {
              echo $_GET['q'];
            }
            else {
              echo 'Trending';
            }
          ?>
        </h3>
        <div class="row text-center text-lg-left">

          <?php

          // Get gifs

          $url = '';

          if (isset($_GET['q'])) {
              $url = searchUrl(rawurlencode($_GET['q']));
          }
          else {
              $url = trendingUrl();
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
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=crying">#crying</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=dancing">#dancing</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=dreaming">#dreaming</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=fainting">#fainting</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=falling">#falling</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=flirting">#flirting</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=laughing">#laughing</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=pout">#pout</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=sleeping">#sleeping</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=smiling">#smiling</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=sneezing">#sneezing</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=waiting">#waiting</a>
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
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=bright">#bright</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=cold">#cold</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=cute">#cute</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=dark">#dark</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=funny">#funny</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=hot">#hot</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=scary">#scary</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=sexy">#sexy</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=slow+motion">#slow motion</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=trippy">#trippy</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=vintage">#vintage</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=weird">#weird</a>
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
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=bird">#bird</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=cat">#cat</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=dog">#dog</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=goat">#goat</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=hedgehog">#hedgehog</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=monkey">#monkey</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=otter">#otter</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=panda">#panda</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=penguin">#penguin</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=rabbit">#rabbit</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=sloth">#sloth</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=unicorn">#unicorn</a>
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
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=awkward">#awkward</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=bored">#bored</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=confused">#confused</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=drunk">#drunk</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=excited">#excited</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=frustrated">#frustrated</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=happy">#happy</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=hungry">#hungry</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=mind+blown">#mind blown</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=shocked">#shocked</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=suprised">#suprised</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=tired">#tired</a>
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
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=crying">#crying</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=eye+roll">#eye roll</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=high+five">#high five</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=huh">#huh</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=lol">#lol</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=no">#no</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=ok">#ok</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=sad">#sad</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=shrug">#shrug</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=thumbs+up">#thumbs up</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=um">#um</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=yes">#yes</a>
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
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=bird">#baseball</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=cat">#basketball</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=dog">#gymnastics</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=sloth">#mlb</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=rabbit">#nba</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=goat">#nfl</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=unicorn">#nhl</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=hedgehog">#skateboarding</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=monkey">#snowboarding</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=otter">#soccer</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=panda">#surfing</a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-6">
                        <a class="btn btn-primary hash-btn" href="gifs.php?q=penguin">#wrestling</a>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
      </div>

    </section>


  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <!--<script src="js/resume.min.js"></script>-->

  <script src="https://daemonite.github.io/material/js/material.min.js"></script>
  <script src="https://mimo84.github.io/bootstrap-maxlength/bower_components/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

</body>

</html>
