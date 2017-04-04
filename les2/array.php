<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
</head>
<body>
<?php

echo '<p> == getallen  == </p>';
$numbers = array('2', '4', '6', '1', '3', '5');
$numbers[5] = '10';
array_push($numbers, '8', '9');
foreach ($numbers as $nummer) {
    echo '<p>' . $nummer . '</p>';
}

echo '<p> == mix == </p>';
$mixed = array('9', 'juni', '3', '6', 'december', 'maart', '2');
$mixed[0] = 'hier';
$mixed [1] = 'staat';
$mixed[2] = 'iets';
array_push($mixed, 'random', '24', 'kat');
foreach ($mixed as $mix) {
    echo '<p>' . $mix . '</p>';
}

echo '<p> == Vakken == </p>';
$subject = array('PHP' => 'Ingrid',
    'JavaScript' => 'Ed',
    'Engels' => 'Paul');
echo '<p>' . $subject['PHP'] . '</p>';
echo '<p>' . $subject['JavaScript'] . '</p>';


echo '<p> == Kleuren == </p>';
$color = array('white', 'green', 'red', 'blue', 'black');
echo '<p> The ' . $color[2] . ' carpet </p>';
echo '<p> The ' . $color[1] . ' lawn </p>';
echo '<p> The ' . $color[0] . ' house </p>';
echo '<p> The leaden sky </p>';

echo '<p> == Kleuren 2 == </p>';
$color2 = array('white', 'green', 'red');
foreach ($color2 as $kleuren2){
    echo  $kleuren2 . ', ';
}
echo '<p>' . $color2[1] . '</p>';
echo '<p>' . $color2[2] . '</p>';
echo '<p>' . $color2[0] . '</p>';

echo '<p> == Landen == </p>';
$ceu = array( "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France" => "Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid",
    "Sweden"=>"Stockholm",
    "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin",
    "Hungary"=>"Budapest",
    "Latvia"=>"Riga",
    "Malta"=>"Valetta",
    "Austria" => "Vienna",
    "Poland"=>"Warsaw") ;

echo '<p> The capital of Italy is ' . $ceu["Italy"] . '</p>';
echo '<p> The capital of Luxembourg is ' . $ceu["Luxembourg"] . '</p>';
echo '<p> The capital of Belgium is ' . $ceu["Belgium"] . '</p>';
echo '<p> The capital of Denmark is ' . $ceu["Denmark"] . '</p>';
echo '<p> The capital of Finland is ' . $ceu["Finland"] . '</p>';
echo '<p> The capital of France is ' . $ceu["France"] . '</p>';
echo '<p> The capital of Slovakia is ' . $ceu["Slovakia"] . '</p>';
echo '<p> The capital of Slovenia is ' . $ceu["Slovenia"] . '</p>';
echo '<p> The capital of Germany is ' . $ceu["Germany"] . '</p>';
echo '<p> The capital of Greece is ' . $ceu["Greece"] . '</p>';
echo '<p> The capital of Ireland' . $ceu["Ireland"] . '</p>';
echo '<p> The capital of The Netherlands is ' . $ceu["Netherlands"] . '</p>';
echo '<p> The capital of Portugal is ' . $ceu["Portugal"] . '</p>';
echo '<p> The capital of Spain is ' . $ceu["Spain"] . '</p>';
echo '<p> The capital of Sweden is ' . $ceu["Sweden"] . '</p>';
echo '<p> The capital of The United Kingdom is ' . $ceu["United Kingdom"] . '</p>';
echo '<p> The capital of Cyprus is ' . $ceu["Cyprus"] . '</p>';
echo '<p> The capital of Lithuania is ' . $ceu["Lithuania"] . '</p>';
echo '<p> The capital of The Czech Republic is ' . $ceu["Czech Republic"] . '</p>';
echo '<p> The capital of Estonia is ' . $ceu["Estonia"] . '</p>';
echo '<p> The capital of Hungary is ' . $ceu["Hungary"] . '</p>';
echo '<p> The capital of Latvia is ' . $ceu["Latvia"] . '</p>';
echo '<p> The capital of Malta is ' . $ceu["Malta"] . '</p>';
echo '<p> The capital of Austria is ' . $ceu["Austria"] . '</p>';
echo '<p> The capital of Poland is ' . $ceu["Poland"] . '</p>';





?>
</body>
</html>