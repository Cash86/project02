<?php

if ($_SERVER["SERVER_NAME"] == 'localhost') {
    // local db
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'vacc_db');
    define('DB_USER', 'dbviewer');
    define('DB_PW', '0ItZ58ucz3ckXDPOWes9');
} else {
    // 1&1 db
    define('DB_HOST', 'db568509021.db.1and1.com');
    define('DB_NAME', 'db568509021');
    define('DB_USER', 'dbo568509021');
    define('DB_PW', '0ItZ58ucz3ckXDPOWes9');
};

// connect to db
$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);

