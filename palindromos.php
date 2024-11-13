<?php
function esPalindromo($cadena) {
    $cadenaNormalizada = strtolower(preg_replace('/[^a-z0-9]/i', '', $cadena));
    $cadenaInvertida = '';

    for($i = strlen($cadenaNormalizada) - 1; $i >= 0; $i--) {
        $cadenaInvertida .= $cadenaNormalizada[$i];
    }

    echo $cadenaNormalizada . '<br>';
    echo $cadenaInvertida . '<br>';

    if ($cadenaNormalizada == $cadenaInvertida) {
        echo 'es un palindromo';
    } else {
        echo 'no es un palindromo';
    }
}

esPalindromo('Anita lava la tina');
?>