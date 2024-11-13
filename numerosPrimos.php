<?php
function esPrimo($number) {
    $isPrime = true;
    if($number < 2) {
        echo 'no es un numero primo';
        return;
    }

    for ($i = 2; $i < $number ; $i++) { 
        if (($number % $i) == 0) {
            $isPrime = false;
            break;
        } 
    }

    if ($isPrime) {
        echo 'es un numero primo';
    } else {
        echo 'no es un numero primo';
    }
}

esPrimo(7);
?>