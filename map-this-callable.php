<?php
function myArrayMap(callable $callback, array $array) {
    $result = [];

    foreach ($array as $value) {
        $result[] = $callback($value);
    }

    return $result;
}

$array = [1, 2, 3, 4];
$mapped = myArrayMap(function ($a) {
    return $a * 2;
}, $array);

print_r($mapped); // [2, 4, 6, 8]
