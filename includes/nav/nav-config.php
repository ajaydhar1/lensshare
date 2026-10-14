<?php
// includes/nav/nav-config.php — single source of truth for LensShare global navigation.
// Returns plain data only. Rendering lives in site-nav.php.

return [
    'brand' => [
        'name' => 'LensShare',
        'href' => 'index.php',
    ],

    // Global destinations. 'key' is matched against the page's 'active' option.
    // 'spy' (optional) is a same-page section id used for scroll-based highlighting.
    'global' => [
        ['key' => 'explore',  'label' => 'Explore',  'href' => 'explore.php'],
        ['key' => 'portals',  'label' => 'Portals',  'menu' => 'portals'],
        ['key' => 'holodeck', 'label' => 'Holodeck', 'href' => 'index.php#holodeck', 'spy' => 'holodeck'],
    ],

    // Contents of the Portals menu.
    'portals' => [
        ['key' => 'work',          'label' => 'Work Rooms',          'href' => 'work.php',          'icon' => '💼', 'desc' => 'Careers, teams & job titles'],
        ['key' => 'sports',        'label' => 'Sports & Fitness',    'href' => 'sports.php',        'icon' => '🏟️', 'desc' => 'Pro leagues, training & fans'],
        ['key' => 'education',     'label' => 'School & Education',  'href' => 'education.php',     'icon' => '🎓', 'desc' => 'Study groups & college prep'],
        ['key' => 'entertainment', 'label' => 'Entertainment',       'href' => 'entertainment.php', 'icon' => '🎬', 'desc' => 'Watch parties, media & games'],
        ['key' => 'health',        'label' => 'Health & Wellbeing',  'href' => 'health.php',        'icon' => '🌿', 'desc' => 'Mind, body & support'],
        ['key' => 'relationships', 'label' => 'Relationships',       'href' => 'relationships.php', 'icon' => '💬', 'desc' => 'Dating, family & friends'],
        ['key' => 'technology',    'label' => 'Technology',          'href' => 'technology.php',    'icon' => '🚀', 'desc' => 'Gadgets, future tech & culture'],
    ],

    // Persistent call to action.
    'cta' => [
        'key'   => 'happy-hour',
        'label' => 'Happy Hour',
        'href'  => 'room.php?room=happy-hour',
    ],
];
