<?php
function myArrayMap(callable $callback, array $array1, array $array2) {
    $result = [];
    $count = min(count($array1), count($array2));
    for ($i = 0; $i < $count; $i++) {
        $result[] = $callback($array1[$i], $array2[$i]);
    }
    return $result;
}

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$mapped = myArrayMap(function ($a, $b) {
    return $a * $b;
}, $array1, $array2);

print_r($mapped); // [4, 10, 18]
