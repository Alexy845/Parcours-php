<?php

$multiplier = 9;

while ($multiplier <= 9) {
    $i = 1;
    while ($i <= 10) {
        $result = $multiplier * $i;
        echo "$i * $multiplier = $result\n";
        $i++;
    }
    $multiplier++;
}