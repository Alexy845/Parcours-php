<?php
function myArrayReduce(array $array, callable $callback, $initial = null) {
    $accumulator = $initial;

    foreach ($array as $value) {
        $accumulator = $callback($accumulator, $value);
    }

    return $accumulator;
}

$array = [1, 2, 3, 4, 5];

$sum = myArrayReduce($array, function ($accumulator, $value) {
    return $accumulator + $value;
}, 0);

echo $sum; // 15
