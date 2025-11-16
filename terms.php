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
        <title>Terms and Conditions</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />
        
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <?php /* <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /> */ ?>
        
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
                        <li class="nav-item my-auto"><a class="nav-link" href="privacy.php">Privacy Policy</a></li>
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
                        <h1 class="text-dark font-weight-bold"><strong>Terms and Conditions</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-dark mb-3">Terms and Conditions are rules and guidelines that <?= $site_name ?> has set up for our users to follow when using our website. They function as a contract between us and our users, and they outline the rights and responsibilities of both parties.</p>
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
                    <div class="col-lg-4 text-center">
                        <?php //<a class="btn btn-dark btn-xl" href="#about">How it Works</a> ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">1. Accepting These Terms</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>This document, our rules, policies and the other documents referenced make up our Terms and Conditions (“Terms”). The Terms are a legally binding contract between you and <?= $site_name ?>. This contract sets out your rights and responsibilities when you use <a href="https://<?= $site_domain ?>/">https://<?= $site_domain ?>/</a>, our Service (the “Service” or the “Website”). Please read them carefully.</p>
                        <p>BY USING OUR SERVICE, YOU’RE CREATING A LEGALLY BINDING CONTRACT TO COMPLY WITH ALL THE TERMS.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">2. Changes</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>We may amend the Terms at any time by posting a revised version on our website. The revised version will be effective at the time we post it. If we change the Terms in a way that reduces your rights or increases your responsibilities, we will provide you with a notification.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-dark" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10 text-white">
                        <h2 class="mt-0">3. Access</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>You are granted a non-exclusive, limited and revocable license to access the website and use its functionality on the condition that:</p>
                        <ol>
                        <li>You only use the website for lawful purposes;</li>
                        <li>You do not engage in any improper, indecent or offensive behavior while using the website;</li>
                        <li>You are not breaking any law in your relevant jurisdiction by accessing this website; </li>
                        <li>You will treat the website and its users with respect and will not partake in any conduct that could be considered bullying, harassment, degradation, insulting or otherwise demeaning to the human standard of any other person (as determined by us).</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">4. Restrictions</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>You are specifically restricted from all of the following:</p>
                        <ul>
                        <li>Publishing any Website material in any other media;</li>
                        <li>Selling, sublicensing and/or otherwise commercializing any Website material;</li>
                        <li>Publicly performing and/or showing any Website material;</li>
                        <li>Using this Website in any way that is or may be damaging to this Website;</li>
                        <li>Using this Website in any way that impacts user access to this Website;</li>
                        <li>Using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
                        <li>Engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website.</li>
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
                        <h2 class="mt-0">5. No Warranties</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>This Website is provided "as is,” with all faults, and <?= $site_name ?> expresses no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">6. Intellectual Property Rights</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p><?= $site_name ?> and our licensors retain all right, title, and interest in and to all Intellectual Property Rights related in and to the website and the website services.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-dark" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10 text-white">
                        <h2 class="mt-0">7. Limitation of Liability</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>In no event shall <?= $site_name ?>, nor any of its officers, directors and employees, be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract. <?= $site_name ?>, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">8. Indemnification</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>You hereby indemnify to the fullest extent <?= $site_name ?> from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">9. Third Party Trademark Rights</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>The Terms and Conditions apply to your use of the Service and you consent to the collection and use of your information, including personally identifiable information by <?= $site_name ?>. Our Service may contain links to third-party websites or services that we don’t own or control that enables you to export information to third party services. You may also need to use a third party’s service to use some features of our Service or use through our implementation of third party buttons. When you access these third-party services, you do so at your own risk. The third parties may require you to accept their own Terms of Use and Privacy Policies. <?= $site_name ?> is not a party to those agreements; they are solely between you and the third party.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">10. Copyright Infringement</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p><?= $site_name ?> is committed to complying with copyright and related laws and requires all website visitors and users to comply with these laws. Accordingly, you may not use the website to store any material or content, or disseminate any material or content, in any manner that constitutes an infringement of third party intellectual property rights.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-dark" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10 text-white">
                        <h2 class="mt-0">11. Severability</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">12. Variation of Terms</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p><?= $site_name ?> is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-light" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">13. Assignment</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p><?= $site_name ?> is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <h2 class="mt-0">14. Security</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p><?= $site_name ?> ensures the protection and honesty of the data it gathers by utilizing fitting authoritative conventions, specialized shields, and actual security controls intended to restrict access, identify and forestall the unapproved access, inappropriate divulgence, adjustment, or obliteration of the data under its influence.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-dark" id="" style="padding: 5rem 0;">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-10 text-white">
                        <h2 class="mt-0">15. Termination</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p><?= $site_name ?> reserves the right to change, suspend, limit or discontinue any of its Services, in whole or in part at any time for any reason, without notice (unless required by law).</p>
                        <p>We may refuse service to anyone and may terminate or suspend your services and your access to the website in whole or in part at any time, for any reason, without notice unless required by law.</p>
                        <p>If we terminate, limit or suspend your access to our website:</p>
                        <ul>
                        <li>You don’t have a contractual or legal right to continue to use our website.</li>
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
                        <h2 class="mt-0">16. Entire Agreement</h2>
                        <hr class="divider divider-dark" style="margin:1.5rem 0;" />
                        <p>This Agreement contains the entire agreement and understanding among the parties hereto with respect to the subject matter hereof, and supersedes all prior and contemporaneous agreements, understandings, inducements and conditions, express or implied, oral or written, of any nature whatsoever with respect to the subject matter hereof.</p>
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
