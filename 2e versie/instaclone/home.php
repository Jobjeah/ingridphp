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
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="upload.php">Upload</a></li>
              <table>
                  <tr>
                      <td>
                          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                              <select name="sorteermenu">
                                  <option value="date_asc">Datum oplopend</option>
                                  <option value="date_desc">Datum aflopend</option>
                                  <option value="descr_asc">Beschrijving oplopend</option>
                                  <option value="descr_desc">Beschrijving aflopend</option>
                              </select>
                              <input type="submit" name="submit_sort" value="Sorteren"/>
                          </form>
                      </td>
                  </tr>
              </table>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div id="containertje">
        <div class="grid">
            <?php
            require_once('dbconnect.php');
            $dbc = mysqli_connect(HOST, USER, PASS, DBNAME);
            if (mysqli_connect_error()) {
                echo "MySQL fout: " . mysqli_connect_error();
            }

            $sorttype = 'date';
            $order = 'DESC';

            if(isset($_POST['submit_sort'])){
                switch ($_POST['sorteermenu']){
                    case 'date_asc': $sorttype = 'date';
                        $order = 'ASC';
                        break;
                    case 'date_desc': $sorttype = 'date';
                        $order = 'DESC';
                        break;
                    case 'descr_asc': $sorttype = 'description';
                        $order = 'ASC';
                        break;
                    case 'descr_desc': $sorttype = 'description';
                        $order = 'DESC';
                        break;
                }
            }

            $query = "SELECT * FROM upload_met_db ORDER BY $sorttype $order";
            $result = mysqli_query($dbc, $query);
            while ($row = mysqli_fetch_array($result)) {
                $target = $row['target'];
                $date = $row['date'];
                $username = $row['username'];
                $description = $row['description'];
                echo '<h3>' . $username . '</h3><b>'  . $date . '</b><br>' . $description . '<br>';
                echo '<img src="' . $target . '" width="40%" height="40%" /><br>';
            }
            mysqli_close($dbc);
            ?>
        </div>
    </div>
</body>
</html>