<?php

function isPangram($string) : bool {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z]/', '', $string);
    $string = str_split($string);
    $string = array_unique($string);
    sort($string);
    $string = implode('', $string);
    return $string == 'abcdefghijklmnopqrstuvwxyz';
}  
?>