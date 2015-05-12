<?php

if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    // local db
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'vacc_db');
    define('DB_USER', 'root');
    define('DB_PW', '6RuORZ`D,vkl4HX*.&bJ');
} else {
    // 1&1 db
    define('DB_HOST', 'db568509021.db.1and1.com');
    define('DB_NAME', 'db568509021');
    define('DB_USER', 'dbo568509021');
    define('DB_PW', '0ItZ58ucz3ckXDPOWes9');
};

// connect to db
$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);
$dbh->query('set character set "utf8"');

