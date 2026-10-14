<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("___google-analytics.php"); ?>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Explore Sports & Fitness Rooms where you can talk pro sports, share workouts, and support each other’s athletic and fitness goals." />
        <meta name="author" content="LensShare" />

        <!-- Page title -->
        <title>Sports & Fitness Rooms — Talk Sports, Share Workouts | LensShare</title>

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

        <!-- Twitter card and Open Graph-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Sports & Fitness Rooms — LensShare" />
        <meta name="twitter:description" content="Join Sports & Fitness Rooms to talk games, compare training, and stay motivated with others who love being active." />
        <meta name="twitter:image" content="https://lensshare.co/assets/img/sports/santa-snowboarding.jpeg" />

        <meta property="og:url" content="https://lensshare.co/sports.php" />
        <meta property="og:title" content="Sports & Fitness Rooms — LensShare" />
        <meta property="og:description" content="Join Sports & Fitness Rooms to talk games, compare training, and stay motivated with others who love being active." />
        <meta property="og:image" content="https://lensshare.co/assets/img/sports/santa-snowboarding.jpeg" />
        <meta property="og:site_name" content="LensShare" />

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <?php require_once __DIR__ . '/includes/nav/site-nav.php'; ls_nav_head(); ?>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <link href="assets/css/ls-portal.css" rel="stylesheet" />

    </head>
    <body id="page-top" class="ls-portal ls-portal--sports">
        <!-- Navigation-->
        <?php ls_nav_render([
            'portal' => 'sports',
            'holodeck_local' => true,
            'page_links' => [
                ['label' => 'Pro Leagues', 'href' => '#pro-league-fans'],
                ['label' => 'Sports', 'href' => '#sports'],
                ['label' => 'Fitness', 'href' => '#fitness'],
                ['label' => 'Sports Talk Central', 'href' => '#sports-talk-central'],
            ],
        ]); ?>
        <!-- Hero-->
        <header class="lp-hero" id="main-content">
            <div class="lp-wrap">
                <p class="lp-eyebrow">Portal</p>
                <h1 class="lp-title">Sports &amp; <em>Fitness</em></h1>
                <p class="lp-lede">This Portal is for people who love professional sports, enjoy working out, or participate in athletics. Share your interests, connect with others, and stay active together.</p>
                <div class="lp-avatars">
                    <img class="hi" src="assets/img/all/webcam7.gif" alt="" aria-hidden="true">
                    <img class="hi" src="assets/img/all/webcam2.gif" alt="" aria-hidden="true">
                    <img class="hi" src="assets/img/all/webcam4.gif" alt="" aria-hidden="true">
                    <img class="hi" src="assets/img/all/webcam6.gif" alt="" aria-hidden="true">
                </div>
                <div class="lp-actions">
                    <a class="lp-btn lp-btn--primary" href="#pro-league-fans">Explore Rooms</a>
                    <a class="lp-btn lp-btn--ghost" href="room.php?room=sports-talk-central">Join Sports Talk Central</a>
                </div>
                <nav class="lp-chips" aria-label="Sports Portal sections">
                    <a class="lp-chip" href="#pro-league-fans">Pro Leagues</a>
                    <a class="lp-chip" href="#sports">Sports</a>
                    <a class="lp-chip" href="#fitness">Fitness</a>
                    <a class="lp-chip" href="#sports-talk-central">Sports Talk Central</a>
                </nav>
            </div>
        </header>
        <section class="lp-section" id="pro-league-fans" aria-labelledby="pro-league-fans-title">
            <div class="lp-wrap">
                <div class="lp-head lp-reveal">
                    <h2 class="lp-h2" id="pro-league-fans-title">Pro League <em>Fans</em></h2>
                    <p>Jump into a Pro League Room if you love watching the games, following trades, and reacting in real time. Talk matchups, big plays, controversies, and everything happening around your favorite teams and players.</p>
                </div>
                <div class="lp-layout">
                    <div class="lp-grid lp-grid--3 lp-reveal">
                            <a class="lp-card" href="room.php?room=nfl-fans">
                                <span class="lp-card__icon" aria-hidden="true">🏈</span>
                                <span class="lp-card__name">NFL Fans</span>
                                <span class="lp-card__desc">Sunday slates, trades and hot takes.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=nba-fans">
                                <span class="lp-card__icon" aria-hidden="true">🏀</span>
                                <span class="lp-card__name">NBA Fans</span>
                                <span class="lp-card__desc">Highlights, rivalries and playoff runs.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=mlb-fans">
                                <span class="lp-card__icon" aria-hidden="true">⚾</span>
                                <span class="lp-card__name">MLB Fans</span>
                                <span class="lp-card__desc">Box scores, bullpens and pennant races.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=nhl-fans">
                                <span class="lp-card__icon" aria-hidden="true">🏒</span>
                                <span class="lp-card__name">NHL Fans</span>
                                <span class="lp-card__desc">Big hits, big saves, overtime drama.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=global-football-fans">
                                <span class="lp-card__icon" aria-hidden="true">⚽</span>
                                <span class="lp-card__name">Soccer / Global Football</span>
                                <span class="lp-card__desc">Leagues and cups from around the world.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=college-football">
                                <span class="lp-card__icon" aria-hidden="true">🏟️</span>
                                <span class="lp-card__name">College Football</span>
                                <span class="lp-card__desc">Saturday traditions and rankings debates.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=college-basketball">
                                <span class="lp-card__icon" aria-hidden="true">🎓</span>
                                <span class="lp-card__name">College Basketball</span>
                                <span class="lp-card__desc">Bracket talk and buzzer-beaters.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=fantasy-sports">
                                <span class="lp-card__icon" aria-hidden="true">📊</span>
                                <span class="lp-card__name">Fantasy Sports</span>
                                <span class="lp-card__desc">Lineups, waiver wires and trade advice.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=big-fight-night">
                                <span class="lp-card__icon" aria-hidden="true">🥊</span>
                                <span class="lp-card__name">Big Fight Night (Boxing &amp; MMA)</span>
                                <span class="lp-card__desc">Fight cards, predictions and live reactions.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=motorsport-fans">
                                <span class="lp-card__icon" aria-hidden="true">🏎️</span>
                                <span class="lp-card__name">Motorsport &amp; F1 Fans</span>
                                <span class="lp-card__desc">Race weekends, strategy and pit-lane drama.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                    </div>
                    <div class="lp-media lp-reveal">
                        <img src="assets/img/sports/pro-leagues.gif" alt="LeBron James crying" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <hr class="lp-rule" />
        <section class="lp-section lp-section--tint" id="sports" aria-labelledby="sports-title">
            <div class="lp-wrap">
                <div class="lp-head lp-reveal">
                    <h2 class="lp-h2" id="sports-title">Play <em>Sports</em></h2>
                    <p>Join a Sports Room to talk training, technique, and everything that goes into playing the sports you love. Compare experiences, improve your skills, and connect with others who share your passion for staying active.</p>
                </div>
                <div class="lp-layout lp-layout--flip">
                    <div class="lp-grid lp-reveal">
                            <a class="lp-card" href="room.php?room=football">
                                <span class="lp-card__icon" aria-hidden="true">🏈</span>
                                <span class="lp-card__name">Football – Play &amp; Strategy</span>
                                <span class="lp-card__desc">Plays, positions and playbook ideas.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=baseball">
                                <span class="lp-card__icon" aria-hidden="true">⚾</span>
                                <span class="lp-card__name">Baseball &amp; Ballpark Talk</span>
                                <span class="lp-card__desc">Swing mechanics and diamond life.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=basketball">
                                <span class="lp-card__icon" aria-hidden="true">🏀</span>
                                <span class="lp-card__name">Basketball &amp; Pick-Up Runs</span>
                                <span class="lp-card__desc">Find runs and sharpen your game.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=hockey">
                                <span class="lp-card__icon" aria-hidden="true">🏒</span>
                                <span class="lp-card__name">Hockey &amp; Ice Time</span>
                                <span class="lp-card__desc">Skating, stick skills and rink stories.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=soccer">
                                <span class="lp-card__icon" aria-hidden="true">⚽</span>
                                <span class="lp-card__name">Soccer &amp; Footwork</span>
                                <span class="lp-card__desc">Drills, touches and pitch tactics.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=golf">
                                <span class="lp-card__icon" aria-hidden="true">⛳</span>
                                <span class="lp-card__name">Golf &amp; Range Sessions</span>
                                <span class="lp-card__desc">Swing tips and course chatter.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=tennis">
                                <span class="lp-card__icon" aria-hidden="true">🎾</span>
                                <span class="lp-card__name">Tennis &amp; Court Sessions</span>
                                <span class="lp-card__desc">Serves, rallies and match play.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=auto-racing">
                                <span class="lp-card__icon" aria-hidden="true">🏁</span>
                                <span class="lp-card__name">Motorsport &amp; Auto Racing</span>
                                <span class="lp-card__desc">Track days and racing culture.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=boxing">
                                <span class="lp-card__icon" aria-hidden="true">🥊</span>
                                <span class="lp-card__name">Boxing – Training &amp; Fights</span>
                                <span class="lp-card__desc">Gym work, technique and fight talk.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=mma">
                                <span class="lp-card__icon" aria-hidden="true">🥋</span>
                                <span class="lp-card__name">MMA &amp; Fight Camp</span>
                                <span class="lp-card__desc">Mixed styles and camp routines.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=wrestling">
                                <span class="lp-card__icon" aria-hidden="true">🤼</span>
                                <span class="lp-card__name">Wrestling &amp; Grappling</span>
                                <span class="lp-card__desc">Takedowns, holds and mat time.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=gymnastics">
                                <span class="lp-card__icon" aria-hidden="true">🤸</span>
                                <span class="lp-card__name">Gymnastics &amp; Tumbling</span>
                                <span class="lp-card__desc">Flips, form and flexibility.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                    </div>
                    <div class="lp-media lp-reveal">
                        <img src="assets/img/sports/sports.gif" alt="Beams tilting back and forth" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <hr class="lp-rule" />
        <section class="lp-section" id="fitness" aria-labelledby="fitness-title">
            <div class="lp-wrap">
                <div class="lp-head lp-reveal">
                    <h2 class="lp-h2" id="fitness-title">Stay <em>Fit</em></h2>
                    <p>Use these rooms to share your fitness goals, routines, and progress with others who train the same way you do. Support each other and stay motivated.</p>
                </div>
                <div class="lp-layout">
                    <div class="lp-grid lp-grid--3 lp-reveal">
                            <a class="lp-card" href="room.php?room=strength-training">
                                <span class="lp-card__icon" aria-hidden="true">🏋️</span>
                                <span class="lp-card__name">Lifting Weights</span>
                                <span class="lp-card__desc">Programs, form checks and PRs.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=calisthenics">
                                <span class="lp-card__icon" aria-hidden="true">💪</span>
                                <span class="lp-card__name">Bodyweight &amp; Calisthenics</span>
                                <span class="lp-card__desc">Pull-ups, push-ups and skills.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=cardio-hiit">
                                <span class="lp-card__icon" aria-hidden="true">🔥</span>
                                <span class="lp-card__name">Cardio &amp; HIIT</span>
                                <span class="lp-card__desc">High-energy intervals and conditioning.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=running">
                                <span class="lp-card__icon" aria-hidden="true">🏃</span>
                                <span class="lp-card__name">Running &amp; Jogging</span>
                                <span class="lp-card__desc">Miles, races and recovery.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=cycling">
                                <span class="lp-card__icon" aria-hidden="true">🚴</span>
                                <span class="lp-card__name">Cycling &amp; Biking</span>
                                <span class="lp-card__desc">Rides, routes and gear talk.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=walking">
                                <span class="lp-card__icon" aria-hidden="true">🚶</span>
                                <span class="lp-card__name">Walking &amp; Daily Steps</span>
                                <span class="lp-card__desc">Easy movement and step goals.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=mobility-stretching">
                                <span class="lp-card__icon" aria-hidden="true">🧘</span>
                                <span class="lp-card__name">Mobility &amp; Stretching</span>
                                <span class="lp-card__desc">Flexibility and injury prevention.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=swimming">
                                <span class="lp-card__icon" aria-hidden="true">🏊</span>
                                <span class="lp-card__name">Swimming &amp; Water Training</span>
                                <span class="lp-card__desc">Laps, strokes and pool workouts.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=cross-training">
                                <span class="lp-card__icon" aria-hidden="true">⚡</span>
                                <span class="lp-card__name">Cross Training</span>
                                <span class="lp-card__desc">Mix it up across disciplines.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                            <a class="lp-card" href="room.php?room=fitness-wearables">
                                <span class="lp-card__icon" aria-hidden="true">⌚</span>
                                <span class="lp-card__name">Fitness Trackers &amp; Wearables</span>
                                <span class="lp-card__desc">Metrics, devices and data.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                    </div>
                    <div class="lp-media lp-reveal">
                        <img src="assets/img/sports/fitness.gif" alt="Balls swinging in a Newton's Cradle" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <hr class="lp-rule" />
        <section class="lp-section lp-section--tint" id="sports-talk-central" aria-labelledby="sports-talk-central-title">
            <div class="lp-wrap">
                <div class="lp-head lp-reveal">
                    <h2 class="lp-h2" id="sports-talk-central-title">Sports Talk <em>Central</em></h2>
                    <p>Sports Talk Central is the main hub for sports fans in this Portal. Talk about games, trades, players, and storylines across any league — or just hang out and react in real time.</p>
                </div>
                <div class="lp-layout lp-layout--flip">
                    <div class="lp-grid lp-reveal">
                            <a class="lp-card" href="room.php?room=sports-talk-central">
                                <span class="lp-card__icon" aria-hidden="true">🎙️</span>
                                <span class="lp-card__name">Sports Talk Central</span>
                                <span class="lp-card__desc">Every league, every storyline, live.</span>
                                <span class="lp-card__go">Join room <span aria-hidden="true">→</span></span>
                            </a>
                    </div>
                    <div class="lp-media lp-reveal">
                        <img src="assets/img/sports/sports-talk.gif" alt="Patrick Mahomes being put on a playing card" loading="lazy">
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
        <?php ls_nav_scripts(); ?>

        <script>
            (function () {
                var b = document.body;
                if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
                b.classList.add('lp-js');
                var io = new IntersectionObserver(function (es) {
                    es.forEach(function (x) { if (x.isIntersecting) { x.target.classList.add('is-in'); io.unobserve(x.target); } });
                }, { threshold: 0.08 });
                document.querySelectorAll('.lp-reveal').forEach(function (el) { io.observe(el); });
                document.querySelectorAll('.lp-card').forEach(function (c) {
                    c.addEventListener('pointermove', function (ev) {
                        var r = c.getBoundingClientRect();
                        c.style.setProperty('--mx', (ev.clientX - r.left) + 'px');
                        c.style.setProperty('--my', (ev.clientY - r.top) + 'px');
                    });
                });
            })();
        </script>

        <script src="vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="vendors/datatables/datatables-demo.js"></script>

    </body>
</html>
