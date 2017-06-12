<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-27
 * Time: 10:37
 */

function average($number1, $number2, $number3)
{
    $array = array($number1, $number2, $number3);
    $average = array_sum($array) / count($array);
    asort($array);
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $s = count($array);
    if (($s % 2 == 0)) {
        $median = $array[$s / 2] / $array[$s / 2 - 1];
    } else {

        $median = $array[($s - 1) / 2];
    }

    echo $average;
    echo "<br/>";
    echo $median;

}

average(101, 102, 100);