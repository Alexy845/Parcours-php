<?php
function factorial($number) {
    if ($number < 0) {
        return null;
    }
    
    if ($number == 0 || $number == 1) {
        return 1;
    }

    return intval($number) * factorial($number - 1);
}
