<?php
// tools/room_names_all_caps.php

require __DIR__ . '/../config.php'; // gives you $env['db_path'] etc.

$db = new PDO('sqlite:' . $env['db_path']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $db->prepare('UPDATE rooms SET name = UPPER(name);');
$stmt->execute();


echo "Done.\n";