<?php
function dnaDiff($strand1, $strand2): int|bool {
    if (strlen($strand1) !== strlen($strand2)) {
        return false;
    }
    $differences = 0;
    for ($i = 0; $i < strlen($strand1); $i++) {
        if ($strand1[$i] !== $strand2[$i]) {
            $differences++;
        }
    }

    return $differences;
}

var_dump(dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCTAZA')); //  bool(false)
