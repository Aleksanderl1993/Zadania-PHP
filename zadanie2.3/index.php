<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-27
 * Time: 13:25
 */

function ListaLiczb($zakres1, $zakres2, $ilosc)
{
    $emptyarray = array();
    for ($i = $zakres1; $i <= $zakres2; $i++) {
        echo "Zmienna i = " . $i . "<br />";
        array_push($emptyarray, $i);
    }
    echo "<pre>";
    print_r($emptyarray);
    echo "</pre>";


    if ($ilosc >= 0) {
        $a = array_rand($emptyarray, $ilosc);
        print_r($a);
    } else {
        echo "Wartość: <pre><ul><li>".$ilosc."</li></ul></pre> nie jest większa od 0!";

    }


}

ListaLiczb(1, 7, 3);