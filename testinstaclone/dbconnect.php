<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'root');
    define('DBNAME', '17917_instaclonedatabase');

$dbc = new MySQLi(HOST,USER,PASS,DBNAME);

if ($dbc->connect_errno) {
    die("ERROR : -> ".$DBcon->connect_error);
}
    ?>