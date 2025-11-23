<?php
// search.php — LensShare Search Hub (messages + rooms + posts + people)

ini_set('display_errors','0'); error_reporting(E_ALL);
$debug = true; // TODO: set to false in production

// Adjust this include to match your front-end config path
require_once __DIR__ . '/___config.php';

// Adjust this include to match your comms config path
require_once __DIR__ . '/comms/config.php';

// Basic DB bootstrap — adjust if you already have a helper for this
try {
    // If you have env_db_path() or similar, use that instead:
    // $db = new PDO('sqlite:' . env_db_path());
    $db = new PDO('sqlite:' . env_db_path());
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Throwable $e) {
    $db = null;
}

$q    = trim($_GET['q'] ?? '');
$type = $_GET['type'] ?? 'all';

// NEW: limit param handling
$limitParam    = $_GET['limit'] ?? '';   // e.g. "", "50", "all"
$defaultLimit  = 20;                     // default max rows per section
$limitAll      = false;                  // true = no LIMIT clause
$limit         = $defaultLimit;          // numeric limit when not "all"

// Interpret limit param
if ($limitParam === '') {
    // use default 20
    $limitAll = false;
    $limit    = $defaultLimit;
} elseif ($limitParam === 'all') {
    // special value = no LIMIT in SQL
    $limitAll = true;
} else {
    // numeric value, clamp to a reasonable range
    $limitAll = false;
    $limit    = (int)$limitParam;
    if ($limit < 1)   { $limit = 1; }
    if ($limit > 1000){ $limit = 1000; } // hard cap for safety
}

// Build SQL LIMIT clause once, reuse in each query
$limitClause = $limitAll ? '' : (' LIMIT ' . $limit);

$types = [
    'all'      => 'All',
    'messages' => '💬 Messages',
    'rooms'    => '🚪 Rooms',
    'posts'    => '📝 Posts',
    'people'   => '👤 People',
];

if (!array_key_exists($type, $types)) {
    $type = 'all';
}

// Result buckets
$messageResults = [];
$roomResults    = [];
$postResults    = [];
$peopleResults  = [];

// Run queries whenever we have a DB (empty q = "show everything")
if ($db) {
    try {
        $like = '%' . $q . '%';

        // ===== Messages =====
        if ($type === 'all' || $type === 'messages') {
            $sql = "
                SELECT m.id,
                       m.body,
                       m.created_at,
                       m.user,
                       r.slug AS room_slug,
                       r.name AS room_name
                FROM messages m
                JOIN rooms r ON r.id = m.room_id
                WHERE m.body LIKE :q
                   OR m.user LIKE :q
                ORDER BY m.created_at DESC
                $limitClause
            ";
            $stmt = $db->prepare($sql);
            $stmt->execute([':q' => $like]);
            $messageResults = $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
        }

        // ===== Rooms =====
        if ($type === 'all' || $type === 'rooms') {
            $sql = "
                SELECT id, slug, name
                FROM rooms
                WHERE name LIKE :q
                ORDER BY name ASC
                $limitClause
            ";
            $stmt = $db->prepare($sql);
            $stmt->execute([':q' => $like]);
            $roomResults = $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
        }

        // ===== Posts =====
        if ($type === 'all' || $type === 'posts') {
            $sql = "
                SELECT id,
                       title,
                       SUBSTR(body, 1, 200) AS snippet
                FROM posts
                WHERE title LIKE :q
                   OR body LIKE :q
                ORDER BY id DESC
                $limitClause
            ";
            $stmt = $db->prepare($sql);
            $stmt->execute([':q' => $like]);
            $postResults = $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
        }

        // ===== People (authors) =====
        if ($type === 'all' || $type === 'people') {
            $sql = "
                SELECT user,
                       COUNT(*) AS message_count
                FROM messages
                WHERE user LIKE :q
                GROUP BY user
                ORDER BY message_count DESC
                $limitClause
            ";
            $stmt = $db->prepare($sql);
            $stmt->execute([':q' => $like]);
            $peopleResults = $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
        }

    } catch (Throwable $e) {
        // Always log it
        error_log('Search.php DB error: ' . $e->getMessage());

        if ($debug) {
            // Show a simple debug block in the browser
            echo '<div style="padding:1rem; margin:1rem; border:1px solid red; font-family:monospace;">';
            echo '<strong>Search DB error:</strong><br>';
            echo htmlspecialchars($e->getMessage()) . '<br>';
            echo '<small>File: ' . htmlspecialchars($e->getFile()) . ' line ' . (int)$e->getLine() . '</small>';
            echo '</div>';
        } else {
            // Fallback: user-friendly message
            echo '<div class="alert alert-warning m-3">Search is temporarily unavailable.</div>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once __DIR__ . '/___google-analytics.php'; ?>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Search across LensShare messages, rooms, posts, and people with one fun, powerful search hub." />
    <meta name="author" content="LensShare" />

    <!-- Page title -->
    <title>Search – LensShare</title>

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="assets/img/all/galaxy.png" />

    <!-- Bootstrap CSS & your main stylesheet (adjust paths as needed) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />

    <!-- Twitter card and Open Graph-->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Search – LensShare" />
    <meta name="twitter:description" content="Search messages, rooms, posts, and people across LensShare." />
    <meta name="twitter:image" content="https://lensshare.co/assets/img/all/galaxy.png" />

    <meta property="og:url" content="https://lensshare.co/search.php" />
    <meta property="og:title" content="Search – LensShare" />
    <meta property="og:description" content="Search messages, rooms, posts, and people across LensShare." />
    <meta property="og:image" content="https://lensshare.co/assets/img/all/galaxy.png" />

    <style>

        main {
            padding-top: 6.25rem !important;
        }
        #mainNav .navbar-nav .nav-item .nav-link {
            color: rgba(0,0,0,.55);
        }
        #mainNav .navbar-nav .nav-item .nav-link:hover {
            color: rgba(0,0,0,.8);
        }
        #mainNav {
            background-color: #fff;
        }

        /* Small extra touches to make it feel like a fun admin console */
        .search-hero-card {
            border-radius: 1rem;
        }
        .search-chip-bar .nav-link {
            border-radius: 999px;
        }
        .search-chip-bar .nav-link.active {
            font-weight: 600;
        }
        .list-group-item .btn-sm {
            white-space: nowrap;
        }

    </style>
