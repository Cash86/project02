<?php
// db-host
define('DB_HOST', 'localhost');
define('DB_NAME', 'vacc_db');
define('DB_USER', 'dbviewer');
define('DB_PW', '0ItZ58ucz3ckXDPOWes9');

// connect to db
$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);

