<?php
function getFloor(int $currentFloor, ?int $requestedFloor, array $calledFloors): ?int {
    if ($requestedFloor !== null && in_array($requestedFloor, $calledFloors)) {
        return $requestedFloor;
    }

    if (empty($calledFloors)) {
        return $requestedFloor === $currentFloor ? $requestedFloor : null;
    }

    if ($requestedFloor === null) {
        sort($calledFloors);
        $closestFloor = null;
        $minDiff = PHP_INT_MAX;

        foreach ($calledFloors as $floor) {
            $diff = abs($currentFloor - $floor);
            if ($diff < $minDiff) {
                $minDiff = $diff;
                $closestFloor = $floor;
            }
        }

        return $closestFloor;
    }

    $calledFloors[] = $requestedFloor;
    sort($calledFloors);

    $closestFloor = null;
    $minDiff = PHP_INT_MAX;

    foreach ($calledFloors as $floor) {
        $diff = abs($currentFloor - $floor);
        if ($diff < $minDiff) {
            $minDiff = $diff;
            $closestFloor = $floor;
        }
    }

    return $closestFloor !== null ? $closestFloor : $currentFloor;
}

function getDirection(int $currentFloor, ?int $requestedFloor, array $calledFloors): int {
    if ($requestedFloor === null && empty($calledFloors)) {
        return 0;
    }

    $nextFloor = getFloor($currentFloor, $requestedFloor, $calledFloors);

    if ($nextFloor === $currentFloor) {
        return 0;
    } elseif ($nextFloor < $currentFloor) {
        return -1;
    } else {
        return 1;
    }
}
