<?php
function explodeWords($str, $separator = ' ', $limit = PHP_INT_MAX): array {
    $result = [];
    $currentIndex = 0;

    if ($limit === 0) {
        $limit = 1;
    }

    while (($limit > 1 || $limit === -1) && ($pos = strpos($str, $separator, $currentIndex)) !== false) {
        $result[] = substr($str, $currentIndex, $pos - $currentIndex);
        $currentIndex = $pos + strlen($separator);
        if ($limit !== -1) {
            $limit--;
        }
    }

    if ($currentIndex < strlen($str)) {
        $result[] = substr($str, $currentIndex);
    }

    if ($limit < 0) {
        $result = array_slice($result, 0, $limit);
    }

    return $result;
}

var_dump(explodeWords('My name is John')); // ['My', 'name', 'is', 'John']
var_dump(explodeWords('My-name/is-John', '/')); // ['My-name', 'is-John']
var_dump(explodeWords('My-name/is-John/and-i-love-apple', '/', 2)); // ['My-name', 'is-John/and-i-love-apple']
var_dump(explodeWords('My-name/is-John/and-i-love-apple', '/', -1)); // ['My-name', 'is-John']
