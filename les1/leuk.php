
<html>
<head>
    <body>
    <form>
        <input type="text" name=" beverage" </br>
        <input type="submit" name="submit" value="go!"
    </form>
</body>
</head>
<?php

$beverage = $_POST('beverage');
switch($beverage)    {
    case 'cola';
        echo 'you are allowed to have cola';
        break;

    case 'beer';
        echo 'you are not allowed to have beer';
        break;

    case 'appelsap';
        echo 'you are allowed to drink apple juice';
        break;

    default:
        echo 'i dont know what that is';

}
?>
</html>
