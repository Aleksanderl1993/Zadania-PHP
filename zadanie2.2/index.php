<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-27
 * Time: 12:14
 */


function SumaLiczb($zakres1,$zakres2) {
    $sum = 0;

    if ($zakres1 > $zakres2) {
        $test = $zakres1;
        $zakres1 = $zakres2;
        $zakres2 = $test;
    }
    for($i = $zakres1; $i <= $zakres2; $i++){
        echo "Zmienna i = ".$i."<br />";
        $sum = $i + $sum;
        echo $sum."<br/>";
    }
}

SumaLiczb(10, 15);