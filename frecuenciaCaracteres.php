<?php
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    $cadena = strtolower(preg_replace('/[^a-z0-9]/i', '', $cadena));
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (isset($frecuencia[$cadena[$i]])) {
            $frecuencia[$cadena[$i]]++;
        } else {
            $frecuencia[$cadena[$i]] = 1;
        }
    }
    return $frecuencia;
}

$cadena = 'Anita lava la tina';
$frecuencia = frecuenciaCaracteres($cadena);
foreach ($frecuencia as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}
?>