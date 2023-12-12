<?php
function checkCircuits($number) : array {
    $bugLocations = [];

    if ($number % 2 === 0) {
        $bugLocations[] = 'Left arm';
    }
    if ($number % 3 === 0) {
        $bugLocations[] = 'Right arm';
    }
    if ($number % 5 === 0) {
        $bugLocations[] = 'Motherboard';
    }
    if ($number % 7 === 0) {
        $bugLocations[] = 'Processor';
    }
    if ($number % 11 === 0) {
        $bugLocations[] = 'Zip Defluxer';
    }
    if ($number % 13 === 0) {
        $bugLocations[] = 'Motor';
    }

    return $bugLocations;
}

print_r(checkCircuits(9)); // Output: Array ( [0] => Right arm )
print_r(checkCircuits(12)); // Output: Array ( [0] => Left arm [1] => Right arm )
