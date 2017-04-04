<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Strings</title>
    </head>
    <body>


<?php


    $str = 'this is some text. I will be using PHP string functions to change it';
    $str_lower = strtolower($str);
    $str_camel = ucwords($str);
    $str_lcfirst = lcfirst($str);
    $str_replace = str_replace("PHP","HTML",$str);
    $str_backwards = strrev($str);
    $str_upper = strtoupper($str);
    $str_rotzooi = str_shuffle($str);
    $str_woordjestellen = str_word_count($str);
    $str_letterstellen = strlen($str);
    $str_beginletterjes = stripos($str,"php");
    $str_raarkind = bin2hex($str);

?>

<b>output</b>

<?php
    echo '<p>' . $str_lower . '</p>';
    echo '<p>' . $str_camel . '</p>';
    echo '<p>' . $str_lcfirst . '</p>';
    echo '<p>' . $str_replace . '</p>';
    echo '<p>' . $str_backwards . '</p>';
    echo '<p>' . $str_upper . '</p>';
    echo '<p>' . $str_rotzooi . '</p>';




?>

<b>The number of words in the string</b>

<?php
    echo '<p>' . $str_woordjestellen . '</p>';

?>


<b>The numbers of characters in the string</b>

<?php
    echo '<p>' . $str_letterstellen. '</p>';

?>

<b>The word PHP starts at position :</b>

<?php
    echo '<p>' . $str_beginletterjes. '</p>';
?>

<b>Deze string geeft alles in hexadecimale waardes :</b>

<?php
echo '<p>' . $str_raarkind . '</p>';
?>
</body>
</hmtl>