<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Explore School & Education Rooms for students of all grade levels—and their parents—to discuss learning, classes, college, and how to succeed in school." />
        <meta name="author" content="LensShare" />
        
        <!-- Page title -->
        <title>School & Education Rooms — Learn, Connect, and Succeed | LensShare</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="School & Education Rooms — LensShare" />
        <meta name="twitter:description" content="Join School & Education Rooms to talk about learning, classes, college majors, and how to succeed at every stage of school." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/education/bg-masthead-education.png" />
        
        <meta property="og:url" content="https://lensshare.co/education.php" />
        <meta property="og:title" content="School & Education Rooms — LensShare" />
        <meta property="og:description" content="Join School & Education Rooms to talk about learning, classes, college majors, and how to succeed at every stage of school." />
        <meta property="og:image" content="https://lensshare.co/assets/img/education/bg-masthead-education.png" />
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
                background: url(assets/img/education/bg-masthead-education.png);
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
                background-color: deeppink;
                opacity: 1;
            }

            iframe {
                box-shadow: 0rem 1.5rem 2rem rgba(0, 0, 0, 0.15);
                background-color: #ff4800;
                padding: 2px 4px 4px 4px;
            }

            @media(max-width: 992px) {
                iframe#soundcloud {
                    width: 100%;
                }
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
                        <li class="nav-item my-auto"><a class="nav-link" href="#mixer">Mixer</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#study">Study Together</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#college-prep">College Prep</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#majors" style="margin-right: 0.65rem;">Majors</a></li>
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
                        <h1 class="text-dark font-weight-bold"><strong>School <span class="text-white">&</span> Education</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="mb-3">This Portal is for students of any grade level—and their parents—who want to do better in school, build skills, and navigate the education system together.</p>
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
                        <a class="btn btn-dark btn-xl mb-2" href="#base-station">Explore Rooms</a>
                        <a class="btn btn-light btn-xl" href="#study">Study Together</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Call to action-->
        <section class="page-section text-dark" id="base-station">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>School <span class="text-pink">&</span> Education Base Station</strong></h2>
                        <p class="text-muted">Join the School & Education Base Station to talk about learning in general. Share comments and concerns about homework, classes, extra-curriculars, and the education system as a whole.</p>
                        <a id="base-station-btn" class="btn btn-dark btn-xl mt-3" href="room.php?room=school-and-education-base-station">Join Base Station</a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="base-station-image img-fluid" style="" src="assets/img/all/base-station.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="mixer">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="explanation-image img-fluid" style="height: 370px; width: auto;" src="assets/img/education/mixer.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Online College Mixer</strong></h2>
                        <p class="text-muted">In college, it helps to work hard—and have a little fun too. Join this space to relax, chat, and hang out with other college students. If things get more personal or intense, move the conversation to a private Room.</p>
                        <div class="mt-3">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=online-college-mixer">Online Mixer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section text-dark" id="grade">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Grade Level</strong></h2>
                        <p class="text-muted">Join one of these Rooms based on your current grade level—or your child’s—so you can connect with others facing similar challenges.</p>
                        <div class="mt-4">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=pre-k">Pre-K</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=elementary-school">Elementary School</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=middle-school">Middle Schools</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=high-school">High School</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=undergrad">Undegrad</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=masters">Masters</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=ph.d.">Ph.D.</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=med-school">Med School</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=mba">MBA</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=cross-training">Vocational School</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="base-station-image img-fluid" style="" src="assets/img/education/student.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="learning">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <iframe id="soundcloud" width="500" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1099957360&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>The Right Way to Learn</strong></h2>
                        <p class="text-muted">Play this audio for a quick dose of time-tested techniques on how to learn more effectively.</p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section-smaller text-dark" id="study">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Study Together</strong></h2>
                        <p class="text-muted">Focused spaces where students can work side-by-side, stay motivated, and share study tips. Join whenever you want a little company while you learn.</p>
                        <div class="mt-4">
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=study-k8">Younger Students (K-8)</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=study-highschool">High School Students</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=study-undergrad">College & Undergrad</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=study-grad">Grad School / Professional Programs</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=study-med-school">Med School</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=study-mba">MBA</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=study-parents">Parents & Supporters</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=study-quiet">Quiet Study Room</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=study-group">Group Study Room</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=homework-help">Homework Help</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=exam-prep">Exam Prep</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=parents-helping-kids">Parents Helping Kids</a>
                            <a class="btn btn-warning btn-xl mb-3" href="room.php?room=ask">Ask a Question</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="base-station-image img-fluid" style="" src="assets/img/education/study-together.gif">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section bg-light text-dark" id="college-prep">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="explanation-image img-fluid" style="height: 370px; width: auto;" src="assets/img/education/college-prep.gif">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>College Prep</strong></h2>
                        <p class="text-muted">Join this room to talk about college applications, admissions strategies, essays, standardized tests, and everything involved in preparing for college.</p>
                        <div class="mt-3">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=college-prep">College Prep Room</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- Call to action-->
        <section class="page-section-smaller text-dark" id="majors">
            <div class="container px-4 px-lg-5">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="mb-3"><strong>College Majors</strong></h2>
                        <p class="text-muted">Join the Room for your current major in undergrad or grad school—or a subject you’re considering for a future major or minor. It’s a space to compare paths, ask questions, and get insight from others in the same area.</p>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-10">
                        <table id="dataTable" class="table table-striped">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Job</th>
                                </tr>
                            </thead>
                            <tbody>
