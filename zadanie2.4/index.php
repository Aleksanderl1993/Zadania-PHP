<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-28
 * Time: 09:17
 */

function WyswietlLiczby_ObliczSrednia($ilość1, $ilość2, $zakres1, $zakres2)
{

    $array = array();
    for ($i = $ilość1; $i <= $ilość2; $i++) {
        echo "Zmienna i = " . $i . "<br />";
        array_push($array, rand($ilość1, $ilość2));
    }

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $arrayRange = array();
    for ($i = $zakres1; $i <= $zakres2; $i++) {
        echo "Zmienna i = " . $i . "<br />";
        array_push($arrayRange, $i);
    }
    echo "<pre>";
    print_r($arrayRange);
    echo "</pre>";
    $randCount = array_rand($arrayRange, count($array));
    print_r($randCount);
    $randRange = array_rand($arrayRange, $i);
    print_r($randRange);
//    $tab = array($array[$randCount], $arrayRange[$randRange]);

}

WyswietlLiczby_ObliczSrednia(1, 4, 7, 12);