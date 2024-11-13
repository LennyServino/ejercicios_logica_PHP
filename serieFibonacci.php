<?php
function fibonacciNumbers($number) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < $number; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

$number = 10;
$fibonacci = fibonacciNumbers($number);
echo "Serie Fibonacci: ";
for ($i = 0; $i < $number; $i++) {
    echo $fibonacci[$i] . " ";
}
?>