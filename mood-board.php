<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("___google-analytics.php"); ?>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Find humor in memes related to negative emotions you may be feeling and learn to lighten' up.">
		<meta name="author" content="LensShare">

		<!-- Page title -->
		<title>Mood Board – LensShare</title>

		<!-- Favicon-->
		<link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

		<!-- Twitter card and Open Graph-->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="Mood Board - LensShare" />
		<meta name="twitter:description" content="Find humor in memes related to negative emotions you may be feeling." />
		<meta name="twitter:image" content="https://lensshare.co/assets/img/health/cat-moods.jpg" />

		<meta property="og:url" content="https://lensshare.co/mood-board.php" />
		<meta property="og:title" content="Mood Board - LensShare" />
		<meta property="og:description" content="Find humor in memes related to negative emotions you may be feeling." />
		<meta property="og:image" content="https://lensshare.co/assets/img/health/cat-moods.jpg" />    
		<meta property="og:site_name" content="LensShare" />

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

		<!-- Custom styles -->
		<link href="css/mood-board/game.css" rel="stylesheet">
		<link href="css/mood-board/game-custom.css" rel="stylesheet">

		<!-- Bootstrap core JavaScript -->
		<?php //<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> ?>

		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="css/styles.css" rel="stylesheet" />
		<link href="css/custom.css" rel="stylesheet" />

		<style>

			h2 {
				font-size: 2em;
			}	

			h3, .h3 {
				font-size: 1.5rem;
			}

			body {
				font-size: 1rem;
			}

			body,
			body a.strong-link,
			body a.medium-link,
			body a.light-link {	  	
				cursor: url(assets/img/health/small-pointer.png), auto !important;
			}

			body a.strong-link:hover {
				color: black;
			}

			.footer .small,
			.footer .small a {
		        font-family: Merriweather, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
		    }

		    @media(max-width: 575px) {
				a.light-link {
				    color: black;
				}
			}
	  
	  	</style>
	  
	</head>

	<body>
	  	<main>
	  		<!-- Navigation-->
		    <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
		        <div class="container px-4 px-lg-5">
		            <a class="navbar-brand" href="index.php">LensShare</a>
		            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		            <div class="collapse navbar-collapse" id="navbarResponsive">
		                <ul class="navbar-nav ms-auto my-2 my-lg-0">
		                    <li class="nav-item my-auto"><a class="nav-link text-nav-dark" style="margin-right: 0.65rem;" href="health.php">Health & Wellness</a></li>
		                    <li class="nav-item"><a class="btn btn-primary text-white" href="https://video-lensshare.com/Happy%20Hour#config.disableDeepLinking=true">Happy Hour</a></li>
		                </ul>
		            </div>
		        </div>
		    </nav>

			<section class="document">
				<div class="container">

					<h1 id="category" class="text-center mb-3" style="display: block; margin-top: 40px; font-size: 3.75rem;">The Mood Board</h1>
					<p style="font-size: 1.2rem;">Our <strong style="color: orangered;">mood board</strong> is a big list of emotions that are organized into our 8 categories, and then grouped by their strength.</p>
					<p style="font-size: 1.2rem;"><strong>Hover over an emotion, or click on one, to see a pop up of what it means.</strong> Become <strong style="color: orangered;">emotionally aware</strong> and <strong style="color: orangered;">emotionally literate</strong> by finding out exactly how you feel.</p>
					<h3>Some people find that watching memes of people feeling the same way as them is theraputic and brings much needed relief. It's like a coping mechanism. If this helps you, we've got you covered! Click the same emotion again and again to see different memes for how you're feeling.</h3>

				 	<h2 class="text-center mt-5 mb-3" style=""><i style="color: orangered;" class="fas fa-angry fa-2x"></i> Annoyed</h2>
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Abused</a><br>
							<a class="strong-link" href="javascript:void(0);">Aching</a><br>
							<a class="strong-link" href="javascript:void(0);">Anguished</a><br>
							<a class="strong-link" href="javascript:void(0);">Crushed</a><br>
							<a class="strong-link" href="javascript:void(0);">Degraded</a><br>
							<a class="strong-link" href="javascript:void(0);">Destroyed</a><br>
							<a class="strong-link" href="javascript:void(0);">Devastated</a><br>
							<a class="strong-link" href="javascript:void(0);">Discarded</a><br>
							<a class="strong-link" href="javascript:void(0);">Disgraced</a><br>
							<a class="strong-link" href="javascript:void(0);">Forsaken</a><br>
							<a class="strong-link" href="javascript:void(0);">Humiliated</a><br>
							<a class="strong-link" href="javascript:void(0);">Mocked</a><br>
							<a class="strong-link" href="javascript:void(0);">Punished</a><br>
							<a class="strong-link" href="javascript:void(0);">Rejected</a><br>
							<a class="strong-link" href="javascript:void(0);">Ridiculed</a><br>
							<a class="strong-link" href="javascript:void(0);">Ruined</a><br>
							<a class="strong-link" href="javascript:void(0);">Scorned</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Belittled</a><br>
							<a class="medium-link" href="javascript:void(0);">Cheapened</a><br>
							<a class="medium-link" href="javascript:void(0);">Criticized</a><br>
							<a class="medium-link" href="javascript:void(0);">Damaged</a><br>
							<a class="medium-link" href="javascript:void(0);">Depreciated</a><br>
							<a class="medium-link" href="javascript:void(0);">Devalued</a><br>
							<a class="medium-link" href="javascript:void(0);">Discredited</a><br>
							<a class="medium-link" href="javascript:void(0);">Distressed</a><br>
							<a class="medium-link" href="javascript:void(0);">Impaired</a><br>
							<a class="medium-link" href="javascript:void(0);">Injured</a><br>
							<a class="medium-link" href="javascript:void(0);">Maligned</a><br>
							<a class="medium-link" href="javascript:void(0);">Marred</a><br>
							<a class="medium-link" href="javascript:void(0);">Miffed</a><br>
							<a class="medium-link" href="javascript:void(0);">Mistreated</a><br>
							<a class="medium-link" href="javascript:void(0);">Resentful</a><br>
							<a class="medium-link" href="javascript:void(0);">Tortured</a><br>
							<a class="medium-link" href="javascript:void(0);">Troubled</a><br>
							<a class="medium-link" href="javascript:void(0);">Wounded</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Annoyed</a><br>
							<a class="light-link" href="javascript:void(0);">Minimized</a><br>
							<a class="light-link" href="javascript:void(0);">Neglected</a><br>
							<a class="light-link" href="javascript:void(0);">Rueful</a><br>
							<a class="light-link" href="javascript:void(0);">Tender</a><br>
							<a class="light-link" href="javascript:void(0);">Touched</a><br>
							<a class="light-link" href="javascript:void(0);">Unhappy</a><br>
							<a class="light-link" href="javascript:void(0);">Used</a><br>
						</div>
					</div>


					<h2 class="text-center mb-3"><i style="color: orangered;" class="fas fa-flushed fa-2x"></i> Bored</h2>
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Fatigued</a><br>
							<a class="strong-link" href="javascript:void(0);">Jaded</a><br>
							<a class="strong-link" href="javascript:void(0);">Listless</a><br>
							<a class="strong-link" href="javascript:void(0);">Overtired</a><br>
							<a class="strong-link" href="javascript:void(0);">Spiritless</a><br>
							<a class="strong-link" href="javascript:void(0);">Turned off</a><br>
							<a class="strong-link" href="javascript:void(0);">Weary</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Bored</a><br>
							<a class="medium-link" href="javascript:void(0);">Disinterested</a><br>
							<a class="medium-link" href="javascript:void(0);">Inattentive</a><br>
							<a class="medium-link" href="javascript:void(0);">Lackadaisical</a><br>
							<a class="medium-link" href="javascript:void(0);">Stale</a><br>
							<a class="medium-link" href="javascript:void(0);">Tired</a><br>
							<a class="medium-link" href="javascript:void(0);">Withdrawn</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Aloof</a><br>
							<a class="light-link" href="javascript:void(0);">Blase</a><br>
							<a class="light-link" href="javascript:void(0);">Dull</a><br>
							<a class="light-link" href="javascript:void(0);">Impartial</a><br>
							<a class="light-link" href="javascript:void(0);">Indifferent</a><br>
							<a class="light-link" href="javascript:void(0);">Neutral</a><br>
							<a class="light-link" href="javascript:void(0);">Unbiased</a><br>
							<a class="light-link" href="javascript:void(0);">Uncurious</a><br>
						</div>
					</div>

					<h2 class="text-center mb-3"><i style="color: orangered;" class="fas fa-frown-open fa-2x"></i> Anxious</h2>
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Appalled</a><br>
							<a class="strong-link" href="javascript:void(0);">Desperate</a><br>
							<a class="strong-link" href="javascript:void(0);">Distressed</a><br>
							<a class="strong-link" href="javascript:void(0);">Frightened</a><br>
							<a class="strong-link" href="javascript:void(0);">Horrified</a><br>
							<a class="strong-link" href="javascript:void(0);">Intimidated</a><br>
							<a class="strong-link" href="javascript:void(0);">Panicky</a><br>
							<a class="strong-link" href="javascript:void(0);">Paralyzed</a><br>
							<a class="strong-link" href="javascript:void(0);">Petrified</a><br>
							<a class="strong-link" href="javascript:void(0);">Shocked</a><br>
							<a class="strong-link" href="javascript:void(0);">Terrified</a><br>
							<a class="strong-link" href="javascript:void(0);">Terror-stricken</a><br>
							<a class="strong-link" href="javascript:void(0);">Wrecked</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Afraid</a><br>
							<a class="medium-link" href="javascript:void(0);">Alarmed</a><br>
							<a class="medium-link" href="javascript:void(0);">Apprehensive</a><br>
							<a class="medium-link" href="javascript:void(0);">Awkward</a><br>
							<a class="medium-link" href="javascript:void(0);">Defensive</a><br>
							<a class="medium-link" href="javascript:void(0);">Fearful</a><br>
							<a class="medium-link" href="javascript:void(0);">Fidgety</a><br>
							<a class="medium-link" href="javascript:void(0);">Fretful</a><br>
							<a class="medium-link" href="javascript:void(0);">Jumpy</a><br>
							<a class="medium-link" href="javascript:void(0);">Nervous</a><br>
							<a class="medium-link" href="javascript:void(0);">Scared</a><br>
							<a class="medium-link" href="javascript:void(0);">Shaky</a><br>
							<a class="medium-link" href="javascript:void(0);">Skittish</a><br>
							<a class="medium-link" href="javascript:void(0);">Spineless</a><br>
							<a class="medium-link" href="javascript:void(0);">Taut</a><br>
							<a class="medium-link" href="javascript:void(0);">Threatened</a><br>
							<a class="medium-link" href="javascript:void(0);">Troubled</a><br>
							<a class="medium-link" href="javascript:void(0);">Wired</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Anxious</a><br>
							<a class="light-link" href="javascript:void(0);">Careful</a><br>
							<a class="light-link" href="javascript:void(0);">Cautious</a><br>
							<a class="light-link" href="javascript:void(0);">Disquieted</a><br>
							<a class="light-link" href="javascript:void(0);">Shy</a><br>
							<a class="light-link" href="javascript:void(0);">Tense</a><br>
							<a class="light-link" href="javascript:void(0);">Timid</a><br>
							<a class="light-link" href="javascript:void(0);">Uneasy</a><br>
							<a class="light-link" href="javascript:void(0);">Unsure</a><br>
							<a class="light-link" href="javascript:void(0);">Watchful</a><br>
							<a class="light-link" href="javascript:void(0);">Worried</a><br>
						</div>
					</div>

					<h2 class="text-center mb-3"><i style="color: orangered;" class="fas fa-sad-tear fa-2x"></i> Depressed</h2>
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Alienated</a><br>
							<a class="strong-link" href="javascript:void(0);">Barren</a><br>
							<a class="strong-link" href="javascript:void(0);">Beaten</a><br>
							<a class="strong-link" href="javascript:void(0);">Bleak</a><br>
							<a class="strong-link" href="javascript:void(0);">Dejected</a><br>
							<a class="strong-link" href="javascript:void(0);">Depressed</a><br>
							<a class="strong-link" href="javascript:void(0);">Desolate</a><br>
							<a class="strong-link" href="javascript:void(0);">Despondent</a><br>
							<a class="strong-link" href="javascript:void(0);">Dismal</a><br>
							<a class="strong-link" href="javascript:void(0);">Empty</a><br>
							<a class="strong-link" href="javascript:void(0);">Gloomy</a><br>
							<a class="strong-link" href="javascript:void(0);">Grieved</a><br>
							<a class="strong-link" href="javascript:void(0);">Grim</a><br>
							<a class="strong-link" href="javascript:void(0);">Hopeless</a><br>
							<a class="strong-link" href="javascript:void(0);">Woeful</a><br>
							<a class="strong-link" href="javascript:void(0);">Worried</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Awful</a><br>
							<a class="medium-link" href="javascript:void(0);">Blue</a><br>
							<a class="medium-link" href="javascript:void(0);">Crestfallen</a><br>
							<a class="medium-link" href="javascript:void(0);">Demoralized</a><br>
							<a class="medium-link" href="javascript:void(0);">Devalued</a><br>
							<a class="medium-link" href="javascript:void(0);">Discouraged</a><br>
							<a class="medium-link" href="javascript:void(0);">Dispirited</a><br>
							<a class="medium-link" href="javascript:void(0);">Distressed</a><br>
							<a class="medium-link" href="javascript:void(0);">Downcast</a><br>
							<a class="medium-link" href="javascript:void(0);">Downhearted</a><br>
							<a class="medium-link" href="javascript:void(0);">Lost</a><br>
							<a class="medium-link" href="javascript:void(0);">Melancholy</a><br>
							<a class="medium-link" href="javascript:void(0);">Miserable</a><br>
							<a class="medium-link" href="javascript:void(0);">Regretful</a><br>
							<a class="medium-link" href="javascript:void(0);">Rotten</a><br>
							<a class="medium-link" href="javascript:void(0);">Sorrowful</a><br>
							<a class="medium-link" href="javascript:void(0);">Tearful</a><br>
							<a class="medium-link" href="javascript:void(0);">Upset</a><br>
							<a class="medium-link" href="javascript:void(0);">Weepy</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Blah</a><br>
							<a class="light-link" href="javascript:void(0);">Disappointed</a><br>
							<a class="light-link" href="javascript:void(0);">Down</a><br>
							<a class="light-link" href="javascript:void(0);">Funk</a><br>
							<a class="light-link" href="javascript:void(0);">Glum</a><br>
							<a class="light-link" href="javascript:void(0);">Low</a><br>
							<a class="light-link" href="javascript:void(0);">Moody</a><br>
							<a class="light-link" href="javascript:void(0);">Morose</a><br>
							<a class="light-link" href="javascript:void(0);">Somber</a><br>
							<a class="light-link" href="javascript:void(0);">Subdued</a><br>
							<a class="light-link" href="javascript:void(0);">Uncomfortable</a><br>
							<a class="light-link" href="javascript:void(0);">Unhappy</a><br>
						</div>
					</div>


					<h2 class="text-center mb-3"><i style="color: orangered;" class="fas fa-tired fa-2x"></i> Frustrated</h2>
					
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Baffled</a><br>
							<a class="strong-link" href="javascript:void(0);">Befuddled</a><br>
							<a class="strong-link" href="javascript:void(0);">Chaotic</a><br>
							<a class="strong-link" href="javascript:void(0);">Confounded</a><br>
							<a class="strong-link" href="javascript:void(0);">Confused</a><br>
							<a class="strong-link" href="javascript:void(0);">Flustered</a><br>
							<a class="strong-link" href="javascript:void(0);">Rattled</a><br>
							<a class="strong-link" href="javascript:void(0);">Reeling</a><br>
							<a class="strong-link" href="javascript:void(0);">Shocked</a><br>
							<a class="strong-link" href="javascript:void(0);">Shook</a><br>
							<a class="strong-link" href="javascript:void(0);">Speechless</a><br>
							<a class="strong-link" href="javascript:void(0);">Startled</a><br>
							<a class="strong-link" href="javascript:void(0);">Stumped</a><br>
							<a class="strong-link" href="javascript:void(0);">Stunned</a><br>
							<a class="strong-link" href="javascript:void(0);">Taken-aback</a><br>
							<a class="strong-link" href="javascript:void(0);">Thrown</a><br>
							<a class="strong-link" href="javascript:void(0);">Trapped</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Adrift</a><br>
							<a class="medium-link" href="javascript:void(0);">Ambivalent</a><br>
							<a class="medium-link" href="javascript:void(0);">Bewildered</a><br>
							<a class="medium-link" href="javascript:void(0);">Puzzled</a><br>
							<a class="medium-link" href="javascript:void(0);">Blurred</a><br>
							<a class="medium-link" href="javascript:void(0);">Disconcerted</a><br>
							<a class="medium-link" href="javascript:void(0);">Disordered</a><br>
							<a class="medium-link" href="javascript:void(0);">Disorganized</a><br>
							<a class="medium-link" href="javascript:void(0);">Disquieted</a><br>
							<a class="medium-link" href="javascript:void(0);">Disturbed</a><br>
							<a class="medium-link" href="javascript:void(0);">Dizzy</a><br>
							<a class="medium-link" href="javascript:void(0);">Foggy</a><br>
							<a class="medium-link" href="javascript:void(0);">Frozen</a><br>
							<a class="medium-link" href="javascript:void(0);">Frustrated</a><br>
							<a class="medium-link" href="javascript:void(0);">Misled</a><br>
							<a class="medium-link" href="javascript:void(0);">Mistaken</a><br>
							<a class="medium-link" href="javascript:void(0);">Misunderstood</a><br>
							<a class="medium-link" href="javascript:void(0);">Perplexed</a><br>
							<a class="medium-link" href="javascript:void(0);">Troubled</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Distracted</a><br>
							<a class="light-link" href="javascript:void(0);">Uncertain</a><br>
							<a class="light-link" href="javascript:void(0);">Uncomfortable</a><br>
							<a class="light-link" href="javascript:void(0);">Undecided</a><br>
							<a class="light-link" href="javascript:void(0);">Unsettled</a><br>
							<a class="light-link" href="javascript:void(0);">Unsure</a><br>
						</div>
					</div>

					<h2 class="text-center mb-3"><i style="color: orangered;" class="fas fa-grin-stars fa-2x"></i> High</h2>
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Delighted</a><br>
							<a class="strong-link" href="javascript:void(0);">Ebullient</a><br>
							<a class="strong-link" href="javascript:void(0);">Ecstatic</a><br>
							<a class="strong-link" href="javascript:void(0);">Elated</a><br>
							<a class="strong-link" href="javascript:void(0);">Energetic</a><br>
							<a class="strong-link" href="javascript:void(0);">Enthusiastic</a><br>
							<a class="strong-link" href="javascript:void(0);">Euphoric</a><br>
							<a class="strong-link" href="javascript:void(0);">Excited</a><br>
							<a class="strong-link" href="javascript:void(0);">Exhilarated</a><br>
							<a class="strong-link" href="javascript:void(0);">Manic</a><br>
							<a class="strong-link" href="javascript:void(0);">Overjoyed</a><br>
							<a class="strong-link" href="javascript:void(0);">Paranoid</a><br>
							<a class="strong-link" href="javascript:void(0);">Thrilled</a><br>
							<a class="strong-link" href="javascript:void(0);">Tickled pink</a><br>
							<a class="strong-link" href="javascript:void(0);">Turned on</a><br>
							<a class="strong-link" href="javascript:void(0);">Vibrant</a><br>
							<a class="strong-link" href="javascript:void(0);">Zippy</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Aglow</a><br>
							<a class="medium-link" href="javascript:void(0);">Buoyant</a><br>
							<a class="medium-link" href="javascript:void(0);">Cheerful</a><br>
							<a class="medium-link" href="javascript:void(0);">Elevated</a><br>
							<a class="medium-link" href="javascript:void(0);">Gleeful</a><br>
							<a class="medium-link" href="javascript:void(0);">Happy</a><br>
							<a class="medium-link" href="javascript:void(0);">Jovial</a><br>
							<a class="medium-link" href="javascript:void(0);">Lively</a><br>
							<a class="medium-link" href="javascript:void(0);">Merry</a><br>
							<a class="medium-link" href="javascript:void(0);">Sparkling</a><br>
							<a class="medium-link" href="javascript:void(0);">Up</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Contented</a><br>
							<a class="light-link" href="javascript:void(0);">Cool</a><br>
							<a class="light-link" href="javascript:void(0);">Fine</a><br>
							<a class="light-link" href="javascript:void(0);">Genial</a><br>
							<a class="light-link" href="javascript:void(0);">Glad</a><br>
							<a class="light-link" href="javascript:void(0);">Gratified</a><br>
							<a class="light-link" href="javascript:void(0);">Keen</a><br>
							<a class="light-link" href="javascript:void(0);">Pleasant</a><br>
							<a class="light-link" href="javascript:void(0);">Pleased</a><br>
							<a class="light-link" href="javascript:void(0);">Satisfied</a><br>
							<a class="light-link" href="javascript:void(0);">Serene</a><br>
							<a class="light-link" href="javascript:void(0);">Sunny</a><br>
						</div>
					</div>

					<h2 class="text-center mb-3"><i style="color: orangered;" class="fas fa-bed fa-2x"></i> Sleepy</h2>
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Asleep</a><br>
							<a class="strong-link" href="javascript:void(0);">Comatose</a><br>
							<a class="strong-link" href="javascript:void(0);">Hypnotic</a><br>
							<a class="strong-link" href="javascript:void(0);">Lethargic</a><br>
							<a class="strong-link" href="javascript:void(0);">Listless</a><br>
							<a class="strong-link" href="javascript:void(0);">Sleeping</a><br>
							<a class="strong-link" href="javascript:void(0);">Slumbersome</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Dopey</a><br>
							<a class="medium-link" href="javascript:void(0);">Dozy</a><br>
							<a class="medium-link" href="javascript:void(0);">Drowsy</a><br>
							<a class="medium-link" href="javascript:void(0);">Heavy</a><br>
							<a class="medium-link" href="javascript:void(0);">Inactive</a><br>
							<a class="medium-link" href="javascript:void(0);">Sleepyhead</a><br>
							<a class="medium-link" href="javascript:void(0);">Sluggish</a><br>
							<a class="medium-link" href="javascript:void(0);">Snoozy</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Blah</a><br>
							<a class="light-link" href="javascript:void(0);">Insecure</a><br>
							<a class="light-link" href="javascript:void(0);">Out of it</a><br>
							<a class="light-link" href="javascript:void(0);">Quiet</a><br>
							<a class="light-link" href="javascript:void(0);">Slow</a><br>
							<a class="light-link" href="javascript:void(0);">Yawning</a><br>
						</div>
					</div>

					<h2 class="text-center mb-3"><i style="color: orangered;" class="fas fa-sad-cry fa-2x"></i> Lonely</h2>
					<div class="row emotion-row fa mb-5">
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center strong-column">
							<h4 class="strength-title">Strong</h4>
							<a class="strong-link" href="javascript:void(0);">Abandoned</a><br>
							<a class="strong-link" href="javascript:void(0);">Black</a><br>
							<a class="strong-link" href="javascript:void(0);">Deserted</a><br>
							<a class="strong-link" href="javascript:void(0);">Destroyed</a><br>
							<a class="strong-link" href="javascript:void(0);">Empty</a><br>
							<a class="strong-link" href="javascript:void(0);">Forsaken</a><br>
							<a class="strong-link" href="javascript:void(0);">Isolated</a><br>
							<a class="strong-link" href="javascript:void(0);">Marooned</a><br>
							<a class="strong-link" href="javascript:void(0);">Neglected</a><br>
							<a class="strong-link" href="javascript:void(0);">Ostracized</a><br>
							<a class="strong-link" href="javascript:void(0);">Outcast</a><br>
							<a class="strong-link" href="javascript:void(0);">Rejected</a><br>
							<a class="strong-link" href="javascript:void(0);">Shunned</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center medium-column">
							<h4 class="strength-title">Medium</h4>
							<a class="medium-link" href="javascript:void(0);">Alienated</a><br>
							<a class="medium-link" href="javascript:void(0);">Alone</a><br>
							<a class="medium-link" href="javascript:void(0);">Apart</a><br>
							<a class="medium-link" href="javascript:void(0);">Cheerless</a><br>
							<a class="medium-link" href="javascript:void(0);">Companionless</a><br>
							<a class="medium-link" href="javascript:void(0);">Dejected</a><br>
							<a class="medium-link" href="javascript:void(0);">Despondent</a><br>
							<a class="medium-link" href="javascript:void(0);">Estranged</a><br>
							<a class="medium-link" href="javascript:void(0);">Excluded</a><br>
							<a class="medium-link" href="javascript:void(0);">Left out</a><br>
							<a class="medium-link" href="javascript:void(0);">Leftover</a><br>
							<a class="medium-link" href="javascript:void(0);">Lonely</a><br>
							<a class="medium-link" href="javascript:void(0);">Oppressed</a><br>
							<a class="medium-link" href="javascript:void(0);">Uncherished</a><br>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 mt-3 text-center light-column">
							<h4 class="strength-title">Light</h4>
							<a class="light-link" href="javascript:void(0);">Blue</a><br>
							<a class="light-link" href="javascript:void(0);">Detached</a><br>
							<a class="light-link" href="javascript:void(0);">Discouraged</a><br>
							<a class="light-link" href="javascript:void(0);">Distant</a><br>
							<a class="light-link" href="javascript:void(0);">Insulated</a><br>
							<a class="light-link" href="javascript:void(0);">Melancholy</a><br>
							<a class="light-link" href="javascript:void(0);">Remote</a><br>
							<a class="light-link" href="javascript:void(0);">Separate</a><br>
							<a class="light-link" href="javascript:void(0);">Withdrawn</a><br>
						</div>
					</div>
				</div>
			</section>
		</main>

		<!-- Footer -->
		<?php require_once("___footer.php"); ?>
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		
		<!-- Core theme JS-->
	    <script src="js/scripts.js"></script>


		<script>

		    $(function() {
		        $(".emotion-row a").each(function(i, obj) {
		            $(this).attr("data-bs-container", "body");
		            $(this).attr("data-bs-toggle", "popover");
		            $(this).attr("data-bs-placement", "top");
		            $(this).attr("data-bs-content", " ");
		            $(this).attr("data-bs-html", "true");

		        })

		    });

		    if (!isMobile()) {

		        $(".emotion-row a").mouseenter(function() {
		            getDefinitions($(this), $(this).text());
		        }).mouseleave(function() {
		            $(this).popover('hide');
		        });
		     }
		     else {
		        $('.emotion-row a').on('mouseenter touchstart', function(e){
		        	e.preventDefault(); 
				    getDefinitions($(this), $(this).text());
				});

				$('.emotion-row a').on('mouseleave touchend', function(e){
				     $(this).popover('hide');
				});
			}


		    function getDefinitions(element, term) {
		        $.ajax({
		            url:"def.php?term=" + term,
		            type:"GET",
		            dataType: 'json',
		            success:function(result) {
		                content = '';
		                def = '';
		                if ((result.text !== '') && (result.text !== '<strong>. </strong> ')) {
		                    def = result.text;
		                }
		                else {
		                    def = 'No definition found.'
		                }

		                gif = '<img src="' + result.gif + '"/>';

		                content = def + '<br><br>' + gif; 

		                if (element.is(':hover')) {
		                    element.attr("data-bs-content", content);
		                    element.popover('show');
		                }
		            },
		            error: function(result) {

		            }

		        });
		    }


		    function isMobile() {
				if (/Mobi|Android|iPad/i.test(navigator.userAgent)) {
					return true;
				}
				else {
					return false;
				}
			}

		</script>

	  
	</body>

</html>
