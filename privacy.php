<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Privacy Policy</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />
        
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <?php /* <?php /* <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /> */ ?> */ ?>
        
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
                background-color: deeppink;
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
                <a class="navbar-brand" href="index.php"><?= $site_name ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" href="terms.php">Terms and Conditions</a></li>
                        <li class="nav-item my-auto"><a class="nav-link" href="#holodeck">Holodeck</a></li>
                        <li class="nav-item"><a class="btn bg-pink text-white" style="margin-left: 0.65rem;" href="https://video-lensshare.com/Happy%20Hour#config.disableDeepLinking=true">Happy Hour</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5">
                <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" style="">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-dark font-weight-bold"><strong>Privacy Policy</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-dark mb-3">Our Privacy Policy is a document that explains how we collect, use, share, and protect the personal data of our users. It also informs our users about their rights and choices regarding their data and how they can exercise them.</p>
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
        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">1. Our Commitment to Your Privacy</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>Our Privacy Policy tells you what personally identifiable information <?= $site_name ?> may collect from you, how <?= $site_name ?> may process your personally identifiable information and how you can limit our use of your personally identifiable information.</p>
                        <p>We are committed to the security and privacy of all our users.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">2. Information We Collect</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <h5 class="mt-4">2.1 Information You Provide Us</h5>
                        <p><?= $site_name ?> collects personal information when you request information about our products or otherwise voluntarily provide such information through our Website or otherwise.</p>
                        <p>Generally, you will have control over the amount and type of information you provide to us when using our Website.</p>
                        <p>As a visitor to our Website, you can browse our Website to find out more about us.</p>
                        <h5 class="mt-4">2.2 Information Collected Automatically</h5>
                        <p>When you use our Website, we automatically collect certain information by the interaction of your mobile device or web browser with our Website.</p>
                        <h5 id="cookies" class="mt-4">2.3 Cookies</h5>
                        <p>Like many other websites, we use “Cookies.” A Cookie is a small piece of data stored on your computer or mobile device by your web browser. We use Cookies to identify the areas of our Website that you have visited. We also use cookies to enhance your online experience by eliminating the need to log in at all. No sign up or log in needed. Finally, we may use Cookies to personalize the content that you see on our Website or to customize marketing and other information we provide to you.</p>
                        <h5 class="mt-4">2.4 Other Automatically-Gathered Information</h5>
                        <p>We may automatically record information when you visit our Website, including the URL, IP address, browser type and language, and the date and time of your visit. We use this information to analyze trends among our users to help improve our Website or customize communications and information that you receive from us. If combined with other information we know about you from previous visits, the data possibly could be used to identify you personally.</p>
                        <h5 class="mt-4">2.5 Google Analytics Privacy Policy</h5>
                        <p>Our Website uses “Google Analytics” to collect information about the use of our Website. Google Analytics collects information such as how often users visit our site, what pages they visit when they do so, and what other sites they used prior to coming to our site. We use the information we get from Google Analytics to improve our Website. Google Analytics collects only the IP address assigned to you on the date you visit our site, rather than your name or other identifying information. We do not combine the information collected through the use of Google Analytics with personally identifiable information. Although Google Analytics plants a permanent cookie on your web browser to identify you as a unique user the next time you visit our site, the cookie cannot be used by anyone but Google. Google’s ability to use and share information collected by Google Analytics about your visits to our site is restricted by the Google Analytics Terms of Use.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">3. Video</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p><?= $site_name ?> is a video chat site, or webcam chat site. And privacy is of utmost importance to us. We use a 3rd party video conferencing platform that states that they do not record, save, or have access to any video streams that are used on their platform. The videos are shared peer-to-peer, so your stream is only viewable to other people in the room with you in realtime.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">4. How Information is Used</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>When we use or process personal data about you, we do so only as necessary to provide the products you use or otherwise with your consent, to comply with applicable law, or to fulfill other legitimate interests of you or us as described in this Policy.  Through our Website, you will be provided with the choice of which types of communications you will receive with us, and the ability to change those choices whenever you want.</p>
                        <h5 class="mt-4">4.1 Legally Required Releases of Information</h5>
                        <p>We may be legally required to disclose your personally identifiable information, if such disclosure is (a) required by law, or other legal process; (b) necessary to assist law enforcement officials or government enforcement agencies; (c) necessary to investigate violations of or otherwise enforce our Legal Terms; (d) necessary to protect us from legal action or claims from third parties including you; and/or (e) necessary to protect the legal rights, personal/real property, or personal safety of our company, clients, third party partners, employees, and affiliates.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">5. Retention Period for Personal Data</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>Except as otherwise mentioned in this Policy, we keep your personally identifiable information only for as long as required by us:</p>
                        <ul>
                        <li>To provide you with the products you have requested, or otherwise to perform or enforce a contract between us;</li>
                        <li>To continue to provide the best possible user experience to visitors who return to our website to collect information;</li>
                        <li>To comply with other law, including for any period demanded by tax authorities; or</li>
                        <li>To support a claim or defense in any court or in any legal, regulatory or administrative proceeding.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">6. Limitation of Liability</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>You assume the sole risk of transmitting your information as it relates to the use of this Website, and for any data corruptions, intentional interceptions, intrusions or unauthorized access to information, or of any delays, interruptions to or failures preventing the use this Website. In no event shall we be liable for any direct, indirect, special, consequential or monetary damages, including fees, and penalties in connection with your use of materials posted on this Website or connectivity to or from this site to any other site.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="gdpr" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">7. General Data Protection Regulation (GDPR)</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>This GDPR policy ensures <?= $site_name ?>:</p>
                        <ul>
                        <li>Complies with data protection law and follows good practice</li>
                        <li>Protects the rights of clients</li>
                        <li>Is open about how it stores and processes individuals’ data</li>
                        <li>Protects itself from data protection risks such as breaches of confidentiality, failure to offer choice and reputational damage</li>
                        </ul>
                        <h5 class="mt-4">7.1 Principles of GDPR</h5>
                        <p>Under the GDPR, the data protection principles set out the main responsibilities for <?= $site_name ?>. Article 5 of the GDPR requires that personal data shall be: (a) Processed lawfully, fairly and in a transparent manner in relation to individuals; (b) Collected for specified, explicit and legitimate purposes and not further processed in a manner that is incompatible with those purposes (c) Adequate, relevant and limited to what is necessary in relation to the purposes for which they are processed; (d) Accurate and, where necessary, kept up to date; every reasonable step must be taken to ensure that personal data that are inaccurate, having regard to the purposes for which they are processed, are erased or rectified without delay; (e) Kept in a form which permits identification of data subjects for no longer than is necessary for the purposes for which the personal data are processed; (f) Processed in a manner that ensures appropriate security of the personal data, including protection against unauthorized or unlawful processing and against accidental loss, destruction or damage.</p>
                        <h5 class="mt-4">7.2 Lawfulness of Processing Conditions</h5>
                        <p>Under the GDPR, there is requirement to have a valid lawful basis in order to process personal data. There are six available lawful bases for processing set out in Article 6 of the GDPR: (a) Consent: the data subject has given clear unambiguous consent for their personal data to be processed for a specific purpose (b) Contract: processing is necessary for the performance of a contract with the data subject or to take steps to enter into a contract (c) Legal obligation: processing is necessary for compliance with a legal obligation (d) Vital interests: processing is necessary to protect the vital interests of a data subject or another individual (e) Public task: processing is necessary for the performance of a task carried out in the public interest or in the exercise of official authority vested in the controller (f) Legitimate interests: processing is necessary for the purposes of legitimate interests pursued by the controller or a third party, except where such interests are overridden by the interests, rights or freedoms of the data subject.</p>
                        <h5 class="mt-4">7.3 Your Rights Under the GDPR</h5>
                        <p>The GDPR provides the following rights for individuals:</p>
                        <ol>
                        <li>The right to be informed</li>
                        <li>The right of access</li>
                        <li>The right to rectification</li>
                        <li>The right to erasure</li>
                        <li>The right to restrict processing</li>
                        <li>The right to data portability</li>
                        <li>The right to object</li>
                        <li>Rights in relation to automated decision making and profiling</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">8. Changes to Our Privacy Policy</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>We reserve the right to change this privacy policy at any time. If <?= $site_name ?> decides to change this Privacy Policy, we will post those changes on our Website so our users are always aware of what information we collect, use, and disclose. In all cases, your continued use of our Website after any change to this Privacy Policy will constitute your acceptance of such change.</p>
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
    </body>
</html>
