<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-28
 * Time: 20:00
 */


if (isset($_POST["checker"]) && $_POST["checker"] == 1) {
    print_r($_POST);
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $a * $b;

    if ($a < 1 || $b < 1) {
        echo "<br/><br/>Fatal error!!! Pole nie może wynosić 0 lub być ujemne!";
    } else {
        echo "<br/><br/>Pole figury o boku a = " . $a . "i b = " . $b . " wynosi " . $c;
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 4.1</title>
    <meta charset="utf-8">
</head>
<body>

<h1>FORMULARZ</h1>

<form action="" method="post">
    Bok a: <input type="number" name="a" id="a"><br>
    Bok b: <input type="number" name="b" id="b"><br><br>
    <input type="hidden" name="checker" id="checker" value="1"/>
    <input type="submit" value="Prześlij dane"/>
</form>

</body>
</html>

