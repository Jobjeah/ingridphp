<!DOCTYPE html>
<html>
<head>
    <title>Les 1</title>
    <meta charset="utf-8">
</head>
<body>

<?php

echo '<h1>KEUZE</h1><br><form method ="post" >
    <input type="radio" name="game" value="cod">Call of Duty <br/>
    <input type="radio" name="game" value="mc">Minecraft <br/>
    <input type="radio" name="game" value="ow">Overwatch <br/>
    <input type="submit" name="submit">
</form>
<h1>ZELF INVOEREN</h1>
<h3>cod, mc of ow</h3>
<form method="post">
  <input type="text" name="game"><br>
  <input type="submit" name="submit"><br>
</form>';

$game = $_POST["game"];

switch($game) {
    case 'cod';
        echo '<img src="img/cod.jpg" alt="Call of Duty">';
        break;
    case 'mc';
        echo '<img src="img/mc.jpg" alt="Minecraft">';
        break;
    case 'ow';
        echo '<img src="img/ow.jpg" alt="Overwatch">';
        break;
    default:
        echo 'I dont know what game that is.';
 }
?>
</body>
</html>
