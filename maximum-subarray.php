<?php
function findMaximumSubarray($array): int|float {
    if (empty($array)) {
        return 0;
    }

    $maxSum = $array[0];
    $currentSum = $array[0];

    if (count($array) === 1) {
        return $array[0];
    }

    for ($i = 1; $i < count($array); $i++) {
        $currentSum = max($array[$i], $currentSum + $array[$i]);
        $maxSum = max($maxSum, $currentSum);
    }
    
    return $maxSum;
}


$array = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
echo findMaximumSubarray($array); // 6

