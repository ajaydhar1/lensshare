<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="A clear explanation of the rules, guidelines, and expectations for using LensShare, an early experimental project for connecting through shared-interest Rooms." />
        <meta name="author" content="LensShare" />
        <title>Terms of Use (Beta Version)</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />
        
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <style>

            header.masthead {
                background: url("assets/img/legal/bg-masthead-terms.png");
                background-position: bottom;
                margin-top: -7rem;
            }

            hr.rectangle-divider {
                height: 1rem;
                max-width: 2rem;
                margin: 1.5rem auto;
                background-color: #cfcfcf;
                opacity: .5;
                z-index: 10;
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
                        <li class="nav-item my-auto"><a class="nav-link" href="privacy.php">Privacy Policy</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#holodeck">Holodeck</a></li>
                        
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
                <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" style="">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-dark font-weight-bold"><strong>LensShare Terms of Use (Beta Version)</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-dark mb-3">LensShare is currently an early experimental project. It is not a commercial service, registered business, or paid offering. By using this website, you agree to the following Terms of Use, which are meant to keep the platform safe, respectful, and legally protected while it is in this testing phase.</p>
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
            </div>
        </header>
        <!-- Legal Copy -->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">

                        <p class="mb-4">Last updated: <?= date('F j, Y'); ?></p>

                        <div class="legal-section">
                            <h2 class="">1. Acceptance of These Terms</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>By accessing or using LensShare (the “Website”), you agree to these Terms. If you do not agree, you should not use the Website.</p>
                            <p>Because this is an early-stage project, these Terms are intentionally simple and may evolve over time.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">2. Beta Status & No Guarantees</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>LensShare is provided <strong>as an experimental, non-commercial test platform.</strong></p>
                            <p>You understand and agree that:</p>
                            <ul>
                                <li>The website may change, break, be removed, or become unavailable at any time.</li>
                                <li>Features are experimental and may not function reliably.</li>
                                <li>No guarantees of uptime, quality, accuracy, or availability are offered.</li>
                                <li>You use the Website <strong>at your own risk.</strong></li>
                            </ul>
                            <p>No user accounts, payment systems, or commercial services are offered.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">3. Changes to These Terms</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>We may update these Terms periodically. The revised version becomes effective once posted.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">4. Permitted Use</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>You are granted a limited, revocable license to access and use LensShare for personal, non-commercial purposes, provided you:</p>
                            <ul>
                                <li>Use the Website only for lawful purposes.</li>
                                <li>Do not harass, abuse, or harm other users.</li>
                                <li>Do not attempt to disrupt, overload, or misuse the site.</li>
                                <li>Do not attempt to copy, scrape, or reverse-engineer the platform.</li>
                            </ul>
                        </div>

                        <div class="legal-section">
                            <h2 class="">5. Prohibited Activities</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>You agree <strong>not</strong> to:</p>
                            <ul>
                                <li>Publish or copy Website materials elsewhere without permission.</li>
                                <li>Commercialize or resell any part of the Website.</li>
                                <li>Use automated tools (bots, scrapers, crawlers) to extract data.</li>
                                <li>Upload unlawful, offensive, harmful, or infringing content.</li>
                                <li>Attempt to gain unauthorized access to servers or systems.</li>
                            </ul>
                        </div>

                        <div class="legal-section">
                            <h2 class="">6. Intellectual Property</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>All code, designs, features, logos, and content on the Website belong to LensShare (or the respective content owners where applicable). You may not reproduce or distribute any of it without permission.</p>
                            <p>User-generated content remains the property of the user, but you grant LensShare a temporary license to display it on the Website.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">7. Third-Party Links</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>Some parts of the Website may link to third-party platforms (e.g., Vimeo, YouTube, Discord).</p>
                            <p>We are <strong>not responsible</strong> for those websites, their content, or their privacy practices. Use them at your own risk.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">8. No Warranties</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>The Website is offered <strong>“as is” and “as available.”</strong></p>
                            <p>To the fullest extent permitted by law:</p>
                            <ul>
                                <li>We make no promises or warranties about functionality.</li>
                                <li>We do not guarantee security, availability, or performance.</li>
                                <li>We do not guarantee accuracy or completeness of information.</li>
                            </ul>
                        </div>

                        <div class="legal-section">
                            <h2 class="">9. Limitation of Liability</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>To the maximum extent permitted by law:</p>
                            <ul>
                                <li>LensShare and its creator(s) shall not be liable for any damages arising out of your use of the Website, including — but not limited to — loss of data, service interruptions, or exposure to user content.</li>
                            </ul>
                            <p>This is especially important given the early testing nature of the platform.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">10. Indemnification</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>You agree to indemnify and hold harmless LensShare and its developer(s) from any claims, losses, or damages arising from your use of the Website or your violation of these Terms.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">11. Termination</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>We may suspend or remove access to the Website at any time, with or without notice, for any reason.</p>
                            <p>Because the Website is not a commercial service, no continued access is guaranteed.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">12. Severability</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>If any part of these Terms is found invalid or unenforceable, the remaining provisions remain in full effect.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">13. Entire Agreement</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>These Terms represent the complete agreement regarding your use of LensShare.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <?php require_once("___holodeck.php"); ?>

        <?php require_once("___footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
