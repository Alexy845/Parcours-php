<?php

function capsMe($string) {
    return strtoupper($string);
}

function lowerMe($string) {
    return strtolower($string);
}

function upperCaseFirst($string) {
    return ucwords($string);
}

function lowerCaseFirst($string) {
    return lcfirst($string);
}

function removeBlankSpace($string) {
    return str_replace(' ', '', $string);
}
?>
