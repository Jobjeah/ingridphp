<?php
session_start();
include_once 'dbconnect.php';

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

    <link rel="stylesheet" href="admin.css" type="text/css" />
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
            <a class="navbar-brand" href="home.php">Insta Clone</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li class="active"><a href="admin.php">Admin</a><li/>
                <li><a href="upload.php">Upload</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="signin-form">
    <div class="container">
        <form class="form-signin" method="post" id="login-form">
            <h2 class="form-signin-heading">Sign In.</h2><hr />
            <?php
            if(isset($msg)){
                echo $msg;
            }
            ?>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required />
            </div>
            <hr />

            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                </button>
            </div>
        </form>
    </div>
</div>

<?php
    if(isset($_POST['password'])) {
        if($_POST['password'] == 'Me7tnnkm!') {
            echo "Wachtwoord geaccepteerd, welkom!";
            header("Location: admin.php");
            exit;
        } else {
            echo "Wachtwoord verkeerd, tot ziens!";
        }
    }
?>
</body>
</html>