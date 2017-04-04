<?php

include '../dbconnect.php';
$user_id = $_GET['user_id'];

$dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('Error!');

$query = "DELETE FROM instaclone_users WHERE user_id = '$user_id'";
$result = mysqli_query($dbc, $query) or die('Database error!');

mysqli_close($dbc);
header('location: ../admin.php');

?>