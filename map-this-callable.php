<?php
function myArrayMap(callable $callback, array ...$arrays) : array {
    $result = [];
    $count = count($arrays[0]);

    for ($i = 0; $i < $count; $i++) {
        $params = array_column($arrays, $i);
        $result[] = call_user_func_array($callback, $params);
    }

    return $result;
}

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$mapped = myArrayMap(function ($a, $b) {
    return $a * $b;
}, $array1, $array2);

print_r($mapped); // [4, 10, 18]
