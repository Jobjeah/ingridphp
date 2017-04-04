<?php
    require_once('connectvars.php');
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="upload.css" />
    <title>File Upload Form</title>
</head>
<body>
<div id="content">
    <a href="index.php"><input type="button" value="Terug naar de homepage" id="button"/></a>
</div>
</body>
</html>