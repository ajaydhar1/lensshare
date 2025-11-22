<?php require_once("___config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Browse iHeartRadio live stations, playlists, and podcasts in one place. Jump into rap, pop, rock, sports, news, and more." />
        <meta name="author" content="LensShare" />

        <!-- Page title -->
        <title>iHeartRadio Hub — Live Stations, Playlists & Podcasts | LensShare</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="iHeartRadio Hub — LensShare" />
        <meta name="twitter:description" content="Explore iHeartRadio live stations, playlists, and podcasts by genre. Listen to rap, pop, rock, sports, news, and more in one hub." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/entertainment/heart.jpg" />

        <meta property="og:url" content="https://lensshare.co/iheartradio.php" />
        <meta property="og:title" content="iHeartRadio Hub — LensShare" />
        <meta property="og:description" content="Explore iHeartRadio live stations, playlists, and podcasts by genre. Listen to rap, pop, rock, sports, news, and more in one hub." />
        <meta property="og:image" content="https://lensshare.co/assets/img/entertainment/heart.jpg" />
        <meta property="og:site_name" content="LensShare" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />

        <style>
          body {
            background: #020617;
            color: #e5e7eb;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
          }

          h1, h2, h3, h4, h5, h6 {
            font-family: 'Saira Extra Condensed', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            color: #e5e7eb;
          }

          #mainNav.navbar-shrink {
            background-color: #ffffff;
          }

          .navbar-shrink .navbar-nav .nav-link {
            color: black !important;
          }

          .navbar-shrink .navbar-nav .nav-link:hover {
            color: #f4623a !important;
          }

          .navbar-toggler {
            background-color: #ffffffde;
          }

          .footer .small {
            font-family: Merriweather, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
          }

          h2.title-indent {
            margin-left: 3rem!important;
          }

          h1 {
            font-size: 3.5rem;
          }

          h2 {
            font-size: 2.4rem;
          }

          /* Page shell */
          .radio-shell {
            /* margin-top: 7.25rem; */
            /* padding: 1.5rem 0 3rem; */
            padding-bottom: 3rem;
          }

          /* Tabs + pills */
          .pill-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
          }

          .pill {
            border-radius: 999px;
            padding: 0.4rem 0.9rem;
            border: 1px solid #1e293b;
            background: #020617;
            color: #e5e7eb;
            font-size: 0.85rem;
            cursor: pointer;
            transition: background 0.15s ease, color 0.15s ease, border-color 0.15s ease;
            white-space: nowrap;
          }

          .pill:hover {
            background: #111827;
          }

          .pill.is-active {
            background: #6366f1;
            border-color: #6366f1;
            color: #e5e7eb;
          }

          .tab-section {
            display: none;
          }

          .tab-section.is-active {
            display: block;
          }

          /* Section headings */
          .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-top: 2rem;
            margin-bottom: 0.75rem;
          }

          .section-heading h2 {
            margin: 0;
          }

          .section-heading small {
            font-size: 0.8rem;
            color: #9ca3af;
            text-transform: none;
          }

          /* Station cards */
          .station {
            margin-bottom: 1rem;
          }

          .station-card {
            background: #020617;
            border-radius: 12px;
            border: 1px solid #111827;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0,0,0,0.6);
          }

          .station iframe {
            border: none;
            width: 100%;
            display: block;
          }

          .city-label {
            text-align: center;
            font-size: 1rem;
            margin-top: 2rem;
            margin-bottom: 0.75rem;
            color: #f97316;
          }

          hr {
            height: 1px;
            background-color: #111827;
            border: none;
            margin: 2.5rem 0 2rem;
          }

          .text-right {
            text-align: right;
          }

          /* Navbar tweak on dark bg */
          #mainNav {
            background: rgba(15,23,42,0.96);
            border-bottom: 1px solid #1f2933;
          }

          .navbar-brand,
          .navbar-nav .nav-link {
            color: #e5e7eb !important;
          }

          .navbar-nav .nav-link:hover {
            color: #a5b4fc !important;
          }

          @media (max-width: 767.98px) {
            .radio-shell {
              padding-top: 1rem;
            }
          }
        </style>


    </head>

    <body class="wide side-panel side-panel-static">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-secondary" href="index.php">LensShare</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item my-auto"><a class="nav-link" style="margin-right: 0.65rem;" href="entertainment.php">Entertainment</a></li>
                        <li class="nav-item"><a class="btn btn-primary text-white" href="https://video-lensshare.com/Happy%20Hour#config.disableDeepLinking=true">Happy Hour</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row justify-content-center mb-3 w-100" style="margin-top: 7.5rem !important;">
            <div class="col-lg-12 text-center">
                <img class="hi" src="assets/img/all/webcam7.gif">
                <img class="hi" src="assets/img/all/webcam2.gif">
                <img class="hi" src="assets/img/all/webcam4.gif">
                <img class="hi" src="assets/img/all/webcam6.gif">
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="container h-100">
                <div class="justify-content-center align-self-center text-center">       
                    <div class="radio-shell container-fluid">
                      <div class="container h-100">
                        <div class="justify-content-center align-self-center text-center mb-4">
                          <h1>i<span style="color:#ef4444;">Heart</span>Radio</h1>
                          <h4 class="text-muted" style="text-transform:none;">Live radio, playlists, and podcasts in one place.</h4>
                        </div>

                        <!-- Top-level tabs -->
                        <div class="mb-3">
                          <div class="pill-row">
                            <button class="pill tab-pill is-active" data-tab="live">Live Radio</button>
                            <button class="pill tab-pill" data-tab="playlists">Playlists</button>
                            <button class="pill tab-pill" data-tab="podcasts">Podcasts</button>
                          </div>
                        </div>

                        <!-- Live Radio genre pills -->
                        <div class="mb-3" id="live-genre-row">
                          <div class="pill-row">
                            <button class="pill genre-pill is-active" data-genre="all">All</button>
                            <button class="pill genre-pill" data-genre="rap">Rap</button>
                            <button class="pill genre-pill" data-genre="pop">Pop</button>
                            <button class="pill genre-pill" data-genre="rock">Rock</button>
                            <button class="pill genre-pill" data-genre="sports">Sports</button>
                            <button class="pill genre-pill" data-genre="news">News</button>
                          </div>
                        </div>

                </div>

                    <!-- LIVE RADIO TAB -->
                    <section class="tab-section is-active" data-tab="live">
                      <div class="section-heading">
                        <h2>Live Radio</h2>
                        <small>Browse stations by city or genre.</small>
                      </div>

                      <h4 class="city-label">New York City</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station rap">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/power-1051-1481/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station rap">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/hot-97-6046/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/z100-1469/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>

                      <!-- Los Angeles -->
                      <h4 class="city-label">Los Angeles</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station rap">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/power106-6045/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station rap">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/real-923-181/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/1027-kiis-fm-los-angeles-185/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>

                      <!-- Chicago, Atlanta, Miami, Albany, Sports, News ... -->
                      <!-- Take your existing blocks and just wrap each iframe in .station-card, keep their .station rap/pop/etc classes on the col divs -->

                       <!-- Chicago -->
                      <h4 class="city-label">Chicago</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station rap">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/1075-wgci-chicago-841/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/1035-kiss-fm-849/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station rock">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/rock-955-857/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>


                       <!-- Atlanta -->
                      <h4 class="city-label">Atlanta</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station rap">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/hot-1079-8936/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/power-961-741/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station rock">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/971-the-river-5886/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>


                      <!-- Miami -->
                      <h4 class="city-label">Miami</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station rap">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/99jamz-wedr-5903/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/hits-973-5906/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/y100-miami-1007fm-561/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>


                       <!-- Albany -->
                      <h4 class="city-label">Albany</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/995-the-river-1433/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station news">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/news-radio-1031-and-810-wgy-1413/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station rock">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/rock-nation-4443/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/power-973-729/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station pop">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/kiss-1023-1421/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station rock">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/pyx-106-albany-1429/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>


                      <!-- Example for one more: -->
                      <!-- Sports -->
                      <h4 class="city-label">Sports</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station sports">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/espn-radio-7903/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station sports">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/fox-sports-radio-4732/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station sports">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/sportsgrid-radio-network-7417/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>





                       <!-- News -->
                      <h4 class="city-label">News</h4>
                      <div class="row justify-content-center">
                        <div class="col-lg-4 station new">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/nbc-news-radio-6043/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station news">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/fox-news-radio-8627/?embed=true"></iframe>
                          </div>
                        </div>
                        <div class="col-lg-4 station news">
                          <div class="station-card">
                            <iframe allow="autoplay" height="200" loading="lazy" src="https://www.iheart.com/live/associated-press-radio-6986/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>


                    </section>
                   


                
                <!-- PLAYLISTS TAB -->
                <section class="tab-section" data-tab="playlists">
                  <div class="section-heading">
                    <h2>Playlists</h2>
                    <small>Curated iHeartRadio playlists to match your mood.</small>
                  </div>

                  <!-- Rap Reign Playlist -->
                  <h4 class="city-label">Rap Reign Playlist</h4>
                  <div class="row justify-content-center mb-4">
                    <div class="col-lg-12 station rap">
                      <div class="station-card">
                        <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/playlist/rap-reign-312064750-PurSNURsazhXeGsH5tpvq5/?embed=true"></iframe>
                      </div>
                    </div>
                  </div>


                  <!-- iHeartRadio Leaderboard -->
                  <h4 class="city-label">iHeartRadio Leaderboard</h4>
                  <div class="row justify-content-center mb-4">
                    <div class="col-lg-12 station pop">
                      <div class="station-card">
                        <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/playlist/iheartradio-leaderboard-312064750-2AL8dU5D7GquY5KGTcNwUm/?embed=true"></iframe>
                      </div>
                    </div>
                  </div>


                  <!-- The New Hit list -->
                  <h4 class="city-label">The New Hit list</h4>
                  <div class="row justify-content-center mb-4">
                    <div class="col-lg-12 station pop">
                      <div class="station-card">
                        <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/playlist/the-new-hit-list-312064750-RbisVGYJ9GmN5DDwGabFkf/?embed=true"></iframe>
                      </div>
                    </div>
                  </div>


                  <!-- The New Hit list -->
                  <h4 class="city-label">Pop Top 40</h4>
                  <div class="row justify-content-center mb-4">
                    <div class="col-lg-12 station pop">
                      <div class="station-card">
                        <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/playlist/pop-top-40-312064750-GyZXToRd3rRqdcpVy8A6JW/?embed=true"></iframe>
                      </div>
                    </div>
                  </div>


                  <!-- The New Hit list -->
                  <h4 class="city-label">Rock Top 40</h4>
                  <div class="row justify-content-center mb-4">
                    <div class="col-lg-12 station rock">
                      <div class="station-card">
                        <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/playlist/rock-top-40-312064750-NJCTNpPvjHrjdW92uGvRBG/?embed=true"></iframe>
                      </div>
                    </div>
                  </div>


                  <!-- iHeartRadio Leaderboard, The New Hit List, Pop Top 40, Rock Top 40 ... -->
                  <!-- Wrap each in .station-card like above -->
                </section>


                    <!-- PODCASTS TAB -->
                    <section class="tab-section" data-tab="podcasts">
                      <div class="section-heading">
                        <h2>Podcasts</h2>
                        <small>Long-form shows, interviews, and commentary.</small>
                      </div>

                      <h4 class="city-label">The Megyn Kelly Show</h4>
                      <div class="row justify-content-center mb-4">
                        <div class="col-lg-12 station news">
                          <div class="station-card">
                            <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/podcast/269-the-megyn-kelly-show-71878122/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>

                      <h4 class="city-label">On Purpose with Jay Shetty</h4>
                      <div class="row justify-content-center mb-4">
                        <div class="col-lg-12 station news">
                          <div class="station-card">
                            <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/podcast/1119-on-purpose-with-jay-shett-30589432/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>

                      <h4 class="city-label">The Sean Hannity Show</h4>
                      <div class="row justify-content-center mb-5">
                        <div class="col-lg-12 station news">
                          <div class="station-card">
                            <iframe allow="autoplay" height="300" loading="lazy" src="https://www.iheart.com/podcast/51-the-sean-hannity-show-24392822/?embed=true"></iframe>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div> <!-- .container -->
                </div> <!-- .radio-shell -->
            </div>
        </div>
        
        <?php require_once('___footer.php'); ?>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables/datatables-demo.js"></script>

        <script>
          $(function () {
            // --- Genre filtering for Live Radio ---
            function filterStations(genre) {
              if (genre === 'all') {
                $('.station').show();
              } else {
                $('.station').each(function () {
                  const $el = $(this);
                  if ($el.hasClass(genre)) {
                    $el.show();
                  } else {
                    $el.hide();
                  }
                });
              }
            }

            $('.genre-pill').on('click', function () {
              const $btn = $(this);
              const genre = $btn.data('genre');

              $('.genre-pill').removeClass('is-active');
              $btn.addClass('is-active');

              filterStations(genre);
            });

            // --- Tab switching (Live / Playlists / Podcasts) ---
            $('.tab-pill').on('click', function () {
              const $btn = $(this);
              const tab = $btn.data('tab');

              $('.tab-pill').removeClass('is-active');
              $btn.addClass('is-active');

              $('.tab-section').removeClass('is-active');
              $('.tab-section[data-tab="' + tab + '"]').addClass('is-active');

              // Only show genre pills row on Live tab
              if (tab === 'live') {
                $('#live-genre-row').show();
              } else {
                $('#live-genre-row').hide();
              }
            });

            // Default state
            filterStations('all');
            $('#live-genre-row').show();
          });
        </script>

    </body>

</html>