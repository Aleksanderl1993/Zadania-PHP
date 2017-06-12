<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-28
 * Time: 19:55
 */

function DzielenieTekstow($wyrazenie_zlozone) {
$a = explode(",", $wyrazenie_zlozone);
    for ($i = 0; $i < count($a); $i++) {
        if ($i == 0 || $i == count($a)-1) {
            echo strtoupper($a[$i]);
        } else {
            if (strlen($a[$i]) > 7) {
                echo "<strong>".strtolower($a[$i]."</strong>");
            }
            else {
                echo $a[$i];
            }
        }
echo "<br />";

    }

}

DzielenieTekstow("Komputer,Serwer,Router,Klawiatura,Mysz,Karta sieciowa,Monitor,Zasilacz");