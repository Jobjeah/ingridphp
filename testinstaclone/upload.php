


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hoofdpagina</title>
    <link rel="stylesheet" href="upload.css" />
</head>
<body>
    <header id="navmenu">
        <nav>
            <ul class="topnav" id="myTopnav">
                <li><a class="active" href="index.php"><img src="img/instagram.png" height="15px">     Instaclone</a></li>
                <li style="float: right;"><a href="#">Admin</a></li>
                <li style="float: right;"><a href="upload.php">Upload</a></li>
                <li style="float: right;"><a href="instaclone_register.php">Registreren</a></li>
                <li style="float: right;"><a href="instaclone_logout.php">Uitloggen</a></li>
                <li style="float: right;"><a href="instaclone_inlog.php">Inlog</a></li>
            </ul>
        </nav>
    </header>
        <div id="wrapper">
            <form method="post" action="testupload.php" enctype="multipart/form-data">
                <h1>Foto's uploaden</h1>
                <input type="hidden" name="size" value="10000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" cols="40" rows="" placeholder="Say something about this image..."></textarea>
                </div>
                <div>
                    <input type="submit" name="upload" value="Upload Image" id="button">
                </div>
            </form>
            <br/>
        <br/>
    </div>


</body>
</html>
