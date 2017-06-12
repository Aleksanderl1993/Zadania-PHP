<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-26
 * Time: 11:38
 */


function Schain($chain){

    $newchain = str_split($chain);

    echo '<pre>';
    print_r($newchain);
    echo '</pre>';

    for ($i = 0; $i < count($newchain); $i += 2) {
        echo $newchain[$i];
    }

}

//Schain("123456789");






function firstLastElement($chain){

    $newchain = str_split($chain);

    echo '<pre>';
    print_r($newchain);
    echo '</pre>';

    $first = (int)array_values($newchain)[0];
    $last = (int)end($newchain);

    $sum = $first + $last;

    echo "Wynik dodawania elementów pierwszego i ostatniego to: $sum";
}

firstLastElement("123456789");

firstLastElement("abcdefghij");