<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: index.php");
}

$query = $dbc->query("SELECT * FROM instaclone_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$dbc->close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome - <?php echo $userRow['email']; ?></title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header id="navmenu">
    <nav>
        <ul class="topnav" id="myTopnav">
            <li><a class="active" href="index.php"><img src="img/instagram.png" height="15px">     Instaclone</a></li>
            <li style="float: right;"><a href="#">Admin</a></li>
            <li style="float: right;"><a href="upload.php">Upload</a></li>
            <li style="float: right;"><a href="register.php">Registreren</a></li>
            <li style="float: right;"><a href="logout.php">Uitloggen</a></li>
            <li style="float: right;"><a href="inlog.php">Inlog</a></li>
        </ul>
    </nav>
</header>


<div id="container">
    <div class="grid">
        <?php
        require_once('dbconnect.php');
        $sql = "SELECT * FROM images ORDER BY rand() DESC";
        $result = mysqli_query($dbc,$sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<img src='images/".$row['image']."'>";
        }



        ?>
    </div>
</div>

</body>
</html>
