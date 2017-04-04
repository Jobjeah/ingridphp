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
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="83886080"" />
        <input type="file" name="image" /><br>
        <label for="description">Omschrijving (max. 140 tekens)</label>
        <textarea name="description" id="description"></textarea>
        <input type="submit" name="submit" value="Uploaden" />
    </form>
    <br />
    <br />
</div>
<?php
$uploaded = 0;
require_once('dbconnect.php');
if(isset($_POST['submit'])) {
    $dbc = mysqli_connect(HOST, USER, PASS, DBNAME);
    if (mysqli_connect_error()) {
        echo "MySQL fout: " . mysqli_connect_error();
    }
    $description = mysqli_real_escape_string($dbc,trim($_POST['description']));
    $target = 'images/' . time() . $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    if (!empty($description)) {
        if(move_uploaded_file($temp,$target)) {
            echo '<br>Afbeelding is geüpload!';
            $uploaded++;
        }
    }
}

if($uploaded == 1) {
    echo'<br>Afbeelding staat op de site!<br>';
    $query = "INSERT INTO upload_met_db VALUES (0,NOW(),'$description','$target','Job')";
    $result = mysqli_query($dbc,$query) or die('Error querying.');
} else if($uploaded == 2) {
    echo '<br>Er is iets mis gegaan...';
}



?>
</body>
</html>