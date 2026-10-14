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

        <!-- Universal top navigation -->
        <link href="assets/css/ls-chrome.css" rel="stylesheet" />
        <?php require_once __DIR__ . '/includes/nav/site-nav.php'; ls_nav_head(); ?>

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

        <!-- Cinematic sections: How it Works + Getting Started (scoped to .ls-cine) -->
        <style>
            .ls-cine {
                --c-ink: #0d0618;
                --c-plum: #3A0B4F;
                --c-pink: #F53D9C;
                --c-orange: #FF8A3D;
                --c-text: #f4eefa;
                --c-muted: #c3b6d3;
                position: relative;
                overflow: hidden;
                isolation: isolate;
                color: var(--c-text);
                background: var(--c-ink);
                padding: 7rem 0;
                scroll-margin-top: var(--ls-nav-h, 4.5rem);
            }
            .ls-cine *, .ls-cine *::before, .ls-cine *::after { box-sizing: border-box; }
            .ls-cine__glow {
                position: absolute;
                inset: 0;
                z-index: -1;
                pointer-events: none;
            }
            .ls-hiw .ls-cine__glow {
                background:
                    radial-gradient(60rem 30rem at 50% -8%, rgba(245,61,156,.30), transparent 65%),
                    radial-gradient(40rem 26rem at 105% 80%, rgba(255,138,61,.16), transparent 70%),
                    radial-gradient(44rem 28rem at -10% 60%, rgba(58,11,79,.9), transparent 70%);
            }
            .ls-gs .ls-cine__glow {
                background:
                    radial-gradient(50rem 28rem at 0% 0%, rgba(58,11,79,.95), transparent 70%),
                    radial-gradient(40rem 26rem at 100% 35%, rgba(255,138,61,.14), transparent 70%),
                    radial-gradient(46rem 26rem at 30% 105%, rgba(245,61,156,.18), transparent 70%);
            }
            .ls-cine__glow::after { /* faint film grain lines */
                content: "";
                position: absolute;
                inset: 0;
                background: repeating-linear-gradient(0deg, rgba(255,255,255,.018) 0 1px, transparent 1px 4px);
            }

            .ls-cine .ls-wrap { max-width: 1140px; margin: 0 auto; padding: 0 1.5rem; }
            .ls-eyebrow {
                display: inline-flex;
                align-items: center;
                gap: .75rem;
                font: 700 .78rem/1 "Merriweather Sans", sans-serif;
                letter-spacing: .28em;
                text-transform: uppercase;
                color: var(--c-orange);
                margin: 0 0 1.25rem;
            }
            .ls-eyebrow::before, .ls-eyebrow::after {
                content: "";
                width: 2rem;
                height: 1px;
                background: linear-gradient(90deg, transparent, currentColor);
            }
            .ls-eyebrow::after { transform: scaleX(-1); }
            .ls-cine .ls-head { text-align: center; max-width: 46rem; margin: 0 auto 4.5rem; }
            .ls-cine .ls-title {
                font-family: "Merriweather Sans", sans-serif;
                font-weight: 700;
                font-size: clamp(2.2rem, 5.5vw, 3.8rem);
                line-height: 1.08;
                letter-spacing: -.02em;
                color: #fff;
                margin: 0 0 1.25rem;
            }
            .ls-cine .ls-title em {
                font-style: normal;
                background: linear-gradient(90deg, var(--c-pink), var(--c-orange));
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }
            .ls-cine .ls-lede { font-size: 1.15rem; line-height: 1.7; color: var(--c-muted); margin: 0; }

            /* Reveal on scroll (only when JS is available) */
            .ls-js .ls-reveal { opacity: 0; transform: translateY(28px); transition: opacity .8s ease, transform .8s cubic-bezier(.2,.7,.2,1); transition-delay: var(--d, 0s); }
            .ls-js .ls-reveal.is-in { opacity: 1; transform: none; }

            /* ---------- How it Works ---------- */
            .ls-steps { list-style: none; margin: 0; padding: 0; display: grid; gap: 1.5rem; grid-template-columns: repeat(3, 1fr); position: relative; counter-reset: step; }
            .ls-steps::before { /* light beam threading the steps */
                content: "";
                position: absolute;
                top: 0;
                left: 16%;
                right: 16%;
                height: 2px;
                background: linear-gradient(90deg, var(--c-pink), var(--c-orange), var(--c-pink));
                opacity: .55;
                box-shadow: 0 0 18px var(--c-pink);
            }
            .ls-step {
                --mx: 50%; --my: 0%;
                position: relative;
                padding: 6.5rem 1.75rem 2.25rem;
                text-align: center;
                border-radius: 1.5rem;
                background:
                    radial-gradient(18rem 14rem at var(--mx) var(--my), rgba(245,61,156,.18), transparent 70%),
                    linear-gradient(180deg, rgba(255,255,255,.07), rgba(255,255,255,.02));
                border: 1px solid rgba(255,255,255,.1);
                backdrop-filter: blur(6px);
                transition: transform .4s ease, border-color .4s ease;
            }
            .ls-step:hover, .ls-js .ls-step.ls-reveal.is-in:hover { transform: translateY(-6px); border-color: rgba(245,61,156,.5); }
            .ls-step__icon {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 6.4rem;
                height: 6.4rem;
                display: grid;
                place-items: center;
                border-radius: 50%;
                background: radial-gradient(circle at 30% 25%, #fff, #efe2f7);
                box-shadow: 0 0 0 6px var(--c-ink), 0 0 0 7px rgba(255,255,255,.18), 0 14px 40px rgba(245,61,156,.45);
            }
            .ls-step__icon img { width: 3.6rem; height: 3.6rem; object-fit: contain; }
            .ls-step__num {
                position: absolute;
                top: .9rem;
                right: 1.25rem;
                font: 700 3.2rem/1 "Merriweather Sans", sans-serif;
                color: transparent;
                -webkit-text-stroke: 1px rgba(255,255,255,.22);
            }
            .ls-step__num::before { counter-increment: step; content: "0" counter(step); }
            .ls-step h3 { font: 700 1.4rem/1.25 "Merriweather Sans", sans-serif; color: #fff; margin: 0 0 .75rem; }
            .ls-step p { margin: 0; color: var(--c-muted); line-height: 1.65; }

            .ls-screen {
                position: relative;
                margin: 5.5rem auto 0;
                max-width: 30rem;
                text-align: center;
            }
            .ls-screen::before { /* projector spill */
                content: "";
                position: absolute;
                inset: -20% -30%;
                z-index: -1;
                background: radial-gradient(closest-side, rgba(245,61,156,.35), transparent 75%);
                filter: blur(10px);
            }
            .ls-screen__frame {
                margin: 0;
                padding: .6rem;
                border-radius: 1.75rem;
                background: linear-gradient(145deg, rgba(255,255,255,.28), rgba(255,255,255,.04));
                box-shadow: 0 30px 70px rgba(0,0,0,.55);
            }
            .ls-screen img { display: block; width: 100%; height: auto; max-height: 26rem; object-fit: cover; border-radius: 1.3rem; }
            .ls-screen figcaption { margin-top: 1.1rem; font-size: .95rem; letter-spacing: .08em; color: var(--c-muted); }

            /* ---------- Getting Started ---------- */
            .ls-intro { display: grid; grid-template-columns: 1.05fr .95fr; gap: 4rem; align-items: center; margin-bottom: 7rem; }
            .ls-intro .ls-head { text-align: left; margin: 0 0 2rem; }
            .ls-intro .ls-eyebrow::before { display: none; }
            .ls-checks { list-style: none; margin: 0 0 1.75rem; padding: 0; display: grid; gap: .85rem; }
            .ls-checks li {
                display: flex;
                align-items: center;
                gap: 1rem;
                padding: 1rem 1.25rem;
                border-radius: 1rem;
                background: rgba(255,255,255,.05);
                border: 1px solid rgba(255,255,255,.09);
                color: var(--c-text);
            }
            .ls-checks li::before {
                content: "";
                flex: 0 0 1.5rem;
                height: 1.5rem;
                border-radius: 50%;
                background: linear-gradient(135deg, var(--c-pink), var(--c-orange));
                box-shadow: 0 0 14px rgba(245,61,156,.6);
                -webkit-mask: none;
            }
            .ls-note { color: var(--c-muted); margin: 0 0 .75rem; }
            .ls-emoji { font-size: 2.2rem; letter-spacing: .15em; }
            .ls-visual { position: relative; text-align: center; }
            .ls-visual::before {
                content: "";
                position: absolute;
                inset: 5% 0 0;
                z-index: -1;
                background: radial-gradient(closest-side, rgba(255,138,61,.28), transparent 75%);
            }
            .ls-visual img { max-width: 100%; height: auto; max-height: 28rem; border-radius: 1.5rem; filter: drop-shadow(0 25px 40px rgba(0,0,0,.5)); }

            .ls-journey { position: relative; display: grid; gap: 5rem; padding-left: 5.5rem; }
            .ls-journey::before { /* the path from Portal to Room to people */
                content: "";
                position: absolute;
                left: 1.55rem;
                top: 1.5rem;
                bottom: 1.5rem;
                width: 2px;
                background: linear-gradient(180deg, var(--c-pink), var(--c-orange) 60%, rgba(255,138,61,0));
                box-shadow: 0 0 14px rgba(245,61,156,.6);
            }
            .ls-chapter { position: relative; }
            .ls-chapter__node {
                position: absolute;
                left: -5.5rem;
                top: 0;
                width: 3.1rem;
                height: 3.1rem;
                display: grid;
                place-items: center;
                border-radius: 50%;
                font: 700 .95rem/1 "Merriweather Sans", sans-serif;
                color: #fff;
                background: var(--c-ink);
                border: 2px solid var(--c-pink);
                box-shadow: 0 0 0 6px var(--c-ink), 0 0 22px rgba(245,61,156,.6);
            }
            .ls-chapter__kicker { font: 700 .75rem/1 "Merriweather Sans", sans-serif; letter-spacing: .26em; text-transform: uppercase; color: var(--c-orange); margin: .35rem 0 .8rem; }
            .ls-chapter h2 { font: 700 clamp(1.9rem, 4vw, 2.7rem)/1.1 "Merriweather Sans", sans-serif; color: #fff; margin: 0 0 1.25rem; letter-spacing: -.01em; }
            .ls-chapter p { color: var(--c-muted); line-height: 1.7; }
            .ls-chapter__grid { display: grid; grid-template-columns: .9fr 1.1fr; gap: 3rem; align-items: center; }
            .ls-chapter__media img { max-width: 100%; height: auto; border-radius: 1.25rem; filter: drop-shadow(0 20px 36px rgba(0,0,0,.5)); }
            .ls-chips { display: flex; flex-wrap: wrap; gap: .6rem; margin-top: 1.5rem; }
            .ls-chip, .ls-cine .ls-chip:visited {
                display: inline-flex;
                align-items: center;
                min-height: 44px;
                padding: .55rem 1.1rem;
                border-radius: 999px;
                color: #fff;
                text-decoration: none;
                font-weight: 700;
                font-size: .95rem;
                background: rgba(255,255,255,.07);
                border: 1px solid rgba(255,255,255,.18);
                transition: background .25s ease, border-color .25s ease, transform .25s ease;
            }
            .ls-chip:hover, .ls-chip:focus-visible { background: linear-gradient(135deg, var(--c-pink), var(--c-orange)); border-color: transparent; color: #fff; transform: translateY(-2px); }
            .ls-chip--sm { min-height: 36px; padding: .3rem .9rem; font-size: .85rem; vertical-align: middle; }
            .ls-cine a:focus-visible { outline: 3px solid #fff; outline-offset: 3px; }

            .ls-rooms { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: 2rem; }
            .ls-room {
                position: relative;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                min-height: 8.5rem;
                padding: 1.1rem 1.25rem;
                border-radius: 1.1rem;
                text-decoration: none;
                color: #fff;
                overflow: hidden;
                background: linear-gradient(160deg, rgba(58,11,79,.9), rgba(20,8,34,.95));
                border: 1px solid rgba(255,255,255,.12);
                transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
            }
            .ls-room::before {
                content: "";
                position: absolute;
                inset: 0;
                background: radial-gradient(14rem 9rem at 100% 0%, rgba(245,61,156,.4), transparent 70%);
                transition: opacity .3s ease;
                opacity: .6;
            }
            .ls-room > * { position: relative; }
            .ls-room small { font-size: .7rem; letter-spacing: .22em; text-transform: uppercase; color: var(--c-orange); font-weight: 700; }
            .ls-room strong { font: 700 1.25rem/1.2 "Merriweather Sans", sans-serif; }
            .ls-room:hover, .ls-room:focus-visible { transform: translateY(-5px); border-color: rgba(255,138,61,.6); box-shadow: 0 18px 40px rgba(245,61,156,.25); color: #fff; }
            .ls-room:hover::before { opacity: 1; }
            .ls-rooms-cta { margin-top: 1.5rem; }
            .ls-final { text-align: center; }
            .ls-final h2 { margin-bottom: .75rem; }
            .ls-final .ls-emoji { display: block; margin-top: 1rem; }

            @media (max-width: 991.98px) {
                .ls-cine { padding: 5rem 0; }
                .ls-steps { grid-template-columns: 1fr; gap: 4.5rem; max-width: 30rem; margin: 0 auto; }
                .ls-steps::before { top: 0; bottom: 0; left: 50%; right: auto; width: 2px; height: auto; background: linear-gradient(180deg, var(--c-pink), var(--c-orange) 70%, rgba(255,138,61,0)); }
                .ls-intro, .ls-chapter__grid { grid-template-columns: 1fr; gap: 2.5rem; }
                .ls-intro { margin-bottom: 5rem; }
            }
            @media (max-width: 575.98px) {
                .ls-cine .ls-wrap { padding: 0 1.1rem; }
                .ls-cine .ls-head { margin-bottom: 3.5rem; }
                .ls-journey { padding-left: 3.4rem; gap: 4rem; }
                .ls-journey::before { left: .95rem; }
                .ls-chapter__node { left: -3.4rem; width: 2.4rem; height: 2.4rem; font-size: .8rem; }
                .ls-rooms { grid-template-columns: 1fr; }
                .ls-room { min-height: 5.5rem; }
            }
            @media (prefers-reduced-motion: reduce) {
                .ls-js .ls-reveal { opacity: 1; transform: none; transition: none; }
                .ls-step, .ls-chip, .ls-room { transition: none; }
                .ls-step:hover, .ls-room:hover, .ls-chip:hover { transform: none; }
            }
        </style>

        <!-- Homepage rest-of-page cinematic treatment (scoped to body.ls-home / .ls-* classes) -->
        <style>
            .ls-home #activity, .ls-home #holodeck { scroll-margin-top: var(--ls-nav-h, 4.5rem); }

            /* ===== Masthead: opening scene (scoped to .ls-home .ls-hero) ===== */
            .ls-home header.ls-hero {
                --c-ink: #0d0618; --c-pink: #F53D9C; --c-orange: #FF8A3D;
                position: relative;
                isolation: isolate;
                overflow: hidden;
                height: auto;
                min-height: 0;
                margin-top: 0 !important;
                background: var(--c-ink);
                padding: 0;
                color: #f4eefa;
                scroll-margin-top: 0;
            }
            .ls-hero__bg { position: absolute; inset: 0; z-index: -1; pointer-events: none; }
            .ls-hero__bg::before { /* the original peach artwork, reborn as glowing ribbons */
                content: "";
                position: absolute;
                inset: 0;
                background: url("assets/img/homepage/bg-masthead-home.png") center bottom / cover no-repeat;
                opacity: .38;
                mix-blend-mode: screen;
                -webkit-mask-image: linear-gradient(#000 35%, transparent 92%);
                mask-image: linear-gradient(#000 35%, transparent 92%);
            }
            .ls-hero__bg::after { /* lighting + film grain */
                content: "";
                position: absolute;
                inset: 0;
                background:
                    repeating-linear-gradient(0deg, rgba(255,255,255,.018) 0 1px, transparent 1px 4px),
                    radial-gradient(34rem 28rem at 78% 40%, rgba(245,61,156,.38), transparent 70%),
                    radial-gradient(40rem 24rem at 0% 0%, rgba(58,11,79,.95), transparent 70%),
                    radial-gradient(46rem 10rem at 50% 100%, rgba(255,138,61,.30), transparent 70%),
                    linear-gradient(180deg, rgba(13,6,24,.35), rgba(13,6,24,0) 30%, rgba(13,6,24,.55) 78%, var(--c-ink) 100%);
            }
            .ls-hero__wrap {
                position: relative;
                max-width: 1140px;
                margin: 0 auto;
                padding: 12rem 1.5rem 6.5rem;
                display: grid;
                grid-template-columns: 1.1fr .9fr;
                gap: 3.5rem;
                align-items: center;
            }
            .ls-hero__eyebrow {
                display: inline-flex;
                align-items: center;
                gap: .7rem;
                margin: 0 0 1.4rem;
                padding: .5rem 1rem;
                border-radius: 999px;
                font: 700 .75rem/1 "Merriweather Sans", sans-serif;
                letter-spacing: .24em;
                text-transform: uppercase;
                color: #ffd2b0;
                background: rgba(255,255,255,.07);
                border: 1px solid rgba(255,255,255,.16);
            }
            .ls-home .ls-hero__title {
                font: 700 clamp(3rem, 7.2vw, 5.6rem)/1.02 "Merriweather Sans", sans-serif;
                letter-spacing: -.03em;
                color: #fff;
                margin: 0 0 1.5rem;
                text-shadow: 0 6px 40px rgba(245,61,156,.35);
            }
            .ls-hero__title em {
                font-style: normal;
                background: linear-gradient(90deg, var(--c-pink), var(--c-orange));
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
                text-shadow: none;
            }
            .ls-hero__lede p { margin: 0; }
            .ls-hero__lead { font-size: clamp(1.15rem, 2.2vw, 1.4rem); line-height: 1.5; color: #fff; }
            .ls-hero__sub { font-size: 1.1rem; line-height: 1.6; color: #cdbfe0; margin-top: .35rem !important; }
            .ls-hero__actions { display: flex; flex-wrap: wrap; align-items: center; gap: 1rem; margin-top: 2.25rem; }
            .ls-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 3.4rem;
                padding: .9rem 2rem;
                border-radius: 999px;
                font: 700 .95rem/1 "Merriweather Sans", sans-serif;
                letter-spacing: .06em;
                text-transform: uppercase;
                text-decoration: none;
                color: #fff;
                transition: transform .25s ease, box-shadow .25s ease, background .25s ease, border-color .25s ease;
            }
            .ls-btn--primary {
                background: linear-gradient(135deg, #d6247f, #e8590c);
                box-shadow: 0 12px 34px rgba(245,61,156,.42), inset 0 1px 0 rgba(255,255,255,.3);
            }
            .ls-btn--ghost {
                background: rgba(255,255,255,.08);
                border: 1px solid rgba(255,255,255,.4);
                backdrop-filter: blur(6px);
            }
            .ls-btn:hover, .ls-btn:focus-visible { color: #fff; transform: translateY(-3px); }
            .ls-btn--primary:hover, .ls-btn--primary:focus-visible { box-shadow: 0 16px 44px rgba(245,61,156,.6), inset 0 1px 0 rgba(255,255,255,.3); }
            .ls-btn--ghost:hover, .ls-btn--ghost:focus-visible { background: rgba(255,255,255,.16); border-color: #fff; }
            .ls-hero__more {
                display: inline-flex;
                align-items: center;
                gap: .5rem;
                min-height: 44px;
                padding: 0 .5rem;
                color: #fff;
                font-weight: 700;
                text-decoration: none;
                border-bottom: 1px solid rgba(255,255,255,.35);
                transition: border-color .25s ease, color .25s ease;
            }
            .ls-hero__more svg { display: block !important; width: 1.15rem; height: 1.15rem; transition: transform .25s ease; }
            .ls-hero__more:hover, .ls-hero__more:focus-visible { color: var(--c-orange); border-color: var(--c-orange); }
            .ls-hero__more:hover svg { transform: translateX(4px); }
            .ls-hero a:focus-visible { outline: 3px solid #fff; outline-offset: 4px; border-radius: 999px; }

            /* Video-call wall */
            .ls-hero__wall {
                position: relative;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
                max-width: 26rem;
                margin-left: auto;
                width: 100%;
            }
            .ls-hero__wall::before { /* screen glow */
                content: "";
                position: absolute;
                inset: -12% -14%;
                z-index: -1;
                background: radial-gradient(closest-side, rgba(245,61,156,.45), transparent 75%);
            }
            .ls-tile {
                display: block;
                width: 100%;
                aspect-ratio: 4 / 5;
                object-fit: cover;
                border-radius: 1.4rem;
                border: 1px solid rgba(255,255,255,.22);
                box-shadow: 0 24px 50px rgba(0,0,0,.5), 0 0 0 5px rgba(255,255,255,.04);
                animation: ls-float 8s ease-in-out infinite;
                animation-delay: var(--f, 0s);
            }
            .ls-tile:nth-of-type(even) { margin-top: 2.2rem; }
            .ls-tile:nth-of-type(odd) { margin-top: -.8rem; }
            @keyframes ls-float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-9px); } }
            .ls-hero__chip {
                position: absolute;
                z-index: 2;
                display: inline-flex;
                align-items: center;
                gap: .5rem;
                padding: .5rem .9rem;
                border-radius: 999px;
                font: 700 .72rem/1 "Merriweather Sans", sans-serif;
                letter-spacing: .16em;
                text-transform: uppercase;
                color: #fff;
                background: rgba(13,6,24,.78);
                border: 1px solid rgba(255,255,255,.22);
                backdrop-filter: blur(6px);
            }
            .ls-hero__chip--live { top: -1rem; left: -.75rem; }
            .ls-hero__chip--free { bottom: -1rem; right: -.5rem; color: #ffd2b0; }

            /* Entrance (CSS-only, so content never depends on JS) */
            .ls-in { animation: ls-rise .9s cubic-bezier(.2,.7,.2,1) both; animation-delay: calc(var(--i, 0) * .12s); }
            @keyframes ls-rise { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: none; } }

            @media (max-width: 991.98px) {
                .ls-hero__wrap { grid-template-columns: 1fr; gap: 3.5rem; padding: 9rem 1.25rem 4.5rem; text-align: center; }
                .ls-hero__eyebrow { margin-left: auto; margin-right: auto; }
                .ls-hero__actions { justify-content: center; }
                .ls-hero__wall { margin: 0 auto; max-width: 34rem; grid-template-columns: repeat(4, 1fr); gap: .65rem; }
                .ls-tile { border-radius: 1rem; }
                .ls-tile:nth-of-type(even) { margin-top: 1.2rem; }
                .ls-tile:nth-of-type(odd) { margin-top: 0; }
            }
            @media (max-width: 575.98px) {
                .ls-hero__wrap { padding-top: 8.5rem; }
                .ls-hero__actions { flex-direction: column; align-items: stretch; }
                .ls-hero__more { justify-content: center; align-self: center; }
                .ls-hero__chip--live { left: 0; }
                .ls-hero__chip--free { right: 0; }
            }
            @media (prefers-reduced-motion: reduce) {
                .ls-in, .ls-tile { animation: none; }
                .ls-btn, .ls-hero__more, .ls-hero__more svg { transition: none; }
                .ls-btn:hover, .ls-btn:focus-visible, .ls-hero__more:hover svg { transform: none; }
            }
            /* ===== end masthead ===== */

            /* Portals gateway */
            .ls-portals { padding: 6rem 0 6.5rem; }
            .ls-portals .ls-cine__glow {
                background:
                    radial-gradient(46rem 12rem at 50% -3rem, rgba(255,138,61,.40), transparent 70%),
                    radial-gradient(40rem 24rem at 100% 100%, rgba(245,61,156,.20), transparent 70%),
                    radial-gradient(40rem 24rem at 0% 100%, rgba(58,11,79,.9), transparent 70%);
            }
            .ls-portals .ls-head { margin-bottom: 3.25rem; }
            .ls-gates { display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; }
            .ls-gate {
                flex: 1 1 14rem;
                max-width: 16rem;
                display: flex;
                align-items: center;
                gap: .9rem;
                min-height: 5rem;
                padding: 1rem 1.15rem;
                border-radius: 1.1rem;
                color: #fff;
                text-decoration: none;
                background: linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.02));
                border: 1px solid rgba(255,255,255,.12);
                transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease, background .3s ease;
            }
            .ls-gate__icon {
                flex: 0 0 2.7rem;
                height: 2.7rem;
                display: grid;
                place-items: center;
                font-size: 1.35rem;
                border-radius: 50%;
                background: rgba(255,255,255,.1);
                box-shadow: inset 0 0 0 1px rgba(255,255,255,.14);
            }
            .ls-gate__name { flex: 1; font: 700 1rem/1.25 "Merriweather Sans", sans-serif; }
            .ls-gate__go { color: var(--c-orange); transition: transform .3s ease; }
            .ls-js .ls-gate.ls-reveal.is-in:hover, .ls-gate:focus-visible {
                transform: translateY(-4px);
                border-color: rgba(255,138,61,.65);
                background: linear-gradient(180deg, rgba(245,61,156,.22), rgba(58,11,79,.35));
                box-shadow: 0 16px 36px rgba(245,61,156,.25);
                color: #fff;
            }
            .ls-gate:hover .ls-gate__go, .ls-gate:focus-visible .ls-gate__go { transform: translateX(4px); }
            .ls-gate:hover { color: #fff; }

            /* Activity: the light "breath" between dark acts */
            .ls-act {
                position: relative;
                padding: 6.5rem 0 7rem !important;
                background:
                    radial-gradient(44rem 16rem at 50% 0%, rgba(245,61,156,.10), transparent 70%),
                    radial-gradient(36rem 20rem at 100% 100%, rgba(255,138,61,.12), transparent 70%),
                    #f7f3fa !important;
            }
            .ls-act::after { /* seam into the next dark act */
                content: "";
                position: absolute;
                left: 0; right: 0; bottom: 0;
                height: 2px;
                background: linear-gradient(90deg, transparent, #F53D9C, #FF8A3D, transparent);
                opacity: .7;
            }
            .ls-act .ls-eyebrow { color: #a8390c; }
            .ls-act__title {
                font: 700 clamp(2rem, 4.5vw, 3rem)/1.1 "Merriweather Sans", sans-serif;
                letter-spacing: -.02em;
                color: #3A0B4F;
                margin: 0 0 1rem;
            }
            .ls-act .activity-card {
                position: relative;
                overflow: hidden;
                border: 1px solid rgba(58,11,79,.1);
                border-radius: 1.25rem;
                background: #fff;
                box-shadow: 0 18px 40px rgba(58,11,79,.08);
                margin-bottom: 1.5rem;
            }
            .ls-act .activity-card::before {
                content: "";
                position: absolute;
                left: 0; right: 0; top: 0;
                height: 4px;
                background: linear-gradient(90deg, #F53D9C, #FF8A3D);
            }
            .ls-act .activity-card .card-body { padding: 1.75rem; }
            .ls-act .activity-card h3 { color: #3A0B4F !important; letter-spacing: .14em; font-weight: 700; display: flex; align-items: center; gap: .5rem; }
            .ls-act .list-group-item { background: transparent; border-color: rgba(58,11,79,.08); padding-left: 0; padding-right: 0; }
            .ls-live { width: .6rem; height: .6rem; border-radius: 50%; background: #F53D9C; box-shadow: 0 0 0 0 rgba(245,61,156,.55); animation: ls-pulse 2s infinite; }
            @keyframes ls-pulse { 70% { box-shadow: 0 0 0 .6rem rgba(245,61,156,0); } 100% { box-shadow: 0 0 0 0 rgba(245,61,156,0); } }

            /* Featured room reels */
            .ls-reel-intro { padding: 6rem 0 3.5rem; }
            .ls-reel-intro .ls-head { margin-bottom: 0; }
            .ls-reel-intro .ls-lede { margin-bottom: 1.75rem; }
            .ls-reel-intro .ls-cine__glow {
                background:
                    radial-gradient(48rem 16rem at 50% 0%, rgba(245,61,156,.26), transparent 70%),
                    radial-gradient(40rem 20rem at 0% 100%, rgba(58,11,79,.9), transparent 70%);
            }
            .ls-home #portfolio.ls-reel { background: #0d0618; }
            .ls-home #portfolio.ls-reel .portfolio-box { overflow: hidden; background: #0d0618; }
            .ls-home #portfolio.ls-reel .portfolio-box img { transition: transform .8s cubic-bezier(.2,.7,.2,1); }
            .ls-home #portfolio.ls-reel .container-fluid .portfolio-box .portfolio-box-caption {
                opacity: 1;
                align-items: flex-start;
                justify-content: flex-end;
                text-align: left;
                padding: 1.5rem;
                background: linear-gradient(0deg, rgba(13,6,24,.95) 0%, rgba(13,6,24,.75) 30%, rgba(13,6,24,0) 70%);
                transition: background .4s ease;
            }
            .ls-home #portfolio.ls-reel .portfolio-box-caption.p-3 { padding: 1.5rem !important; }
            .ls-home #portfolio.ls-reel .container-fluid .portfolio-box .project-category { font-size: .7rem; letter-spacing: .24em; color: #FF8A3D !important; }
            .ls-home #portfolio.ls-reel .container-fluid .portfolio-box .project-name { font: 700 1.5rem/1.2 "Merriweather Sans", sans-serif; }
            .ls-home #portfolio.ls-reel .portfolio-box:hover img,
            .ls-home #portfolio.ls-reel .portfolio-box:focus-visible img { transform: scale(1.05); }
            .ls-home #portfolio.ls-reel .portfolio-box:hover .portfolio-box-caption,
            .ls-home #portfolio.ls-reel .portfolio-box:focus-visible .portfolio-box-caption {
                background: linear-gradient(0deg, rgba(58,11,79,.92), rgba(245,61,156,.35));
            }

            @media (max-width: 991.98px) {
                .ls-portals { padding: 4.5rem 0 5rem; }
                .ls-reel-intro { padding: 4.5rem 0 2.5rem; }
                .ls-act { padding: 5rem 0 5.5rem !important; }
            }
            @media (max-width: 575.98px) {
                .ls-gate { flex-basis: 100%; max-width: none; }
            }
            @media (prefers-reduced-motion: reduce) {
                .ls-live { animation: none; }
                .ls-gate, .ls-gate__go, .ls-home #portfolio.ls-reel .portfolio-box img { transition: none; }
                .ls-gate:hover, .ls-home #portfolio.ls-reel .portfolio-box:hover img { transform: none; }
            }
        </style>
        <script>document.documentElement.classList.add('ls-js');</script>

    </head>
    <body id="page-top" class="ls-home ls-chrome">
        <!-- Navigation-->
        <?php ls_nav_render([
            'page_links' => [
                ['label' => 'How it Works',    'href' => '#how-it-works'],
                ['label' => 'Getting Started', 'href' => '#getting-started'],
            ],
        ]); ?>
        <?php require_once('___beta-banner.php'); ?>
        <!-- Masthead-->
        <header class="masthead ls-hero" id="main-content">
            <div class="ls-hero__bg" aria-hidden="true"></div>
            <div class="ls-hero__wrap">
                <div class="ls-hero__copy">
                    <p class="ls-hero__eyebrow ls-in" style="--i:0"><span class="ls-live" aria-hidden="true"></span>Text &amp; video chat rooms</p>
                    <h1 class="ls-hero__title ls-in" style="--i:1">Join <em>Live</em> Rooms</h1>
                    <div class="ls-hero__lede ls-in" style="--i:2">
                        <p class="ls-hero__lead">Join live text and video rooms on any topic.</p>
                        <p class="ls-hero__sub">Talk, listen, or just hang out — no sign-up required.</p>
                    </div>
                    <div class="ls-hero__actions ls-in" style="--i:3">
                        <!-- Primary CTA -->
                        <a class="ls-btn ls-btn--primary" href="#portals">Join Quietly</a>
                        <!-- Secondary CTA -->
                        <a class="ls-btn ls-btn--ghost" href="#holodeck">Create a Room</a>
                        <a class="ls-hero__more" href="#how-it-works">
                            <span>How it Works</span>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h12m-5-5l5 5-5 5" fill="none" stroke="currentColor" stroke-width="2"/></svg>
                        </a>
                    </div>
                </div>
                <div class="ls-hero__wall ls-in" style="--i:2" aria-hidden="true">
                    <span class="ls-hero__chip ls-hero__chip--live"><span class="ls-live"></span>Live</span>
                    <img class="ls-tile" style="--f:0s" src="assets/img/all/webcam7.gif" alt="">
                    <img class="ls-tile" style="--f:-1.8s" src="assets/img/all/webcam2.gif" alt="">
                    <img class="ls-tile" style="--f:-3.6s" src="assets/img/all/webcam4.gif" alt="">
                    <img class="ls-tile" style="--f:-5.4s" src="assets/img/all/webcam6.gif" alt="">
                    <span class="ls-hero__chip ls-hero__chip--free">No sign-up</span>
                </div>
            </div>
        </header>
        <!-- Portals -->
        <section id="portals" class="ls-cine ls-portals" aria-labelledby="portals-title">
            <div class="ls-cine__glow" aria-hidden="true"></div>
            <div class="ls-wrap">
                <div class="ls-head ls-reveal">
                    <p class="ls-eyebrow">Choose your doorway</p>
                    <h2 class="ls-title" id="portals-title">Step through a <em>Portal</em></h2>
                    <p class="ls-lede">Every Portal opens onto a set of live rooms built around one interest.</p>
                </div>
                <nav class="ls-gates" aria-label="Portals">
                    <a class="ls-gate ls-reveal" href="work.php"><span class="ls-gate__icon" aria-hidden="true">💼</span><span class="ls-gate__name">Work Rooms</span><span class="ls-gate__go" aria-hidden="true">→</span></a>
                    <a class="ls-gate ls-reveal" style="--d:.06s" href="sports.php"><span class="ls-gate__icon" aria-hidden="true">🏀</span><span class="ls-gate__name">Sports &amp; Fitness</span><span class="ls-gate__go" aria-hidden="true">→</span></a>
                    <a class="ls-gate ls-reveal" style="--d:.12s" href="education.php"><span class="ls-gate__icon" aria-hidden="true">🎓</span><span class="ls-gate__name">School &amp; Education</span><span class="ls-gate__go" aria-hidden="true">→</span></a>
                    <a class="ls-gate ls-reveal" style="--d:.18s" href="entertainment.php"><span class="ls-gate__icon" aria-hidden="true">🎬</span><span class="ls-gate__name">Entertainment</span><span class="ls-gate__go" aria-hidden="true">→</span></a>
                    <a class="ls-gate ls-reveal" href="health.php"><span class="ls-gate__icon" aria-hidden="true">🧘</span><span class="ls-gate__name">Health &amp; Wellbeing</span><span class="ls-gate__go" aria-hidden="true">→</span></a>
                    <a class="ls-gate ls-reveal" style="--d:.06s" href="relationships.php"><span class="ls-gate__icon" aria-hidden="true">💞</span><span class="ls-gate__name">Relationships</span><span class="ls-gate__go" aria-hidden="true">→</span></a>
                    <a class="ls-gate ls-reveal" style="--d:.12s" href="technology.php"><span class="ls-gate__icon" aria-hidden="true">💻</span><span class="ls-gate__name">Technology</span><span class="ls-gate__go" aria-hidden="true">→</span></a>
                </nav>
            </div>
        </section>
        <section class="page-section bg-light text-dark ls-act" id="activity" aria-labelledby="activity-title">
          <div class="container px-4 px-lg-5">

            <!-- Shared heading for the zone -->
            <div class="row justify-content-center mb-3">
              <div class="col-lg-10 text-center ls-reveal">
                <p class="ls-eyebrow">Live now</p>
                <h2 class="ls-act__title" id="activity-title">Activity</h2>
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
                    <h3 class="h6 text-uppercase text-muted mb-2"><span class="ls-live" aria-hidden="true"></span>Active Rooms</h3>
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
        <!-- How it Works -->
        <section id="how-it-works" class="ls-cine ls-hiw" aria-labelledby="hiw-title">
            <div class="ls-cine__glow" aria-hidden="true"></div>
            <div class="ls-wrap">
                <div class="ls-head ls-reveal">
                    <p class="ls-eyebrow">Three simple moves</p>
                    <h2 class="ls-title" id="hiw-title">How it <em>Works</em></h2>
                    <p class="ls-lede">Pick an interest, step into a room, and start talking. That's the whole story.</p>
                </div>
                <ol class="ls-steps">
                    <li class="ls-step ls-reveal">
                        <span class="ls-step__num" aria-hidden="true"></span>
                        <span class="ls-step__icon"><img src="assets/img/homepage/category-icon.png" alt="" aria-hidden="true"></span>
                        <h3>Choose a Portal</h3>
                        <p>First, choose a portal based on your interest.</p>
                    </li>
                    <li class="ls-step ls-reveal" style="--d:.12s">
                        <span class="ls-step__num" aria-hidden="true"></span>
                        <span class="ls-step__icon"><img src="assets/img/homepage/space-icon.png" alt="" aria-hidden="true"></span>
                        <h3>Click on a Room</h3>
                        <p>Then click into a room to start a text or video chat on that topic.</p>
                    </li>
                    <li class="ls-step ls-reveal" style="--d:.24s">
                        <span class="ls-step__num" aria-hidden="true"></span>
                        <span class="ls-step__icon"><img src="assets/img/homepage/call-icon.png" alt="" aria-hidden="true"></span>
                        <h3>Chat with People</h3>
                        <p>Finally, just dive in, meet people, and have fun!</p>
                    </li>
                </ol>
                <figure class="ls-screen ls-reveal">
                    <div class="ls-screen__frame">
                        <img src="assets/img/homepage/dancing.gif" loading="lazy" alt="Two friends dancing in front of a LensShare backdrop.">
                    </div>
                </figure>
            </div>
        </section>
        <!-- Getting Started -->
        <section class="ls-cine ls-gs" id="getting-started" aria-labelledby="gs-title">
            <div class="ls-cine__glow" aria-hidden="true"></div>
            <div class="ls-wrap">
                <div class="ls-intro">
                    <div class="ls-reveal">
                        <div class="ls-head">
                            <p class="ls-eyebrow">Your first visit</p>
                            <h2 class="ls-title" id="gs-title">Getting <em>Started</em></h2>
                            <p class="ls-lede">LensShare lets you create or join live “Rooms,” which are simple, interest-based spaces with text and video chat.</p>
                        </div>
                        <ul class="ls-checks">
                            <li>Browse or create a room</li>
                            <li>Join when you're ready (Camera and mic are off by default)</li>
                            <li>Talk, listen, or just hang out</li>
                        </ul>
                    </div>
                    <div class="ls-visual ls-reveal" style="--d:.15s">
                        <img src="assets/img/homepage/space-book.gif" loading="lazy" alt="Illustration representing LensShare as a social universe.">
                    </div>
                </div>

                <div class="ls-journey">
                    <!-- Portals -->
                    <article class="ls-chapter ls-reveal">
                        <span class="ls-chapter__node" aria-hidden="true">01</span>
                        <p class="ls-chapter__kicker">Discover</p>
                        <div class="ls-chapter__grid">
                            <div class="ls-chapter__media">
                                <img src="assets/img/homepage/portals.gif" loading="lazy" alt="Illustration representing LensShare portals that group rooms by theme.">
                            </div>
                            <div>
                                <h2>Portals</h2>
                                <p>Rooms are grouped into themed Portals to make them easier to explore.</p>
                                <p>Just choose a Portal → click a Room → and you’re instantly in a space where someone might already be hanging out.</p>
                                <p class="mb-0">Here is the complete list of Portals:</p>
                                <nav class="ls-chips" aria-label="All Portals">
                                    <a class="ls-chip" href="work.php">Work Rooms</a>
                                    <a class="ls-chip" href="sports.php">Sports &amp; Fitness</a>
                                    <a class="ls-chip" href="education.php">School &amp; Education</a>
                                    <a class="ls-chip" href="entertainment.php">Entertainment</a>
                                    <a class="ls-chip" href="health.php">Health &amp; Wellbeing</a>
                                    <a class="ls-chip" href="relationships.php">Relationships</a>
                                    <a class="ls-chip" href="technology.php">Technology</a>
                                </nav>
                            </div>
                        </div>
                    </article>

                    <!-- Rooms -->
                    <article class="ls-chapter ls-reveal">
                        <span class="ls-chapter__node" aria-hidden="true">02</span>
                        <p class="ls-chapter__kicker">Enter</p>
                        <div class="ls-chapter__grid">
                            <div>
                                <h2>Rooms</h2>
                                <p>Rooms are simple video + text chat spaces built around a topic.</p>
                                <p>You can join public Rooms or create a private one by typing a secret name into the Holodeck.</p>
                                <p>Each Portal has a Holodeck, and there’s one on the homepage too.</p>
                                <p class="mb-0">Here are examples of Rooms in the <a class="ls-chip ls-chip--sm" href="sports.php">Sports &amp; Fitness</a> Portal.</p>
                            </div>
                            <div class="ls-chapter__media">
                                <img src="assets/img/homepage/space.png" loading="lazy" alt="Illustration representing a LensShare room as a shared space.">
                            </div>
                        </div>
                        <div class="ls-rooms">
                            <a class="ls-room" href="room.php?room=football"><small>Room</small><strong>Football</strong></a>
                            <a class="ls-room" href="room.php?room=baseball"><small>Room</small><strong>Baseball</strong></a>
                            <a class="ls-room" href="room.php?room=basketball"><small>Room</small><strong>Basketball</strong></a>
                        </div>
                    </article>

                    <!-- Connect -->
                    <article class="ls-chapter ls-final ls-reveal">
                        <span class="ls-chapter__node" aria-hidden="true">03</span>
                        <p class="ls-chapter__kicker">Connect</p>
                        <h2>No setup. No pressure.</h2>
                        <p>Just jump in.</p>
                        <span class="ls-emoji" aria-hidden="true">😀😆🤣😇</span>
                    </article>
                </div>
            </div>
        </section>
        <!-- Work Rooms Top -->
        <section class="ls-cine ls-reel-intro" aria-labelledby="reel-title">
            <div class="ls-cine__glow" aria-hidden="true"></div>
            <div class="ls-wrap">
                <div class="ls-head ls-reveal">
                    <p class="ls-eyebrow">Featured Rooms</p>
                    <h2 class="ls-title" id="reel-title">Inside the <em>Work</em> Portal</h2>
                    <p class="ls-lede">A few doors to walk through right now.</p>
                    <a class="ls-chip" href="work.php">Browse all Work Rooms</a>
                </div>
            </div>
        </section>
        <div id="portfolio" class="ls-reel">
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
        <div id="portfolio" class="ls-reel">
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
        <?php ls_nav_scripts(); ?>

        <script>
        (function () {
            var items = document.querySelectorAll('.ls-reveal');
            var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (!items.length) return;
            if (reduce || !('IntersectionObserver' in window)) {
                items.forEach(function (el) { el.classList.add('is-in'); });
            } else {
                var io = new IntersectionObserver(function (entries) {
                    entries.forEach(function (e) {
                        if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
                    });
                }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
                items.forEach(function (el) { io.observe(el); });
            }

            if (reduce) return;
            document.querySelectorAll('.ls-step').forEach(function (card) {
                card.addEventListener('pointermove', function (e) {
                    var r = card.getBoundingClientRect();
                    card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
                    card.style.setProperty('--my', (e.clientY - r.top) + 'px');
                });
            });
        })();
        </script>

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
