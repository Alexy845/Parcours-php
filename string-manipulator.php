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
    return preg_replace_callback('/\b\w/', function($matches) {
        return strtolower($matches[0]);
    }, $string);
}
function removeBlankSpace($string) {
    return preg_replace('/\s+/', '', trim($string));
}
print(removeBlankSpace("  Hello   World!  "));
?>
