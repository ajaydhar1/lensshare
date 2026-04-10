<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="LensShare is a text + video chat platform where you can join interest-based rooms, meet people, and hang out — no sign-up needed." />
        <meta name="author" content="LensShare" />
        
        <!-- Page title -->
        <title>LensShare — Text & Video Chat Rooms for Shared Interests</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="LensShare: Text + Video Chat Rooms" />
        <meta name="twitter:description" content="Join interest-based rooms on LensShare for instant text and video chat. Meet new people, share conversations, and connect without creating an account." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/homepage/bg-masthead-home.png" />
        
        <meta property="og:url" content="https://lensshare.co/" />
        <meta property="og:title" content="LensShare: Text + Video Chat Rooms" />
        <meta property="og:description" content="Join interest-based rooms on LensShare for instant text and video chat. Meet new people, share conversations, and connect without creating an account." />
        <meta property="og:image" content="https://lensshare.co/assets/img/homepage/bg-masthead-home.png" />    
        <meta property="og:site_name" content="LensShare" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <link rel="preload" as="image" href="assets/img/homepage/bg-masthead-home.png">
        <link rel="preload" as="image" href="assets/img/all/webcam7.gif">
        <link rel="preload" as="image" href="assets/img/all/webcam2.gif">
        <link rel="preload" as="image" href="assets/img/all/webcam4.gif">
        <link rel="preload" as="image" href="assets/img/all/webcam6.gif">

        <style>

            @media screen and (max-width: 992px) {
                #masthead-text {
                    padding-top: 9rem !important;
                }
            }

            #mainNav.navbar-homepage {
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                background-color: #fff;
            }

            #mainNav.navbar-homepage .navbar-nav .nav-item .nav-link {
                color: #212529;
            }

            #mainNav.navbar-homepage .navbar-nav .nav-item .nav-link:hover {
                color: #f4623a;
            }

            header.masthead {
                background: url("assets/img/homepage/bg-masthead-home.png");
                background-position: bottom;
                margin-top: -7rem;
                padding-top: 0;
            }

            hr.divider {
                background-color: white;
            }

            hr.rectangle-divider {
                height: 1rem;
                max-width: 2rem;
                margin: 1.5rem auto;
                background-color: #cfcfcf;
                opacity: .5;
                z-index: 10;
            }

            #two-step {
                background-image: url(assets/img/homepage/lensshare-print.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
            }

            .cta-1 {
                box-shadow: 0 8px 20px rgba(0,0,0,0.3);
                border: 2px solid rgba(255,255,255,0.2);
            }

            .mb-responsive {
                margin-bottom: 0.5rem; /* mb-2 (mobile default) */
            }

            @media (min-width: 992px) { /* Bootstrap lg breakpoint */
                .mb-responsive {
                    margin-bottom: 1rem; /* mb-3 (desktop) */
                }
            }

        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light navbar-homepage fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">LensShare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item my-auto"><a class="nav-link" href="#how-it-works">How it Works</a></li>
                    <li class="nav-item my-auto"><a class="nav-link" href="#getting-started">Getting Started</a></li>
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
        <?php require_once('___beta-banner.php'); ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5">
                <div id="masthead-text" class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"><strong>Join Live Rooms</strong></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-7 align-self-baseline">
                        <p class="text-white mb-0">
                         Join live text and video rooms on any topic.
                        </p>
                        <p class="text-white mb-3">
                        Talk, listen, or just hang out — no sign-up required.
                        </p>
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
                    <div class="col-lg-4 text-center">
                        <!-- Primary CTA -->
                        <a class="btn btn-xl btn-primary cta-1 me-2 mb-responsive" href="#portals">
                            Join Quietly
                        </a>
                        <!-- Secondary CTA -->
                        <a class="btn btn-xl btn-outline-light me-2 mb-responsive" style="border: solid 1px var(--bs-light);" href="#holodeck">
                            Create a Room
                        </a>
                        <div>
                            <a id="" class="btn btn-xl text-white cta" href="#how-it-works">
                                <span>How it Works</span>
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h12m-5-5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="2"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Portals -->
        <section id="portals" class="page-section-smaller">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <a class="btn btn-dark btn-xl mb-3" href="work.php">Work Rooms</a>
                        <a class="btn btn-dark btn-xl mb-3" href="sports.php">Sports & Fitness</a>
                        <a class="btn btn-dark btn-xl mb-3" href="education.php">School & Education</a>
                        <a class="btn btn-dark btn-xl mb-3" href="entertainment.php">Entertainment</a>
                        <a class="btn btn-dark btn-xl mb-3" href="health.php">Health & Wellbeing</a>
                        <a class="btn btn-dark btn-xl mb-3" href="relationships.php">Relationships</a>
                        <a class="btn btn-dark btn-xl mb-3" href="technology.php">Technology</a>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <section class="page-section bg-light text-dark" id="activity" style="padding: 6rem 0;">
          <div class="container px-4 px-lg-5">

            <!-- Shared heading for the zone -->
            <div class="row justify-content-center mb-3">
              <div class="col-lg-10 text-center">
                <h2 class="h3 mb-2"><strong>Activity</strong></h2>
                <p class="text-muted mb-0">
                  See where people are hanging out now, or jump back into Spaces you’ve already visited.
                </p>
              </div>
            </div>

            <!-- Two separate cards underneath -->
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <!-- Active Rooms card (unchanged structurally) -->
                <div class="card activity-card">
                  <div class="card-body">
                    <h3 class="h6 text-uppercase text-muted mb-2">Active Rooms</h3>
                    <p class="text-muted small mb-2">
                      Spaces that currently have people hanging out.
                    </p>
                    <ul class="list-group list-group-flush" id="active-rooms-list">
                      <li class="list-group-item text-muted small" id="active-rooms-loading">
                        Checking for active rooms…
                      </li>
                    </ul>
                    <div class="mt-2 small text-muted" id="active-rooms-footer" style="display:none;">
                      Counts are approximate and update periodically.
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <!-- Recently visited card -->
                <div class="card activity-card" id="recent-rooms-card" style="display:none;">
                  <div class="card-body">
                    <h3 class="h6 text-uppercase text-muted mb-2">Your Recent Rooms</h3>
                    <p class="text-muted small mb-2" id="recent-rooms-empty" style="display:none;">
                      Join a few rooms and your recent activity will show up here.
                    </p>
                    <ul class="list-unstyled mb-0" id="recent-rooms-list"></ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- How it Works -->
        <section id="how-it-works" class="page-section-smaller" style="padding-top: 5rem; padding-bottom: 8rem">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0"><strong>How it Works</strong></h2>
                <hr class="divider" style="background-color: deeppink"/>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-4">
                            <div class="mb-2"><img src="assets/img/homepage/category-icon.png" alt="" aria-hidden="true"></div>
                            <h3 class="h4 mb-2"><strong>Choose a Portal</strong></h3>
                            <p class="text-muted mb-0">First, choose a portal based on your interest.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-4">
                            <div class="mb-2"><img src="assets/img/homepage/space-icon.png" alt="" aria-hidden="true"></div>
                            <h3 class="h4 mb-2"><strong>Click on a Room</strong></h3>
                            <p class="text-muted mb-0">Then click into a room to start a text or video chat on that topic.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-4">
                            <div class="mb-2"><img src="assets/img/homepage/call-icon.png" alt="" aria-hidden="true"></div>
                            <h3 class="h4 mb-2"><strong>Chat with People</strong></h3>
                            <p class="text-muted mb-0">Finally, just dive in, meet people, and have fun!</p>
                        </div>
                    </div>
                </div>
                <div id="two-step" class="row justify-content-center mt-5">
                    <div class="col-lg-4 text-center mt-5">
                        <img class="img-fluid mt-2" style="height: 400px;" src="assets/img/homepage/dancing.gif" alt="Two friends dancing in front of a LensShare backdrop.">
                    </div>
                </div>
            </div>
        </section>
        <!-- Getting Started -->
        <section class="page-section-smaller bg-light text-dark" id="getting-started">
            <div class="container px-4 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Getting Started</strong></h2>
                        <p class="text-muted">LensShare lets you create or join live “Rooms,” which are simple, interest-based spaces with text and video chat.</p>
                        <ul class="text-muted">
                            <li>Browse or create a room</li>
                            <li>Join when you're ready (Camera and mic are off by default)</li>
                            <li>Talk, listen, or just hang out</li>
                        </ul>
                        <p class="text-muted">No setup. No pressure. Just jump in.</p>
                        <span style="font-size: 2.7rem;">😀😆🤣😇</span>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <img class="explanation-image img-fluid" src="assets/img/homepage/space-book.gif" alt="Illustration representing LensShare as a social universe.">
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-top: -0.5rem;"/>
        <!-- How Portals Works -->
        <section class="page-section-smaller text-dark">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="explanation-image img-fluid" style="margin-top: -65px;" src="assets/img/homepage/portals.gif" alt="Illustration representing LensShare portals that group rooms by theme.">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Portals</strong></h2>

                        <p class="text-muted">Rooms are grouped into themed Portals to make them easier to explore.</p>
                        <p class="text-muted">Just choose a Portal → click a Room → and you’re instantly in a space where someone might already be hanging out.</p>
                        <p class="text-muted">Here is the complete list of Portals:</p>
                        <div class="mt-4">
                            <a class="btn btn-dark mb-3" href="work.php">Work Rooms</a>
                            <a class="btn btn-dark mb-3" href="sports.php">Sports & Fitness</a>
                            <a class="btn btn-dark mb-3" href="education.php">School & Education</a>
                            <a class="btn btn-dark mb-3" href="entertainment.php">Entertainment</a>
                            <a class="btn btn-dark mb-3" href="health.php">Health & Wellbeing</a>
                            <a class="btn btn-dark mb-3" href="relationships.php">Relationships</a>
                            <a class="btn btn-dark mb-3" href="technology.php">Technology</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="rectangle-divider" style="margin-bottom: -0.5rem;"/>
        <!-- What Rooms Are -->
        <section class="page-section-smaller bg-light text-dark">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-3"><strong>Rooms</strong></h2>
                        <p class="text-muted">Rooms are simple video + text chat spaces built around a topic.</p>
                        <p class="text-muted">You can join public Rooms or create a private one by typing a secret name into the Holodeck.</p>
                        <p class="text-muted">Each Portal has a Holodeck, and there’s one on the homepage too.</p>
                        <p class="text-muted">Here are examples of Rooms in the <a class="btn btn-dark btn-sm" href="sports.php">Sports & Fitness</a> Portal.</p>
                        <div class="mt-5">
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=football">Football</a>
                            <a class="btn btn-secondary btn-xl mb-3" href="room.php?room=baseball">Baseball</a>
                            <a class="btn btn-dark btn-xl mb-3" href="room.php?room=basketball">Basketball</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <img class="explanation-image img-fluid" style="margin-top: -65px;" src="assets/img/homepage/space.png" alt="Illustration representing a LensShare room as a shared space.">
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Rooms Top -->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=managers" title="Managers room">
                            <img class="img-fluid" src="assets/img/work/managers.gif" alt="" aria-hidden="true" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Managers</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=programmers" title="Programmers room">
                            <img class="img-fluid" src="assets/img/work/programmers.gif" alt="" aria-hidden="true" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Programmers</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=startups" title="Startups room">
                            <img class="img-fluid" src="assets/img/work/startups.gif" alt="" aria-hidden="true" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Startups</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once("___holodeck.php"); ?>

        <!-- Work Rooms Bottom -->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=marketers" title="Marketers room">
                            <img class="img-fluid" src="assets/img/work/marketers.gif" alt="" aria-hidden="true" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Marketers</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=accountants" title="Accountants room">
                            <img class="img-fluid" src="assets/img/work/accountants.gif" alt="" aria-hidden="true" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Accountants</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="room.php?room=doctors" title="Doctors room">
                            <img class="img-fluid" src="assets/img/work/doctors.gif" alt="" aria-hidden="true" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Room</div>
                                <div class="project-name">Doctors</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once("___footer.php"); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
            (function () {
                const API_URL = 'https://logfeed-socket-broker.onrender.com/api/active-rooms?min=1';

                if (!('fetch' in window)) return;

                // TEMP: connections -> users (since each tab opens 2 sockets right now)
                function normalizeUsers(rawCount) {
                    if (typeof rawCount !== 'number' || rawCount <= 0) return 0;
                    return Math.max(1, Math.ceil(rawCount / 2));
                }

                function buildRoomUrl(roomId) {
                    return 'room.php?room=' + encodeURIComponent(roomId);
                }

                function formatCountLabel(users) {
                    if (users <= 0) return '';
                    if (users === 1) return '1 person here now';
                    return users + ' people here now';
                }

                function isHot(users) {
                    return users >= 2; // HOT threshold
                }

                function populateActiveRoomsCard(rooms) {
                    const listEl = document.getElementById('active-rooms-list');
                    const loadingEl = document.getElementById('active-rooms-loading');
                    const footerEl = document.getElementById('active-rooms-footer');

                    if (!listEl) return; // not on this page

                    if (loadingEl) {
                        loadingEl.remove();
                    }

                    if (!rooms.length) {
                        const li = document.createElement('li');
                        li.className = 'list-group-item text-muted small';
                        li.textContent = 'No rooms are active right now. Check back soon or start a room yourself.';
                        listEl.appendChild(li);
                        return;
                    }

                    // Sort by user count desc
                    rooms.sort((a, b) => b.users - a.users);

                    // Limit to top 6 for now
                    rooms.slice(0, 6).forEach(room => {
                        const li = document.createElement('li');
                        li.className = 'list-group-item d-flex justify-content-between align-items-center';

                        const left = document.createElement('div');

                        const link = document.createElement('a');
                        link.href = buildRoomUrl(room.roomId);
                        link.textContent = room.label;
                        link.className = 'fw-semibold text-decoration-none';

                        left.appendChild(link);

                        const right = document.createElement('div');
                        right.className = 'd-flex align-items-center gap-2';

                        // Count pill
                        const countBadge = document.createElement('span');
                        countBadge.className = 'badge bg-secondary rounded-pill';
                        countBadge.textContent = formatCountLabel(room.users);
                        right.appendChild(countBadge);

                        // HOT badge
                        if (isHot(room.users)) {
                            const hotBadge = document.createElement('span');
                            hotBadge.className = 'badge bg-danger rounded-pill';
                            hotBadge.textContent = 'HOT';
                            right.appendChild(hotBadge);
                        }

                        li.appendChild(left);
                        li.appendChild(right);
                        listEl.appendChild(li);
                    });

                    if (footerEl) {
                        footerEl.style.display = 'block';
                    }
                }

                function prettyRoomLabel(roomId) {
                // Basic slug -> label guess: "magic-the-gathering" -> "Magic The Gathering"
                // You can later replace this with a lookup map if you want perfect names.
                    return roomId
                        .replace(/-/g, ' ')
                        .replace(/\b\w/g, c => c.toUpperCase());
                }

                window.addEventListener('DOMContentLoaded', function () {
                    const listEl = document.getElementById('active-rooms-list');
                    if (!listEl) return; // not on homepage

                    fetch(API_URL)
                    .then(r => r.json())
                    .then(data => {
                        if (!data || !Array.isArray(data.rooms)) {
                            populateActiveRoomsCard([]);
                            return;
                        }

                        const mapped = data.rooms
                        .map(r => {
                            if (!r || !r.room || typeof r.count !== 'number') return null;
                            const users = normalizeUsers(r.count);
                            if (users <= 0) return null;
                            return {
                                roomId: r.room,
                                users,
                                label: prettyRoomLabel(r.room)
                            };
                        })
                        .filter(Boolean);

                        populateActiveRoomsCard(mapped);
                    })
                    .catch(() => {
                    // On error, just show "no active rooms"
                        populateActiveRoomsCard([]);
                    });
                });
            })();
        </script>

        <script>
        (function () {
          function safeGetJSON(key, fallback) {
            try {
              var raw = localStorage.getItem(key);
              if (!raw) return fallback;
              return JSON.parse(raw);
            } catch (e) {
              return fallback;
            }
          }

          document.addEventListener('DOMContentLoaded', function () {
            var card  = document.getElementById('recent-rooms-card');
            var list  = document.getElementById('recent-rooms-list');
            var empty = document.getElementById('recent-rooms-empty');

            if (!card || !list) return;

            var recent = safeGetJSON('lensshare_recent_rooms', []);

            // Always show the card once JS runs
            card.style.display = 'block';

            if (!recent || !recent.length) {
              // No recent rooms yet → show helper text, leave list empty
              if (empty) empty.style.display = 'block';
              return;
            }

            if (empty) empty.style.display = 'none';

            recent.forEach(function (room) {
              var li = document.createElement('li');
              var a  = document.createElement('a');

              // 🔑 Prefer explicit URL (for Holodeck), fall back to room.php
              var href = room.url || ('room.php?room=' + encodeURIComponent(room.slug || ''));

              a.href        = href;
              a.textContent = room.name || room.slug || 'Recent Space';
              a.className   = 'link-primary d-inline-block mb-1';

              li.appendChild(a);
              list.appendChild(li);
            });
          });
        })();
        </script>



    </body>
</html>
