<?php
function factorial($number) : int {
    if ($number < 0) {
        return null; 
    }
    if ($number == 0 || $number == 1) {
        return 1; 
    }
    $result = 1;
    for ($i = 2; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}
