<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Learn how LensShare handles information during its early experimental beta phase, including minimal data collection, local device storage, and user privacy protections." />
        <meta name="author" content="LensShare" />
        <title>Privacy Policy (Beta Version)</title>
        
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
                background: url("assets/img/legal/bg-masthead-privacy.png");
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
                opacity: 1;
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
                        <li class="nav-item my-auto"><a class="nav-link" href="terms.php">Terms of Use</a></li>
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
                        <h1 class="text-dark font-weight-bold"><strong>LensShare Privacy Policy (Beta Version)</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-dark mb-3">LensShare is currently an <strong>experimental, non-commercial project</strong>. This Privacy Policy explains what limited information we collect during this testing phase, how we use it, and the choices you have.</p>
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

                        <p class="mb-4">By using LensShare, you agree to the practices described here.</p>

                        <div class="legal-section">
                            <h2 class="">1. Overview</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>Because LensShare is not a business and does not operate as a commercial service, we intentionally collect <strong>as little personal information as possible</strong>.</p>
                            <p>We do not sell data, do not run ads, and do not use tracking for marketing purposes.</p>
                            <p>LensShare is a personal project still in development, and the features will evolve over time.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">2. Information We Collect</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p><strong>a. Information You Voluntarily Provide</strong></p>
                            <p>If you choose to interact with features such as:</p>
                            <ul>
                                <li>text rooms, chat spaces, or posted messages</li>
                                <li>video interactions</li>
                                <li>forms or feedback tools</li>
                            </ul>
                            <p>…you may provide information voluntarily. This may include text, usernames, or media you submit.</p>
                            <p><strong>b. Automatic Data (Minimal)</strong></p>
                            <p>When you visit the Website, standard web logs may record:</p>
                            <ul>
                                <li>your IP address (temporarily, as part of server logs)</li>
                                <li>your browser type and device information</li>
                                <li>the pages you visit</li>
                                <li>the date and time of your access</li>
                            </ul>
                            <p>These logs are used strictly for basic operation, debugging, and security, and are not analyzed for marketing or profiling.</p>
                            <p><strong>c. LocalStorage</strong></p>
                            <p>Some site preferences — such as UI state, video progress, or settings — may be saved <strong>on your device only</strong> using browser localStorage.</p>
                            <p>This data <strong>never leaves your device</strong>.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">3. What We Do <i>Not</i> Collect</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>LensShare does <strong>not</strong> collect or store:</p>
                            <ul>
                                <li>financial information</li>
                                <li>passwords</li>
                                <li>precise geolocation</li>
                                <li>biometric data</li>
                                <li>advertising identifiers</li>
                                <li>third-party analytic profiles</li>
                                <li>sensitive personal data unless you voluntarily provide it in text chats</li>
                            </ul>
                            <p>LensShare also does not use cookies for advertising or tracking.</p>
                            <p>Any cookies used are strictly functional (session, security, or settings).</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">4. How We Use Information</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>Data collected during the beta phase is used solely for:</p>
                            <ul>
                                <li>operating the Website</li>
                                <li>improving performance and stability</li>
                                <li>fixing bugs</li>
                                <li>preventing abuse or misuse</li>
                                <li>complying with legal obligations (if required)</li>
                            </ul>
                            <p>We do <strong>not</strong> use your data to advertise, market, or sell anything.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">5. Sharing Your Information</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>We do not <strong>sell, rent,</strong> or <strong>trade</strong> your personal information.</p>
                            <p>We may share data <strong>only if required</strong>:</p>
                            <ul>
                                <li>by law, subpoena, or legal request</li>
                                <li>to protect the Website from security threats</li>
                                <li>to enforce our Terms of Use</li>
                            </ul>
                            <p>Otherwise, your data remains with LensShare and its developer(s) only.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">6. Third-Party Services</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>LensShare may embed or link to third-party platforms, such as:</p>
                            <ul>
                                <li>Vimeo</li>
                                <li>YouTube</li>
                                <li>Twitch</li>
                                <li>external chat or video platforms</li>
                            </ul>
                            <p>These services may collect their own data independently. Their privacy practices are governed by their own policies, not ours.</p>
                            <p>Use them at your own discretion.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">7. Data Security</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>LensShare takes reasonable steps to protect the limited data it collects during this beta period. However:</p>
                            <ul>
                                <li>No system is perfectly secure</li>
                                <li>No guarantees are made regarding the security of data transmitted over the Internet</li>
                                <li>You use the Website at your own risk</li>
                            </ul>
                            <p>As LensShare grows, more formal security measures may be added.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">8. Children’s Privacy</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>LensShare is not intended for use by individuals under <strong>13 years of age</strong>.</p>
                            <p>We do not knowingly collect personal information from children under 13. If we become aware that such data was unintentionally collected, it will be deleted.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">9. International Users</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>LensShare is based in the United States.</p>
                            <p>By using the Website, you consent to having your information stored and processed in the United States.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">10. Your Choices</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>You may:</p>
                            <ul>
                                <li>stop using the Website at any time</li>
                                <li>clear your localStorage if you want to remove saved UI states</li>
                                <li>request deletion of any voluntarily submitted content (if applicable and technically feasible)</li>
                            </ul>
                            <p>Because we collect minimal data, there are very few user obligations or opt-out steps necessary.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">11. Changes to This Privacy Policy</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>We may update this Privacy Policy periodically.</p>
                            <p>When updated, the new version becomes effective once posted on this page.</p>
                        </div>

                        <div class="legal-section">
                            <h2 class="">12. Contact</h2>
                            <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                            <p>Because LensShare is an early experimental project and not a commercial service, we do not currently maintain a dedicated support or privacy contact channel. If you have concerns about how your information is handled or wish to stop using the Website, you may discontinue use at any time.</p>
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
