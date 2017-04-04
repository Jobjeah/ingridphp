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

    <link rel="stylesheet" href="upload.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">  Insta Clone</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li class="active"><a href="upload.php">Upload</a><li/>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div id="content">
    <form method="post" action="processupload.php" enctype="multipart/form-data">
        <h1>Foto's uploaden</h1>
        <input type="hidden" name="size" value="10000000">
        <div>
            <input type="file" name="image" id="imageupload">
        </div>
        <div>
            <textarea name="text" cols="40" rows="" placeholder="Say something about this image..."></textarea>
        </div>
        <div>
            <input type="submit" name="upload" value="Upload Image" id="button">
        </div>
    </form>
</div>

    <?php

    $msg = "";
    // if upload button is pressed
    if (isset($_POST['upload'])) {
        //Path to store the uploaded image
        $target = "images/" .basename($_FILES['image']['name']);

        // Connect to the database
        $dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('Error!');

        // Get all the submitted date from the form
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];

        $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
        mysqli_query($dbc, $sql); //stores the submitted date into the databse table: images

        //Now let's move the uploaded inmage into the folder: images
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded succes";
        }else{
            $msg = "There was a problem";
        }
    }
    ?>
</body>
</html>