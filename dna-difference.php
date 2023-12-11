<?php
function dnaDiff($strand1, $strand2): int|bool {
    // Vérifier si les longueurs des chaînes sont différentes
    if (strlen($strand1) !== strlen($strand2)) {
        return false;
    }

    $differences = 0;

    // Calculer le nombre de différences entre les chaînes d'ADN
    for ($i = 0; $i < strlen($strand1); $i++) {
        if ($strand1[$i] !== $strand2[$i]) {
            $differences++;
        }
    }

    return $differences;
}

// Test cases
var_dump(dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCTAZA')); //  bool(false)