</head>
<body>

    <!-- TODO: copy your main navbar from iheartradio.php or another page -->
    <?php /* include 'partials/navbar.php'; */ ?>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">LensShare</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item my-auto"><a class="nav-link" href="#how-it-works">How it Works</a></li>
                    <li class="nav-item my-auto"><a class="nav-link" href="#getting-started">Getting Started</a></li>
                    <li class="nav-item my-auto"><a class="nav-link" style="margin-right: 0.65rem;" href="#holodeck">Holodeck</a></li>
                    <li class="nav-item"><a class="btn btn-primary text-white" href="room.php?room=happy-hour">Happy Hour</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="bg-light pb-4">

        <div class="container">

            <!-- Search hero -->
            <div class="card shadow-sm mb-4 search-hero-card">
                <div class="card-body">
                    <h1 class="h3 mb-1"><strong>🧭 Explore LensShare</strong></h1>
                    <p class="text-muted mb-3">
                        Find <strong>messages</strong>, <strong>rooms</strong>, <strong>posts</strong>, and <strong>people</strong> with one search.
                    </p>
                    <form class="d-flex gap-2" method="get" action="search.php">
                        <input
                            type="text"
                            class="form-control form-control-lg"
                            name="q"
                            placeholder="Search for coffee, music, gaming, physical health…"
                            value="<?= htmlspecialchars($q ?? '') ?>"
                            autocomplete="off"
                        >
                        <button class="btn btn-primary btn-lg" type="submit">
                            🔍 Search
                        </button>
                    </form>

                    <?php if ($q === ''): ?>
                        <div class="mt-3">
                            <span class="text-muted small me-2">Try:</span>
                            <?php foreach (['coffee','music','gaming','study','physical health'] as $suggest): ?>
                                <a class="badge rounded-pill text-bg-secondary text-decoration-none me-1 mb-1"
                                   href="search.php?q=<?= urlencode($suggest) ?>">
                                    <?= htmlspecialchars($suggest) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Filter chips -->
            <div class="search-chip-bar mb-2">
                <ul class="nav nav-pills flex-wrap">
                    <?php foreach ($types as $tKey => $tLabel): ?>
                        <li class="nav-item me-2 mb-2">
                            <a class="nav-link<?= $type === $tKey ? ' active' : '' ?>"
                               href="search.php?q=<?= urlencode($q) ?>&type=<?= urlencode($tKey) ?>">
                                <?= htmlspecialchars($tLabel) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>


            <?php if ($q !== ''): ?>
                <p class="text-muted small mb-3">
                    Showing results for <strong>"<?= htmlspecialchars($q) ?>"</strong>
                    <?php if ($type !== 'all'): ?>
                        in <strong><?= htmlspecialchars($types[$type]) ?></strong>
                    <?php endif; ?>
                </p>
            <?php else: ?>
                <p class="text-muted small mb-3">
                    Showing all recent activity across LensShare.
                </p>
            <?php endif; ?>

            <?php if (!$db): ?>
                <div class="alert alert-warning">
                    Search is temporarily unavailable. Please try again later.
                </div>
            <?php endif; ?>

            <?php if ($db): ?>

                <?php if ($type === 'all'): ?>

                    <div class="row">

                        <!-- Messages -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge bg-primary me-2">💬 Messages</span>
                                        <span class="fw-semibold">Message matches</span>
                                    </div>
                                    <?php if ($type === 'all' && !empty($messageResults)): ?>
                                        <a class="small text-decoration-none"
                                           href="search.php?q=<?= urlencode($q) ?>&type=messages&limit=all">
                                           View all
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body p-0">
                                    <?php if (empty($messageResults)): ?>
                                        <p class="text-muted small m-3">No matching messages.</p>
                                    <?php else: ?>
                                        <div class="list-group list-group-flush">
                                            <?php foreach ($messageResults as $m): ?>
                                            <div class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-3">
                                                    <div class="small text-muted mb-1">
                                                        <?= htmlspecialchars($m['room_name']) ?> ·
                                                        <?= htmlspecialchars($m['created_at']) ?> ·
                                                        <?= htmlspecialchars($m['user']) ?>
                                                    </div>
                                                    <div>
                                                        <?= htmlspecialchars(mb_strimwidth($m['body'], 0, 140, '…')) ?>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <a class="btn btn-sm btn-outline-primary mb-1"
                                                       href="room.php?room=<?= urlencode($m['room_slug']) ?>&focus=<?= (int)$m['id'] ?>">
                                                        Open in chat
                                                    </a>
                                                    <span class="badge bg-light text-muted small">
                                                        #<?= (int)$m['id'] ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Rooms -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge bg-success me-2">🚪 Rooms</span>
                                        <span class="fw-semibold">Matching rooms</span>
                                    </div>
                                    <?php if ($type === 'all' && !empty($roomResults)): ?>
                                        <a class="small text-decoration-none"
                                           href="search.php?q=<?= urlencode($q) ?>&type=rooms&limit=all">
                                           View all
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body p-0">
                                    <?php if (empty($roomResults)): ?>
                                        <p class="text-muted small m-3">No rooms found.</p>
                                    <?php else: ?>
                                        <div class="list-group list-group-flush">
                                            <?php foreach ($roomResults as $r): ?>
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <div class="fw-semibold">
                                                        <?= htmlspecialchars($r['name']) ?>
                                                    </div>
                                                    <?php if (!empty($r['description'])): ?>
                                                        <div class="small text-muted">
                                                            <?= htmlspecialchars($r['description']) ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <a class="btn btn-sm btn-outline-success"
                                                   href="room.php?room=<?= urlencode($r['slug']) ?>">
                                                    Enter room
                                                </a>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Posts -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge bg-info me-2">📝 Posts</span>
                                        <span class="fw-semibold">Posts & pages</span>
                                    </div>
                                    <?php if ($type === 'all' && !empty($postResults)): ?>
                                        <a class="small text-decoration-none"
                                           href="search.php?q=<?= urlencode($q) ?>&type=posts&limit=all">
                                           View all
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body p-0">
                                    <?php if (empty($postResults)): ?>
                                        <p class="text-muted small m-3">No posts match this search.</p>
                                    <?php else: ?>
                                        <div class="list-group list-group-flush">
                                            <?php foreach ($postResults as $p): ?>
                                            <div class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-3">
                                                    <div class="fw-semibold mb-1">
                                                        <?= htmlspecialchars($p['title']) ?>
                                                    </div>
                                                    <div class="small text-muted">
                                                        <?= htmlspecialchars(mb_strimwidth($p['snippet'], 0, 160, '…')) ?>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-outline-info"
                                                   href="post.php?id=<?= (int)$p['id'] ?>">
                                                    Open post
                                                </a>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- People -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="badge bg-warning text-dark me-2">👤 People</span>
                                        <span class="fw-semibold">Authors & participants</span>
                                    </div>
                                    <?php if ($type === 'all' && !empty($peopleResults)): ?>
                                        <a class="small text-decoration-none"
                                           href="search.php?q=<?= urlencode($q) ?>&type=people&limit=all">
                                           View all
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body p-0">
                                    <?php if (empty($peopleResults)): ?>
                                        <p class="text-muted small m-3">No people found.</p>
                                    <?php else: ?>
                                        <div class="list-group list-group-flush">
                                            <?php foreach ($peopleResults as $person): ?>
                                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <div class="fw-semibold">
                                                        <?= htmlspecialchars($person['user']) ?>
                                                    </div>
                                                    <div class="small text-muted">
                                                        <?= (int)$person['message_count'] ?> messages
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-outline-warning"
                                                   href="search.php?q=<?= urlencode($person['user']) ?>&type=messages">
                                                    View messages
                                                </a>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <?php else: ?>

                    <!-- Single-column view when a specific type is active -->
                    <?php if ($type === 'messages'): ?>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="badge bg-primary me-2">💬 Messages</span>
                                    <span class="fw-semibold">Message matches</span>
                                </div>
                                <?php if ($type === 'all' && !empty($messageResults)): ?>
                                    <a class="small text-decoration-none"
                                       href="search.php?q=<?= urlencode($q) ?>&type=messages">
                                       View all
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="card-body p-0">
                                <?php if (empty($messageResults)): ?>
                                    <p class="text-muted small m-3">No matching messages.</p>
                                <?php else: ?>
                                    <div class="list-group list-group-flush">
                                        <?php foreach ($messageResults as $m): ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-3">
                                                <div class="small text-muted mb-1">
                                                    <?= htmlspecialchars($m['room_name']) ?> ·
                                                    <?= htmlspecialchars($m['created_at']) ?> ·
                                                    <?= htmlspecialchars($m['user']) ?>
                                                </div>
                                                <div>
                                                    <?= htmlspecialchars(mb_strimwidth($m['body'], 0, 140, '…')) ?>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-end">
                                                <a class="btn btn-sm btn-outline-primary mb-1"
                                                   href="room.php?room=<?= urlencode($m['room_slug']) ?>&focus=<?= (int)$m['id'] ?>">
                                                    Open in chat
                                                </a>
                                                <span class="badge bg-light text-muted small">
                                                    #<?= (int)$m['id'] ?>
                                                </span>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php elseif ($type === 'rooms'): ?>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="badge bg-success me-2">🚪 Rooms</span>
                                    <span class="fw-semibold">Matching rooms</span>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <?php if (empty($roomResults)): ?>
                                    <p class="text-muted small m-3">No rooms found.</p>
                                <?php else: ?>
                                    <div class="list-group list-group-flush">
                                        <?php foreach ($roomResults as $r): ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-semibold">
                                                    <?= htmlspecialchars($r['name']) ?>
                                                </div>
                                                <?php if (!empty($r['description'])): ?>
                                                    <div class="small text-muted">
                                                        <?= htmlspecialchars($r['description']) ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <a class="btn btn-sm btn-outline-success"
                                               href="room.php?room=<?= urlencode($r['slug']) ?>">
                                                Enter room
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php elseif ($type === 'posts'): ?>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="badge bg-info me-2">📝 Posts</span>
                                    <span class="fw-semibold">Posts & pages</span>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <?php if (empty($postResults)): ?>
                                    <p class="text-muted small m-3">No posts match this search.</p>
                                <?php else: ?>
                                    <div class="list-group list-group-flush">
                                        <?php foreach ($postResults as $p): ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-3">
                                                <div class="fw-semibold mb-1">
                                                    <?= htmlspecialchars($p['title']) ?>
                                                </div>
                                                <div class="small text-muted">
                                                    <?= htmlspecialchars(mb_strimwidth($p['snippet'], 0, 160, '…')) ?>
                                                </div>
                                            </div>
                                            <a class="btn btn-sm btn-outline-info"
                                               href="post.php?id=<?= (int)$p['id'] ?>">
                                                Open post
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php elseif ($type === 'people'): ?>
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="badge bg-warning text-dark me-2">👤 People</span>
                                    <span class="fw-semibold">Authors & participants</span>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <?php if (empty($peopleResults)): ?>
                                    <p class="text-muted small m-3">No people found.</p>
                                <?php else: ?>
                                    <div class="list-group list-group-flush">
                                        <?php foreach ($peopleResults as $person): ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <div class="fw-semibold">
                                                    <?= htmlspecialchars($person['user']) ?>
                                                </div>
                                                <div class="small text-muted">
                                                    <?= (int)$person['message_count'] ?> messages
                                                </div>
                                            </div>
                                            <a class="btn btn-sm btn-outline-warning"
                                               href="search.php?q=<?= urlencode($person['user']) ?>&type=messages">
                                                View messages
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

            <?php endif; ?>

        </div>
    </main>

    <?php require_once("___footer.php"); ?>

    <!-- TODO: copy your main footer from iheartradio.php or another page -->
    <?php /* include 'partials/footer.php'; */ ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
