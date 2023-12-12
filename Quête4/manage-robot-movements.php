<?php
function manageMovements($movements): array {
    $instructions = [];
    $previousMovement = '';

    for ($i = 0; $i < strlen($movements); $i++) {
        $movement = $movements[$i];

        if (in_array($movement, ['R', 'L', 'F', 'B'])) {
            if ($movement === $previousMovement) {
                $instructions[] = getMovementName($movement) . ' AGAIN';
            } else {
                $instructions[] = getMovementName($movement);
            }
            $previousMovement = $movement;
        }
    }

    return $instructions;
}

function getMovementName($movement) {
    switch ($movement) {
        case 'R':
            return 'RIGHT';
        case 'L':
            return 'LEFT';
        case 'F':
            return 'FRONT';
        case 'B':
            return 'BACKWARDS';
    }
}

echo implode(', ', manageMovements('RFFRF')); // RIGHT, FRONT, RIGHT, FRONT
echo implode(', ', manageMovements('RFFRFLL')); // RIGHT, FRONT, RIGHT, FRONT, LEFT, LEFT
