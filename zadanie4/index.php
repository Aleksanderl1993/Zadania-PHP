<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-26
 * Time: 12:14
 */

function compare($liczba1, $liczba2)
{

    $liczba3 = str_split($liczba1);
    $liczba4 = str_split($liczba2);

    echo '<pre>';
    print_r($liczba3);
    print_r($liczba4);
    echo '</pre>';

    $pierwszaliczba = array_sum($liczba3);
    $drugaliczba = array_sum($liczba4);

    echo "$pierwszaliczba $drugaliczba<br/>";

    echo "porównywanie sum:<br/>";

    if ($pierwszaliczba === $drugaliczba) {
        echo "1";
    } else {
        echo "0\n";
    }

    // sprawdzanie parzystości

}

$pierwszaliczba = 123;
$drugaliczba = 322;


// init
compare($pierwszaliczba, $drugaliczba);


if (($pierwszaliczba % 2 == 0) && ($drugaliczba % 2 == 0))  {
    echo "3";
} else {
    echo "4";
}
