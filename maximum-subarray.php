<?php
function findMaximumSubarray($array) {
    $maxSum = $array[0];
    $currentSum = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        $currentSum = max($array[$i], $currentSum + $array[$i]);
        $maxSum = max($maxSum, $currentSum);
    }

    return $maxSum;
}

echo findMaximumSubarray([-2, 1, -3, 4, -1, 2, 1, -5, 4]); // 6