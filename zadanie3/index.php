<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-26
 * Time: 10:56
 */

function compare($liczba1,$liczba2) {


    if (strlen($liczba1) == 3 && strlen($liczba2) ==3) {

        if ($liczba1 == $liczba2) {
            return 1;
        }
        else {
            return 0;
        }
    } else {
        return false;
    }


}

$porownanie = compare(3211,321);

if ($porownanie === 1) {
    echo ":)";
} elseif ($porownanie === 0) {
    echo ":(";
} elseif ($porownanie === false) {
    echo "podano złe liczby";
}