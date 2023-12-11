<?php
function myArrayMap(callable $callback, array $array): array{
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = call_user_func($callback, $value);
    }
    return $result;
}

$array = [1, 2, 3, 4, 5];

$multiplied = myArrayMap(function ($value) {
    return $value * 2;
}, $array);

echo implode(', ', $multiplied); // 2, 4, 6, 8, 10