<?php
// tools/sql_query.php

require __DIR__ . '/../config.php'; // gives you $env['db_path'] etc.

$db = new PDO('sqlite:' . $env['db_path']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $db->prepare('ALTER TABLE rooms ADD COLUMN is_active INTEGER NOT NULL DEFAULT 1;');
$stmt->execute();


echo "Done.\n";