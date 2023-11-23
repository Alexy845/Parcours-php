<?php
function breakLines($string, $max) : string {
    $string = preg_replace('/\s+/', ' ', trim($string));
    $words = explode(' ', $string);
    $result = '';
    $line = '';

    foreach ($words as $word) {
        if (strlen($word) > $max) {
            return $string;
        }
        if (strlen($line) + strlen($word) > $max) {
            $result .= $line . "\n";
            $line = '';
        }
        $line .= $word . ' ';
    }
    $result .= $line;
    return $result;
}


echo breakLines('Line with words', 15); 
echo breakLines("Line with words should break", 15); 
echo breakLines("Line with words should break at this spot", 15); 

?>
