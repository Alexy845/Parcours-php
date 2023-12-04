<?php
function factorial(int $number): int {
    if ($number < 0) {
        return -1;
    } elseif ($number === 0 || $number === 1) {
        return 1;
    } else {
        return int($number * factorial($number - 1));
    }
}
