<?php
define('DB_SERVER', '127.0.0.1'); // Change 127.0.0.1 to mariadb if on docker
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');

$mysqli = mysqli_connect(
    DB_SERVER,
    DB_USERNAME,
    DB_PASSWORD,
    DB_DATABASE,
    3306,
    '/var/run/mysqld/mysqld.sock');

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}