<tr><th scope="row">1</th><td><a href="room.php?room=accounting">Accounting</a></td></tr>
<tr><th scope="row">2</th><td><a href="room.php?room=actuarial-science">Actuarial Science</a></td></tr>
<tr><th scope="row">3</th><td><a href="room.php?room=advertising-major">Advertising Major</a></td></tr>
<tr><th scope="row">4</th><td><a href="room.php?room=aerospace-engineering">Aerospace Engineering</a></td></tr>
<tr><th scope="row">5</th><td><a href="room.php?room=african-languages-literatures-and-linguistics">African Languages, Literatures, and Linguistics</a></td></tr>
<tr><th scope="row">6</th><td><a href="room.php?room=african-studies">African Studies</a></td></tr>
<tr><th scope="row">7</th><td><a href="room.php?room=african-american-studies">African-American Studies</a></td></tr>
<tr><th scope="row">8</th><td><a href="room.php?room=agricultural-business-and-management">Agricultural Business and Management</a></td></tr>
<tr><th scope="row">9</th><td><a href="room.php?room=agricultural-economics">Agricultural Economics</a></td></tr>
<tr><th scope="row">10</th><td><a href="room.php?room=agricultural-education">Agricultural Education</a></td></tr>
<tr><th scope="row">11</th><td><a href="room.php?room=agricultural-journalism">Agricultural Journalism</a></td></tr>
<tr><th scope="row">12</th><td><a href="room.php?room=agricultural-mechanization-major">Agricultural Mechanization Major</a></td></tr>
<tr><th scope="row">13</th><td><a href="room.php?room=agricultural-technology-management">Agricultural Technology Management</a></td></tr>
<tr><th scope="row">14</th><td><a href="room.php?room=agricultural-bioengineering">Agricultural/Biological Engineering and Bioengineering</a></td></tr>
<tr><th scope="row">15</th><td><a href="room.php?room=agriculture">Agriculture</a></td></tr>
<tr><th scope="row">16</th><td><a href="room.php?room=agronomy-and-crop-science">Agronomy and Crop Science</a></td></tr>
<tr><th scope="row">17</th><td><a href="room.php?room=air-traffic-control">Air Traffic Control</a></td></tr>
<tr><th scope="row">18</th><td><a href="room.php?room=american-history">American History</a></td></tr>
<tr><th scope="row">19</th><td><a href="room.php?room=american-literature">American Literature</a></td></tr>
<tr><th scope="row">20</th><td><a href="room.php?room=american-sign-language">American Sign Language</a></td></tr>
<tr><th scope="row">21</th><td><a href="room.php?room=american-studies">American Studies</a></td></tr>
<tr><th scope="row">22</th><td><a href="room.php?room=anatomy">Anatomy</a></td></tr>
<tr><th scope="row">23</th><td><a href="room.php?room=ancient-studies">Ancient Studies</a></td></tr>
<tr><th scope="row">24</th><td><a href="room.php?room=animal-behavior-and-ethology">Animal Behavior and Ethology</a></td></tr>
<tr><th scope="row">25</th><td><a href="room.php?room=animal-science">Animal Science</a></td></tr>
<tr><th scope="row">26</th><td><a href="room.php?room=animation-and-special-effects">Animation and Special Effects</a></td></tr>
<tr><th scope="row">27</th><td><a href="room.php?room=anthropology">Anthropology</a></td></tr>
<tr><th scope="row">28</th><td><a href="room.php?room=applied-mathematics">Applied Mathematics</a></td></tr>
<tr><th scope="row">29</th><td><a href="room.php?room=aquaculture">Aquaculture</a></td></tr>
<tr><th scope="row">30</th><td><a href="room.php?room=aquatic-biology">Aquatic Biology</a></td></tr>
<tr><th scope="row">31</th><td><a href="room.php?room=arabic">Arabic</a></td></tr>
<tr><th scope="row">32</th><td><a href="room.php?room=archeology">Archeology</a></td></tr>
<tr><th scope="row">33</th><td><a href="room.php?room=architectural-engineering">Architectural Engineering</a></td></tr>
<tr><th scope="row">34</th><td><a href="room.php?room=architectural-history">Architectural History</a></td></tr>
<tr><th scope="row">35</th><td><a href="room.php?room=architecture">Architecture</a></td></tr>
<tr><th scope="row">36</th><td><a href="room.php?room=art">Art</a></td></tr>
<tr><th scope="row">37</th><td><a href="room.php?room=art-education">Art Education</a></td></tr>
<tr><th scope="row">38</th><td><a href="room.php?room=art-history">Art History</a></td></tr>
<tr><th scope="row">39</th><td><a href="room.php?room=art-therapy">Art Therapy</a></td></tr>
<tr><th scope="row">40</th><td><a href="room.php?room=artificial-intelligence-and-robotics">Artificial Intelligence and Robotics</a></td></tr>
<tr><th scope="row">41</th><td><a href="room.php?room=asian-american-studies">Asian-American Studies</a></td></tr>
<tr><th scope="row">42</th><td><a href="room.php?room=astronomy">Astronomy</a></td></tr>
<tr><th scope="row">43</th><td><a href="room.php?room=astrophysics">Astrophysics</a></td></tr>
<tr><th scope="row">44</th><td><a href="room.php?room=athletic-training">Athletic Training</a></td></tr>
<tr><th scope="row">45</th><td><a href="room.php?room=atmospheric-science">Atmospheric Science</a></td></tr>
<tr><th scope="row">46</th><td><a href="room.php?room=automotive-engineering">Automotive Engineering</a></td></tr>
<tr><th scope="row">47</th><td><a href="room.php?room=aviation">Aviation</a></td></tr>
<tr><th scope="row">48</th><td><a href="room.php?room=bakery-science">Bakery Science</a></td></tr>
<tr><th scope="row">49</th><td><a href="room.php?room=biblical-studies">Biblical Studies</a></td></tr>
<tr><th scope="row">50</th><td><a href="room.php?room=biochemistry">Biochemistry</a></td></tr>
<tr><th scope="row">51</th><td><a href="room.php?room=bioethics">Bioethics</a></td></tr>
<tr><th scope="row">52</th><td><a href="room.php?room=biology">Biology</a></td></tr>
<tr><th scope="row">53</th><td><a href="room.php?room=biomedical-engineering">Biomedical Engineering</a></td></tr>
<tr><th scope="row">54</th><td><a href="room.php?room=biomedical-science">Biomedical Science</a></td></tr>
<tr><th scope="row">55</th><td><a href="room.php?room=biopsychology">Biopsychology</a></td></tr>
<tr><th scope="row">56</th><td><a href="room.php?room=biotechnology">Biotechnology</a></td></tr>
<tr><th scope="row">57</th><td><a href="room.php?room=botany-plant-biology">Botany/Plant Biology</a></td></tr>
<tr><th scope="row">58</th><td><a href="room.php?room=business-administration-management">Business Administration/Management</a></td></tr>
<tr><th scope="row">59</th><td><a href="room.php?room=business-communications">Business Communications</a></td></tr>
<tr><th scope="row">60</th><td><a href="room.php?room=business-education">Business Education</a></td></tr>
<tr><th scope="row">61</th><td><a href="room.php?room=canadian-studies">Canadian Studies</a></td></tr>
<tr><th scope="row">62</th><td><a href="room.php?room=caribbean-studies">Caribbean Studies</a></td></tr>
<tr><th scope="row">63</th><td><a href="room.php?room=cell-biology-major">Cell Biology Major</a></td></tr>
<tr><th scope="row">64</th><td><a href="room.php?room=ceramic-engineering">Ceramic Engineering</a></td></tr>
<tr><th scope="row">65</th><td><a href="room.php?room=ceramics">Ceramics</a></td></tr>
<tr><th scope="row">66</th><td><a href="room.php?room=chemical-engineering-major">Chemical Engineering Major</a></td></tr>
<tr><th scope="row">67</th><td><a href="room.php?room=chemical-physics">Chemical Physics</a></td></tr>
<tr><th scope="row">68</th><td><a href="room.php?room=chemistry-major">Chemistry Major</a></td></tr>
<tr><th scope="row">69</th><td><a href="room.php?room=child-care">Child Care</a></td></tr>
<tr><th scope="row">70</th><td><a href="room.php?room=child-development">Child Development</a></td></tr>
<tr><th scope="row">71</th><td><a href="room.php?room=chinese">Chinese</a></td></tr>
<tr><th scope="row">72</th><td><a href="room.php?room=chiropractic">Chiropractic</a></td></tr>
<tr><th scope="row">73</th><td><a href="room.php?room=church-music">Church Music</a></td></tr>
<tr><th scope="row">74</th><td><a href="room.php?room=cinematography-and-film-video-production">Cinematography and Film/Video Production</a></td></tr>
<tr><th scope="row">75</th><td><a href="room.php?room=circulation-technology">Circulation Technology</a></td></tr>
<tr><th scope="row">76</th><td><a href="room.php?room=civil-engineering">Civil Engineering</a></td></tr>
<tr><th scope="row">77</th><td><a href="room.php?room=classics">Classics</a></td></tr>
<tr><th scope="row">78</th><td><a href="room.php?room=clinical-psychology">Clinical Psychology</a></td></tr>
<tr><th scope="row">79</th><td><a href="room.php?room=cognitive-psychology">Cognitive Psychology</a></td></tr>
<tr><th scope="row">80</th><td><a href="room.php?room=communication-disorders">Communication Disorders</a></td></tr>
<tr><th scope="row">81</th><td><a href="room.php?room=communications-studies">Communications Studies/Speech Communication and Rhetoric</a></td></tr>
<tr><th scope="row">82</th><td><a href="room.php?room=comparative-literature">Comparative Literature</a></td></tr>
<tr><th scope="row">83</th><td><a href="room.php?room=computer-and-information-science">Computer and Information Science</a></td></tr>
<tr><th scope="row">84</th><td><a href="room.php?room=computer-engineering">Computer Engineering</a></td></tr>
<tr><th scope="row">85</th><td><a href="room.php?room=computer-graphics">Computer Graphics</a></td></tr>
<tr><th scope="row">86</th><td><a href="room.php?room=computer-systems-analysis-major">Computer Systems Analysis Major</a></td></tr>
<tr><th scope="row">87</th><td><a href="room.php?room=construction-management">Construction Management</a></td></tr>
<tr><th scope="row">88</th><td><a href="room.php?room=counseling">Counseling</a></td></tr>
<tr><th scope="row">89</th><td><a href="room.php?room=crafts">Crafts</a></td></tr>
<tr><th scope="row">90</th><td><a href="room.php?room=creative-writing">Creative Writing</a></td></tr>
<tr><th scope="row">91</th><td><a href="room.php?room=criminal-science">Criminal Science</a></td></tr>
<tr><th scope="row">92</th><td><a href="room.php?room=criminology">Criminology</a></td></tr>
<tr><th scope="row">93</th><td><a href="room.php?room=culinary-arts">Culinary Arts</a></td></tr>
<tr><th scope="row">94</th><td><a href="room.php?room=dance">Dance</a></td></tr>
<tr><th scope="row">95</th><td><a href="room.php?room=data-processing">Data Processing</a></td></tr>
<tr><th scope="row">96</th><td><a href="room.php?room=dental-hygiene">Dental Hygiene</a></td></tr>
<tr><th scope="row">97</th><td><a href="room.php?room=developmental-psychology">Developmental Psychology</a></td></tr>
<tr><th scope="row">98</th><td><a href="room.php?room=diagnostic-medical-sonography">Diagnostic Medical Sonography</a></td></tr>
<tr><th scope="row">99</th><td><a href="room.php?room=dietetics">Dietetics</a></td></tr>
<tr><th scope="row">100</th><td><a href="room.php?room=digital-communications-and-media-multimedia">Digital Communications and Media/Multimedia</a></td></tr>
<tr><th scope="row">101</th><td><a href="room.php?room=drawing">Drawing</a></td></tr>
<tr><th scope="row">102</th><td><a href="room.php?room=early-childhood-education">Early Childhood Education</a></td></tr>
<tr><th scope="row">103</th><td><a href="room.php?room=east-asian-studies">East Asian Studies</a></td></tr>
<tr><th scope="row">104</th><td><a href="room.php?room=east-european-studies">East European Studies</a></td></tr>
<tr><th scope="row">105</th><td><a href="room.php?room=ecology">Ecology</a></td></tr>
<tr><th scope="row">106</th><td><a href="room.php?room=economics-major">Economics Major</a></td></tr>
<tr><th scope="row">107</th><td><a href="room.php?room=education">Education</a></td></tr>
<tr><th scope="row">108</th><td><a href="room.php?room=education-administration">Education Administration</a></td></tr>
<tr><th scope="row">109</th><td><a href="room.php?room=education-of-the-deaf">Education of the Deaf</a></td></tr>
<tr><th scope="row">110</th><td><a href="room.php?room=educational-psychology">Educational Psychology</a></td></tr>
<tr><th scope="row">111</th><td><a href="room.php?room=electrical-engineering">Electrical Engineering</a></td></tr>
<tr><th scope="row">112</th><td><a href="room.php?room=elementary-education">Elementary Education</a></td></tr>
<tr><th scope="row">113</th><td><a href="room.php?room=engineering-mechanics">Engineering Mechanics</a></td></tr>
<tr><th scope="row">114</th><td><a href="room.php?room=engineering-physics">Engineering Physics</a></td></tr>
<tr><th scope="row">115</th><td><a href="room.php?room=english">English</a></td></tr>
<tr><th scope="row">116</th><td><a href="room.php?room=english-composition">English Composition</a></td></tr>
<tr><th scope="row">117</th><td><a href="room.php?room=english-literature-major">English Literature Major</a></td></tr>
<tr><th scope="row">118</th><td><a href="room.php?room=entomology">Entomology</a></td></tr>
<tr><th scope="row">119</th><td><a href="room.php?room=entrepreneurship-major">Entrepreneurship Major</a></td></tr>
<tr><th scope="row">120</th><td><a href="room.php?room=environmental-design-architecture">Environmental Design/Architecture</a></td></tr>
<tr><th scope="row">121</th><td><a href="room.php?room=environmental-science">Environmental Science</a></td></tr>
<tr><th scope="row">122</th><td><a href="room.php?room=environmental-health-engineering">Environmental/Environmental Health Engineering</a></td></tr>
<tr><th scope="row">123</th><td><a href="room.php?room=epidemiology">Epidemiology</a></td></tr>
<tr><th scope="row">124</th><td><a href="room.php?room=equine-studies">Equine Studies</a></td></tr>
<tr><th scope="row">125</th><td><a href="room.php?room=ethnic-studies">Ethnic Studies</a></td></tr>
<tr><th scope="row">126</th><td><a href="room.php?room=european-history">European History</a></td></tr>
<tr><th scope="row">127</th><td><a href="room.php?room=experimental-pathology">Experimental Pathology</a></td></tr>
<tr><th scope="row">128</th><td><a href="room.php?room=experimental-psychology">Experimental Psychology</a></td></tr>
<tr><th scope="row">129</th><td><a href="room.php?room=fashion-design">Fashion Design</a></td></tr>
<tr><th scope="row">130</th><td><a href="room.php?room=fashion-merchandising">Fashion Merchandising</a></td></tr>
<tr><th scope="row">131</th><td><a href="room.php?room=feed-science">Feed Science</a></td></tr>
<tr><th scope="row">132</th><td><a href="room.php?room=fiber-textiles-and-weaving-arts">Fiber, Textiles, and Weaving Arts</a></td></tr>
<tr><th scope="row">133</th><td><a href="room.php?room=film">Film</a></td></tr>
<tr><th scope="row">134</th><td><a href="room.php?room=finance">Finance</a></td></tr>
<tr><th scope="row">135</th><td><a href="room.php?room=floriculture">Floriculture</a></td></tr>
<tr><th scope="row">136</th><td><a href="room.php?room=food-science">Food Science</a></td></tr>
<tr><th scope="row">137</th><td><a href="room.php?room=forensic-science">Forensic Science</a></td></tr>
<tr><th scope="row">138</th><td><a href="room.php?room=forestry">Forestry</a></td></tr>
<tr><th scope="row">139</th><td><a href="room.php?room=french">French</a></td></tr>
<tr><th scope="row">140</th><td><a href="room.php?room=furniture-design">Furniture Design</a></td></tr>
<tr><th scope="row">141</th><td><a href="room.php?room=game-design">Game Design</a></td></tr>
<tr><th scope="row">142</th><td><a href="room.php?room=gay-and-lesbian-studies">Gay and Lesbian Studies</a></td></tr>
<tr><th scope="row">143</th><td><a href="room.php?room=genetics">Genetics</a></td></tr>
<tr><th scope="row">144</th><td><a href="room.php?room=geography">Geography</a></td></tr>
<tr><th scope="row">145</th><td><a href="room.php?room=geological-engineering">Geological Engineering</a></td></tr>
<tr><th scope="row">146</th><td><a href="room.php?room=geology">Geology</a></td></tr>
<tr><th scope="row">147</th><td><a href="room.php?room=geophysics">Geophysics</a></td></tr>
<tr><th scope="row">148</th><td><a href="room.php?room=german">German</a></td></tr>
<tr><th scope="row">149</th><td><a href="room.php?room=gerontology">Gerontology</a></td></tr>
<tr><th scope="row">150</th><td><a href="room.php?room=government-major">Government Major</a></td></tr>
<tr><th scope="row">151</th><td><a href="room.php?room=graphic-design">Graphic Design</a></td></tr>
<tr><th scope="row">152</th><td><a href="room.php?room=health-administration">Health Administration</a></td></tr>
<tr><th scope="row">153</th><td><a href="room.php?room=hebrew">Hebrew</a></td></tr>
<tr><th scope="row">154</th><td><a href="room.php?room=hispanic-american-studies">Hispanic-American, Puerto Rican, and Chicano Studies</a></td></tr>
<tr><th scope="row">155</th><td><a href="room.php?room=historic-preservation">Historic Preservation</a></td></tr>
<tr><th scope="row">156</th><td><a href="room.php?room=history">History</a></td></tr>
<tr><th scope="row">157</th><td><a href="room.php?room=home-economics">Home Economics</a></td></tr>
<tr><th scope="row">158</th><td><a href="room.php?room=horticulture">Horticulture</a></td></tr>
<tr><th scope="row">159</th><td><a href="room.php?room=hospitality">Hospitality</a></td></tr>
<tr><th scope="row">160</th><td><a href="room.php?room=human-development">Human Development</a></td></tr>
<tr><th scope="row">161</th><td><a href="room.php?room=human-resources-management-major">Human Resources Management Major</a></td></tr>
<tr><th scope="row">162</th><td><a href="room.php?room=illustration">Illustration</a></td></tr>
<tr><th scope="row">163</th><td><a href="room.php?room=industrial-design">Industrial Design</a></td></tr>
<tr><th scope="row">164</th><td><a href="room.php?room=industrial-engineering">Industrial Engineering</a></td></tr>
<tr><th scope="row">165</th><td><a href="room.php?room=industrial-management">Industrial Management</a></td></tr>
<tr><th scope="row">166</th><td><a href="room.php?room=industrial-psychology">Industrial Psychology</a></td></tr>
<tr><th scope="row">167</th><td><a href="room.php?room=information-technology">Information Technology</a></td></tr>
<tr><th scope="row">168</th><td><a href="room.php?room=interior-architecture">Interior Architecture</a></td></tr>
<tr><th scope="row">169</th><td><a href="room.php?room=interior-design">Interior Design</a></td></tr>
<tr><th scope="row">170</th><td><a href="room.php?room=international-agriculture">International Agriculture</a></td></tr>
<tr><th scope="row">171</th><td><a href="room.php?room=international-business">International Business</a></td></tr>
<tr><th scope="row">172</th><td><a href="room.php?room=international-relations">International Relations</a></td></tr>
<tr><th scope="row">173</th><td><a href="room.php?room=international-studies">International Studies</a></td></tr>
<tr><th scope="row">174</th><td><a href="room.php?room=islamic-studies">Islamic Studies</a></td></tr>
<tr><th scope="row">175</th><td><a href="room.php?room=italian">Italian</a></td></tr>
<tr><th scope="row">176</th><td><a href="room.php?room=japanese">Japanese</a></td></tr>
<tr><th scope="row">177</th><td><a href="room.php?room=jazz-studies">Jazz Studies</a></td></tr>
<tr><th scope="row">178</th><td><a href="room.php?room=jewelry-and-metalsmithing">Jewelry and Metalsmithing</a></td></tr>
<tr><th scope="row">179</th><td><a href="room.php?room=jewish-studies">Jewish Studies</a></td></tr>
<tr><th scope="row">180</th><td><a href="room.php?room=journalism">Journalism</a></td></tr>
<tr><th scope="row">181</th><td><a href="room.php?room=kinesiology">Kinesiology</a></td></tr>
<tr><th scope="row">182</th><td><a href="room.php?room=korean">Korean</a></td></tr>
<tr><th scope="row">183</th><td><a href="room.php?room=land-use-planning-and-management">Land Use Planning and Management</a></td></tr>
<tr><th scope="row">184</th><td><a href="room.php?room=landscape-architecture">Landscape Architecture</a></td></tr>
<tr><th scope="row">185</th><td><a href="room.php?room=landscape-horticulture">Landscape Horticulture</a></td></tr>
<tr><th scope="row">186</th><td><a href="room.php?room=latin-american-studies">Latin American Studies</a></td></tr>
<tr><th scope="row">187</th><td><a href="room.php?room=library-science">Library Science</a></td></tr>
<tr><th scope="row">188</th><td><a href="room.php?room=linguistics">Linguistics</a></td></tr>
<tr><th scope="row">189</th><td><a href="room.php?room=logistics-management">Logistics Management</a></td></tr>
<tr><th scope="row">190</th><td><a href="room.php?room=management-information-systems">Management Information Systems</a></td></tr>
<tr><th scope="row">191</th><td><a href="room.php?room=managerial-economics">Managerial Economics</a></td></tr>
<tr><th scope="row">192</th><td><a href="room.php?room=marine-biology-major">Marine Biology Major</a></td></tr>
<tr><th scope="row">193</th><td><a href="room.php?room=marine-science">Marine Science</a></td></tr>
<tr><th scope="row">194</th><td><a href="room.php?room=marketing-major">Marketing Major</a></td></tr>
<tr><th scope="row">195</th><td><a href="room.php?room=mass-communication">Mass Communication</a></td></tr>
<tr><th scope="row">196</th><td><a href="room.php?room=massage-therapy">Massage Therapy</a></td></tr>
<tr><th scope="row">197</th><td><a href="room.php?room=materials-science">Materials Science</a></td></tr>
<tr><th scope="row">198</th><td><a href="room.php?room=mathematics">Mathematics</a></td></tr>
<tr><th scope="row">199</th><td><a href="room.php?room=mechanical-engineering">Mechanical Engineering</a></td></tr>
<tr><th scope="row">200</th><td><a href="room.php?room=medical-technology">Medical Technology</a></td></tr>
<tr><th scope="row">201</th><td><a href="room.php?room=medieval-and-renaissance-studies">Medieval and Renaissance Studies</a></td></tr>
<tr><th scope="row">202</th><td><a href="room.php?room=mental-health-services">Mental Health Services</a></td></tr>
<tr><th scope="row">203</th><td><a href="room.php?room=merchandising-and-buying-operations">Merchandising and Buying Operations</a></td></tr>
<tr><th scope="row">204</th><td><a href="room.php?room=metallurgical-engineering">Metallurgical Engineering</a></td></tr>
<tr><th scope="row">205</th><td><a href="room.php?room=microbiology">Microbiology</a></td></tr>
<tr><th scope="row">206</th><td><a href="room.php?room=middle-eastern-studies">Middle Eastern Studies</a></td></tr>
<tr><th scope="row">207</th><td><a href="room.php?room=military-science">Military Science</a></td></tr>
<tr><th scope="row">208</th><td><a href="room.php?room=mineral-engineering">Mineral Engineering</a></td></tr>
<tr><th scope="row">209</th><td><a href="room.php?room=missions">Missions</a></td></tr>
<tr><th scope="row">210</th><td><a href="room.php?room=modern-greek">Modern Greek</a></td></tr>
<tr><th scope="row">211</th><td><a href="room.php?room=molecular-biology">Molecular Biology</a></td></tr>
<tr><th scope="row">212</th><td><a href="room.php?room=molecular-genetics">Molecular Genetics</a></td></tr>
<tr><th scope="row">213</th><td><a href="room.php?room=mortuary-science">Mortuary Science</a></td></tr>
<tr><th scope="row">214</th><td><a href="room.php?room=museum-studies">Museum Studies</a></td></tr>
<tr><th scope="row">215</th><td><a href="room.php?room=music">Music</a></td></tr>
<tr><th scope="row">216</th><td><a href="room.php?room=music-education">Music Education</a></td></tr>
<tr><th scope="row">217</th><td><a href="room.php?room=music-history-major">Music History Major</a></td></tr>
<tr><th scope="row">218</th><td><a href="room.php?room=music-management">Music Management</a></td></tr>
<tr><th scope="row">219</th><td><a href="room.php?room=music-therapy">Music Therapy</a></td></tr>
<tr><th scope="row">220</th><td><a href="room.php?room=musical-theater">Musical Theater</a></td></tr>
<tr><th scope="row">221</th><td><a href="room.php?room=native-american-studies">Native American Studies</a></td></tr>
<tr><th scope="row">222</th><td><a href="room.php?room=natural-resources-conservation">Natural Resources Conservation</a></td></tr>
<tr><th scope="row">223</th><td><a href="room.php?room=naval-architecture">Naval Architecture</a></td></tr>
<tr><th scope="row">224</th><td><a href="room.php?room=neurobiology">Neurobiology</a></td></tr>
<tr><th scope="row">225</th><td><a href="room.php?room=neuroscience">Neuroscience</a></td></tr>
<tr><th scope="row">226</th><td><a href="room.php?room=nuclear-engineering">Nuclear Engineering</a></td></tr>
<tr><th scope="row">227</th><td><a href="room.php?room=nursing-major">Nursing Major</a></td></tr>
<tr><th scope="row">228</th><td><a href="room.php?room=nutrition">Nutrition</a></td></tr>
<tr><th scope="row">229</th><td><a href="room.php?room=occupational-therapy">Occupational Therapy</a></td></tr>
<tr><th scope="row">230</th><td><a href="room.php?room=ocean-engineering">Ocean Engineering</a></td></tr>
<tr><th scope="row">231</th><td><a href="room.php?room=oceanography">Oceanography</a></td></tr>
<tr><th scope="row">232</th><td><a href="room.php?room=operations-management">Operations Management</a></td></tr>
<tr><th scope="row">233</th><td><a href="room.php?room=organizational-behavior-studies">Organizational Behavior Studies</a></td></tr>
<tr><th scope="row">234</th><td><a href="room.php?room=painting">Painting</a></td></tr>
<tr><th scope="row">235</th><td><a href="room.php?room=paleontology">Paleontology</a></td></tr>
<tr><th scope="row">236</th><td><a href="room.php?room=pastoral-studies">Pastoral Studies</a></td></tr>
<tr><th scope="row">237</th><td><a href="room.php?room=peace-studies">Peace Studies</a></td></tr>
<tr><th scope="row">238</th><td><a href="room.php?room=petroleum-engineering">Petroleum Engineering</a></td></tr>
<tr><th scope="row">239</th><td><a href="room.php?room=pharmacology">Pharmacology</a></td></tr>
<tr><th scope="row">240</th><td><a href="room.php?room=pharmacy">Pharmacy</a></td></tr>
<tr><th scope="row">241</th><td><a href="room.php?room=philosophy">Philosophy</a></td></tr>
<tr><th scope="row">242</th><td><a href="room.php?room=photography">Photography</a></td></tr>
<tr><th scope="row">243</th><td><a href="room.php?room=photojournalism-major">Photojournalism Major</a></td></tr>
<tr><th scope="row">244</th><td><a href="room.php?room=physical-education">Physical Education</a></td></tr>
<tr><th scope="row">245</th><td><a href="room.php?room=physical-therapy">Physical Therapy</a></td></tr>
<tr><th scope="row">246</th><td><a href="room.php?room=physician-assistant">Physician Assistant</a></td></tr>
<tr><th scope="row">247</th><td><a href="room.php?room=physics">Physics</a></td></tr>
<tr><th scope="row">248</th><td><a href="room.php?room=physiological-psychology">Physiological Psychology</a></td></tr>
<tr><th scope="row">249</th><td><a href="room.php?room=piano">Piano</a></td></tr>
<tr><th scope="row">250</th><td><a href="room.php?room=planetary-science">Planetary Science</a></td></tr>
<tr><th scope="row">251</th><td><a href="room.php?room=plant-pathology">Plant Pathology</a></td></tr>
<tr><th scope="row">252</th><td><a href="room.php?room=playwriting-and-screenwriting">Playwriting and Screenwriting</a></td></tr>
<tr><th scope="row">253</th><td><a href="room.php?room=political-communication">Political Communication</a></td></tr>
<tr><th scope="row">254</th><td><a href="room.php?room=political-science-major">Political Science Major</a></td></tr>
<tr><th scope="row">255</th><td><a href="room.php?room=portuguese">Portuguese</a></td></tr>
<tr><th scope="row">256</th><td><a href="room.php?room=pre-dentistry">Pre-Dentistry</a></td></tr>
<tr><th scope="row">257</th><td><a href="room.php?room=pre-law">Pre-Law</a></td></tr>
<tr><th scope="row">258</th><td><a href="room.php?room=pre-medicine">Pre-Medicine</a></td></tr>
<tr><th scope="row">259</th><td><a href="room.php?room=pre-optometry">Pre-Optometry</a></td></tr>
<tr><th scope="row">260</th><td><a href="room.php?room=pre-seminary">Pre-Seminary</a></td></tr>
<tr><th scope="row">261</th><td><a href="room.php?room=pre-veterinary-medicine">Pre-Veterinary Medicine</a></td></tr>
<tr><th scope="row">262</th><td><a href="room.php?room=printmaking">Printmaking</a></td></tr>
<tr><th scope="row">263</th><td><a href="room.php?room=psychology">Psychology</a></td></tr>
<tr><th scope="row">264</th><td><a href="room.php?room=public-administration">Public Administration</a></td></tr>
<tr><th scope="row">265</th><td><a href="room.php?room=public-health">Public Health</a></td></tr>
<tr><th scope="row">266</th><td><a href="room.php?room=public-policy-analysis">Public Policy Analysis</a></td></tr>
<tr><th scope="row">267</th><td><a href="room.php?room=public-relations-major">Public Relations Major</a></td></tr>
<tr><th scope="row">268</th><td><a href="room.php?room=radio-and-television">Radio and Television</a></td></tr>
<tr><th scope="row">269</th><td><a href="room.php?room=radiologic-technology">Radiologic Technology</a></td></tr>
<tr><th scope="row">270</th><td><a href="room.php?room=range-science-and-management">Range Science and Management</a></td></tr>
<tr><th scope="row">271</th><td><a href="room.php?room=real-estate">Real Estate</a></td></tr>
<tr><th scope="row">272</th><td><a href="room.php?room=recording-arts-technology">Recording Arts Technology</a></td></tr>
<tr><th scope="row">273</th><td><a href="room.php?room=recreation-management">Recreation Management</a></td></tr>
<tr><th scope="row">274</th><td><a href="room.php?room=rehabilitation-services">Rehabilitation Services</a></td></tr>
<tr><th scope="row">275</th><td><a href="room.php?room=religious-studies">Religious Studies</a></td></tr>
<tr><th scope="row">276</th><td><a href="room.php?room=respiratory-therapy">Respiratory Therapy</a></td></tr>
<tr><th scope="row">277</th><td><a href="room.php?room=risk-management">Risk Management</a></td></tr>
<tr><th scope="row">278</th><td><a href="room.php?room=rural-sociology">Rural Sociology</a></td></tr>
<tr><th scope="row">279</th><td><a href="room.php?room=russian">Russian</a></td></tr>
<tr><th scope="row">280</th><td><a href="room.php?room=scandinavian-studies">Scandinavian Studies</a></td></tr>
<tr><th scope="row">281</th><td><a href="room.php?room=sculpture">Sculpture</a></td></tr>
<tr><th scope="row">282</th><td><a href="room.php?room=slavic-languages-and-literatures">Slavic Languages and Literatures</a></td></tr>
<tr><th scope="row">283</th><td><a href="room.php?room=social-psychology">Social Psychology</a></td></tr>
<tr><th scope="row">284</th><td><a href="room.php?room=social-work">Social Work</a></td></tr>
<tr><th scope="row">285</th><td><a href="room.php?room=sociology">Sociology</a></td></tr>
<tr><th scope="row">286</th><td><a href="room.php?room=soil-science">Soil Science</a></td></tr>
<tr><th scope="row">287</th><td><a href="room.php?room=sound-engineering">Sound Engineering</a></td></tr>
<tr><th scope="row">288</th><td><a href="room.php?room=south-asian-studies">South Asian Studies</a></td></tr>
<tr><th scope="row">289</th><td><a href="room.php?room=southeast-asia-studies">Southeast Asia Studies</a></td></tr>
<tr><th scope="row">290</th><td><a href="room.php?room=spanish-major">Spanish Major</a></td></tr>
<tr><th scope="row">291</th><td><a href="room.php?room=special-education">Special Education</a></td></tr>
<tr><th scope="row">292</th><td><a href="room.php?room=speech-pathology">Speech Pathology</a></td></tr>
<tr><th scope="row">293</th><td><a href="room.php?room=sport-and-leisure-studies">Sport and Leisure Studies</a></td></tr>
<tr><th scope="row">294</th><td><a href="room.php?room=sports-management">Sports Management</a></td></tr>
<tr><th scope="row">295</th><td><a href="room.php?room=statistics-major">Statistics Major</a></td></tr>
<tr><th scope="row">296</th><td><a href="room.php?room=surveying">Surveying</a></td></tr>
<tr><th scope="row">297</th><td><a href="room.php?room=sustainable-resource-management">Sustainable Resource Management</a></td></tr>
<tr><th scope="row">298</th><td><a href="room.php?room=teacher-education">Teacher Education</a></td></tr>
<tr><th scope="row">299</th><td><a href="room.php?room=teaching-english-as-a-second-language">Teaching English as a Second Language</a></td></tr>
<tr><th scope="row">300</th><td><a href="room.php?room=technical-writing">Technical Writing</a></td></tr>
<tr><th scope="row">301</th><td><a href="room.php?room=technology-education">Technology Education</a></td></tr>
<tr><th scope="row">302</th><td><a href="room.php?room=textile-engineering">Textile Engineering</a></td></tr>
<tr><th scope="row">303</th><td><a href="room.php?room=theatre">Theatre</a></td></tr>
<tr><th scope="row">304</th><td><a href="room.php?room=theology">Theology</a></td></tr>
<tr><th scope="row">305</th><td><a href="room.php?room=tourism">Tourism</a></td></tr>
<tr><th scope="row">306</th><td><a href="room.php?room=toxicology">Toxicology</a></td></tr>
<tr><th scope="row">307</th><td><a href="room.php?room=turfgrass-science">Turfgrass Science</a></td></tr>
<tr><th scope="row">308</th><td><a href="room.php?room=urban-planning">Urban Planning</a></td></tr>
<tr><th scope="row">309</th><td><a href="room.php?room=urban-studies">Urban Studies</a></td></tr>
<tr><th scope="row">310</th><td><a href="room.php?room=visual-communication">Visual Communication</a></td></tr>
<tr><th scope="row">311</th><td><a href="room.php?room=voice">Voice</a></td></tr>
<tr><th scope="row">312</th><td><a href="room.php?room=web-design">Web Design</a></td></tr>
<tr><th scope="row">313</th><td><a href="room.php?room=webmaster-and-web-management">Webmaster and Web Management</a></td></tr>
<tr><th scope="row">314</th><td><a href="room.php?room=welding-engineering">Welding Engineering</a></td></tr>
<tr><th scope="row">315</th><td><a href="room.php?room=wildlife-management">Wildlife Management</a></td></tr>
<tr><th scope="row">316</th><td><a href="room.php?room=womens-studies">Women's Studies</a></td></tr>
<tr><th scope="row">317</th><td><a href="room.php?room=youth-ministries">Youth Ministries</a></td></tr>
<tr><th scope="row">318</th><td><a href="room.php?room=zoology">Zoology</a></td></tr>





                            </tbody>
                        </table>
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
