<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2016-07-27
 * Time: 11:34
 */

function ZamienLiczbyJesliTrzeba($liczba1,$liczba2) {

    echo "Podana liczba pierwsza: ".$liczba1."<br/>";
    echo "Podana liczba druga: ".$liczba2."<br/>";



    if ($liczba1 > $liczba2) {

        $test = $liczba1;
        $liczba1 = $liczba2;
        $liczba2 = $test;

        echo "Liczba pierwsza jest większa od liczby drugiej, zatem przyjmują nawzajem swoje wartości:<br/>Liczba pierwsza: ".$liczba1."<br/>Liczba druga: ".$liczba2;
    } else {
        echo $liczba1;
    }

}

ZamienLiczbyJesliTrzeba(444,222);