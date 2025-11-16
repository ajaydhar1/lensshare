		<!-- Footer-->
        <footer class="footer bg-light py-5">
            <div class="container px-4 px-lg-5">
            	<div class="small text-center text-muted">
            		Copyright &copy; <?= date('Y') ?> - <?= $site_name ?>
                    <span style="margin-left: 5px;">·</span> 
            		<a href="terms.php" style="margin-left: 5px; margin-right: 5px; text-decoration: none;">Terms</a>
                    <span style="margin-right: 5px;">·</span> 
            		<a href="privacy.php" style="text-decoration: none;">Privacy</a>
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