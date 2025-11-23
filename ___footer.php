		<!-- Footer-->
        <footer class="footer bg-light py-5">
            <div class="container px-4 px-lg-5">
            	<div class="small text-center text-muted">
            		Copyright &copy; <?= date('Y') ?> - LensShare
                    <span style="margin-left: 5px;">·</span> 
            		<a href="terms.php" style="margin-left: 5px; margin-right: 5px; text-decoration: none;">Terms</a>
                    <span style="margin-right: 5px;">·</span> 
            		<a href="privacy.php" style="margin-right: 5px; text-decoration: none;">Privacy</a>
                    <span style="margin-right: 5px;">·</span> 
                    <a href="beta-test-agreement.php" style="text-decoration: none;">Beta Test Agreement</a>
            	</div>
            </div>
        </footer>

        <style>

            #cb-cookie-banner { 
                position: fixed; 
                bottom: 0; 
                left: 0; 
                width: 100%; 
                z-index: 999; 
                border-radius: 0; 
                display: none; }

            #cb-cookie-banner a {
                cursor: pointer !important;
                color: #f4623a !important
            }

        </style>

        <!-- Cookie Banner -->
        <div id="cb-cookie-banner" class="alert alert-dark text-center mb-0" role="alert">
            🍪 This website uses cookies to ensure you get the best experience on our website.
            <a href="privacy.php#cookies" target="blank">Learn more</a>
            <button type="button" class="btn btn-primary btn-sm ms-3" onclick="hideCookieBanner()">
                I Got It
            </button>
        </div>
        <!-- End of Cookie Banner -->

        <script>
            /* Javascript to show and hide cookie banner using localstorage */
            /* Shows the Cookie banner */
            function showCookieBanner() {
                let cookieBanner = document.getElementById("cb-cookie-banner");
                cookieBanner.style.display = "block";
            }

            /* Hides the Cookie banner and saves the value to localstorage */
            function hideCookieBanner() {
                localStorage.setItem("cb_isCookieAccepted", "yes");
                let cookieBanner = document.getElementById("cb-cookie-banner");
                cookieBanner.style.display = "none";
            }

            /* Checks the localstorage and shows Cookie banner based on it. */
            function initializeCookieBanner() {
                let isCookieAccepted = localStorage.getItem("cb_isCookieAccepted");
                if(isCookieAccepted === null) {
                    localStorage.setItem("cb_isCookieAccepted", "no");
                    showCookieBanner();
                }
                if(isCookieAccepted === "no") {
                    showCookieBanner();
                }
            }

            initializeCookieBanner();

        </script>

        <script>
            (function () {
                const API_URL = 'https://logfeed-socket-broker.onrender.com/api/active-rooms?min=1';

                if (!('fetch' in window)) return;

                // Extract ?room=slug from a link's href
                function getRoomIdFromHref(href) {
                    try {
                        const url = new URL(href, window.location.origin);
                        return url.searchParams.get('room') || null;
                    } catch (e) {
                        return null;
                    }
                }

                // Apply HOT labels to room buttons
                function applyHotBadges(activeMap) {
                    // Match any room button by href, not by text
                    const links = document.querySelectorAll('a[href*="room.php?room="]');

                    links.forEach(link => {
                        const href = link.getAttribute('href');
                        const roomId = getRoomIdFromHref(href);
                        if (!roomId) return;

                        const rawCount = activeMap.get(roomId);
                        if (!rawCount) return; // not active

                        // TEMP: normalize "connections" -> "users"
                        const users = Math.max(1, Math.ceil(rawCount / 2));

                        // Only mark HOT when there are 2 or more users
                        if (users >= 2) {
                            link.classList.add('room-hot');

                            let badge = link.querySelector('.room-hot-badge');
                            if (!badge) {
                                badge = document.createElement('span');
                                badge.className = 'room-hot-badge';
                                badge.textContent = 'HOT';
                                badge.setAttribute('aria-label', 'This room is active right now');

                                // add a small space then badge
                                link.appendChild(document.createTextNode(' '));
                                link.appendChild(badge);
                            }
                        }
                    });
                }

                window.addEventListener('DOMContentLoaded', function () {
                    fetch(API_URL)
                    .then(r => r.json())
                    .then(data => {
                        if (!data || !Array.isArray(data.rooms)) return;

                        const activeMap = new Map();
                        data.rooms.forEach(r => {
                            if (r && r.room && typeof r.count === 'number') {
                                activeMap.set(r.room, r.count);
                            }
                        });

                        applyHotBadges(activeMap);
                    })
                    .catch(() => {
                        // fail silently; UI just won't show HOT labels
                    });
                });
            })();
        </script>