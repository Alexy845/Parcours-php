<?php
function factorial(int $number): int {
    if ($number < 0) {
        return -1;
    } elseif ($number === 0 || $number === 1) {
        return 1;
    } else {
        return ($number * factorial($number - 1));
    }
}

echo factorial(5); // 120