<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Explore Health & Wellness Rooms where you can talk about physical health, mental wellbeing, healthy habits, and ask general health questions in a supportive space." />
        <meta name="author" content="LensShare" />

        <!-- Page title -->
        <title>Health & Wellness Rooms — Support for Body & Mind | LensShare</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Health & Wellness Rooms — LensShare" />
        <meta name="twitter:description" content="Join Health & Wellness Rooms to discuss physical health, mental wellbeing, coping tools, and general health questions with others in a supportive environment." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/health/mural-mental-health.jpeg" />

        <meta property="og:url" content="https://lensshare.co/health.php" />
        <meta property="og:title" content="Health & Wellness Rooms — LensShare" />
        <meta property="og:description" content="Join Health & Wellness Rooms to discuss physical health, mental wellbeing, coping tools, and general health questions with others in a supportive environment." />
        <meta property="og:image" content="https://lensshare.co/assets/img/health/mural-mental-health.jpeg" />
        <meta property="og:site_name" content="LensShare" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <style>

            header.masthead {
                background: url(assets/img/health/bg-masthead-health.gif);
                background-position: bottom;
                margin-top: -7rem;
            }            

            hr.divider {
                background-color: deeppink;
            }

            iframe {
                box-shadow: 0rem 1.5rem 2rem rgba(0, 0, 0, 0.15);
                background-color: #ff4800;
                padding: 2px 4px 4px 4px;
            }

            #emoji-and-game-section {
                /* background-color: #1a1a1a; */
                background-image: linear-gradient(to bottom, rgba(17,17,17,1), rgba(17,17,17,.9)), url(assets/img/health/emotions-bg.jpg);
                background-size: cover;
                padding-bottom: 6rem;
                padding-top: 6rem;
            }

            .feelings h4.link-color {
                color: white;
            }

            #howdoyoufeel {
                color: white;
                text-shadow: -2px 2px grey;
                font-size: 3rem;
                font-weight: 600;
            }

            .emoji {
                color: indigo;
                box-shadow: 0 0 10rem rgb(255, 255, 255);
                background: linear-gradient(-80deg, purple, orange);
            }

            .emoji:hover {
                color: white;
            }

            #emoji-and-game-section .p-1 a {
                text-decoration: none;
            }

            #emoji-and-game-section .p-1 a h4 {
                font-weight: 600;
            }

            #holodeck {
                background-image: none;
                background-color: transparent !important;
                padding-bottom: 0.75rem;
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
                        <li class="nav-item my-auto"><a class="nav-link" href="#physical-health">Physical</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#mental-health">Mental</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#ask">Ask a Question</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#mood-board">Mood Board</a></li>
                        
                        <!-- New: Search icon/link -->
                        <li class="nav-item my-auto">
                            <a class="nav-link d-flex align-items-center" href="search.php">
                                <span class="me-1">🔍</span>
                                <span class="d-none d-lg-inline">Search</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary text-white" style="margin-left: 0.65rem;" href="room.php?room=happy-hour">
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
                        <h1 class="text-white font-weight-bold"><strong>Health <span class="text-warning">+</span> Wellness</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="mb-3">This Portal is here to help motivate and support you in maintaining and improving your physical and mental wellbeing.</p>
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
                        <a class="btn btn-dark btn-xl mb-2" href="#physical-health">Explore Rooms</a>
                        <a class="btn btn-light btn-xl mb-3" href="room.php?room=health-questions">Ask a Health Question</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Physical Health -->
        <section class="page-section text-dark" id="physical-health">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="explanation-image img-fluid" style="margin-top: -100px; height: 370px; width: auto;" src="assets/img/health/doctor.gif" alt="A shiny image of a doctor">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Body & Physical Health</strong></h2>
                        <p class="text-muted">Join one of these rooms to talk about staying active, building healthy routines, and caring for your body.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=physical-general-health">General Health</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=health-insurance-help">Health Insurance Help</a>

                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=not-feeling-well">I'm Not Feeling Well</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=nutrition-eating">Nutrition &amp; Healthy Eating</a>

                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=fitness-movement">Fitness &amp; Movement</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=dental-care">Dental Care</a>

                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=vision-eye-care">Vision &amp; Eye Care</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=medical-questions">Medical Questions</a>

                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=illness-prevention">Illness Prevention</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=exercise-workouts">Exercise &amp; Workouts</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Mental Health -->
        <section class="page-section bg-light text-dark" id="mental-health">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Mind & Mental Health</strong></h2>
                        <p class="text-muted">Join one of these rooms to discuss emotional wellbeing, stress, coping tools, and experiences related to mental health—for yourself or someone you care about.</p>
                        <div class="mt-4">
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=general-mental-health">General Mental Health</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=health-insurance-help">Health Insurance Help</a>

                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=sleep-rest">Sleep &amp; Rest</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=stress-overwhelm">Stress &amp; Overwhelm</a>

                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=alcohol-habits">Alcohol &amp; Habits</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=meditation-mindfulness">Meditation &amp; Mindfulness</a>

                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=breathwork-relaxation">Breathwork &amp; Relaxation</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=emotional-wellness">Emotional Wellness</a>

                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=body-image-confidence">Body Image &amp; Self-Confidence</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <img class="explanation-image img-fluid" src="assets/img/health/brain.gif" alt="A girl with her head exploding">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Special Topics -->
        <section class="page-section text-dark" id="special-topics">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="explanation-image img-fluid" style="margin-top: -100px; height: 370px; width: auto;" src="assets/img/health/special-topics.gif" alt="A doctor showing the thumbs up">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Special Topics</strong></h2>
                        <p class="text-muted">Join a Special Topics room to talk about more focused areas of health, from chronic conditions to long-term wellness planning.</p>
                        <div class="mt-4">
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=chronic-conditions">Chronic Conditions</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=women-health">Women’s Health</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=men-health">Men’s Health</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=aging-longevity">Aging &amp; Longevity</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=healthy-routines">Healthy Routines</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=injury-recovery">Injury Recovery</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=supplements">Supplements</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Ask a Question -->
        <section class="page-section bg-light text-dark" id="ask">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Ask a Health Question</strong></h2>
                        <p class="text-muted">A supportive space to ask general health and wellness questions. Share experiences, compare routines, and learn from others—no medical advice, just community insight.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=health-questions">Ask a Health Question</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <img class="explanation-image img-fluid" style="height: 370px; width: auto;" src="assets/img/health/health-questions.gif" alt="A guy running tired on a treadmill">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Mood Board -->
        <section class="page-section text-dark" id="mood-board">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="explanation-image img-fluid" style="margin-top: -100px; height: 370px; width: auto;" src="assets/img/health/mask.webp" alt="A real life animated emoji of a guy with different masks on">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Mood Board</strong></h2>
                        <p class="text-muted">Lift your mood by scrolling through memes, reactions, and relatable moments from others who feel the same way. Sometimes a little humor is the best therapy.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="mood-board.php">Fix Your Mood</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How Do You Feel? -->
        <section id="emoji-and-game-section">
            <div class="container games">
                <h1 id="howdoyoufeel" class="pt-5">How do you feel?</h1>
                <div class="row align-items-start mt-5 mb-4 feelings emoji-rack">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-annoyed" class="feeling">
                                <i class="img-fluid rounded-circle far fa-angry fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-annoyed"><h4 class="text-white">Annoyed</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-bored" class="feeling">
                                <i class="img-fluid rounded-circle far fa-flushed fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-bored"><h4 class="text-white">Bored</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-anxious" class="feeling">
                                <i class="img-fluid rounded-circle far fa-frown-open fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-anxious"><h4 class="text-white">Anxious</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-depressed" class="feeling">
                                <i class="img-fluid rounded-circle far fa-sad-tear fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-depressed"><h4 class="text-white">Depressed</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-frustrated" class="feeling">
                                <i class="img-fluid rounded-circle far fa-tired fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-frustrated"><h4 class="text-white">Frustrated</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-high" class="feeling">
                                <i class="img-fluid rounded-circle far fa-grin-stars fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-high"><h4 class="text-white">High</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-sleepy" class="feeling">
                                <i class="img-fluid rounded-circle fas fa-bed fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-sleepy"><h4 class="text-white">Sleepy</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="p-3" style="text-align:center;">
                            <a href="room.php?room=i-feel-lonely" class="feeling">
                                <i class="img-fluid rounded-circle far fa-sad-cry fa-7x emoji"></i>
                            </a>
                        </div>
                        <div class="p-1" style="text-align:center;">
                            <a href="room.php?room=i-feel-loney"><h4 class="text-white">Lonely</h4></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once("___holodeck.php"); ?>

        </section>
        
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
