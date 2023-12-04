<?php
function factorial($number): int {
    if ($number < 0) {
        return 0;
    }
    
    if ($number == 0 || $number == 1) {
        return 1;
    }

    return gmp_intval(gmp_fact($number));
}
