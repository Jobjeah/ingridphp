<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DBNAME', '17917_instaclonedatabase');

$dbc = new mysqli(HOST,USER,PASS,DBNAME);

if ($dbc->connect_error) {
    die("ERROR : -> ".$dbc->connect_error);
}
?>
