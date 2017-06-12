<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-22
 * Time: 13:30
 */

function pesel($pesel) {
    $date = "";
    $plec = "";
    $day = substr($pesel, 0, 2);
    $month = substr($pesel, 2, 2);
    $year = substr($pesel, 4, 2);
    $date = $day."-".$month."-".$year."r.";
    $plec = substr($pesel, -2, 1);

    if($plec % 2 == 0) {
        echo "Z peselu wynika, że płeć to kobieta";
    }
    else {
        echo "Z peselu wynika, że płeć to mężczyzna";
    }

    echo $date;


}

pesel("93040102159");









?>