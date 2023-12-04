<?php
function factorial($number) : int {
    if ($number < 0) {
        return null;
    }
    
    if ($number == 0 || $number == 1) {
        return 1;
    }

    return (int)$number * int(factorial($number - 1));
}
