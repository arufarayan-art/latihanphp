<?php

//Contoh 1
function luasSegitiga($alas, $tinggi) {
    //code
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}
function sum(...$input) {
    $result = 0;

    foreach ($input as $value) {
        $result = $result + $value;
    }

    return $result;
}

echo sum(1,2,3,56,23,334,56);