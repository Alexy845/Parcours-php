
<?php

function breakLines(string $string, int $length) : string {
    $string = preg_replace('/\s+/', ' ', trim($string));
    $string = explode(' ', $string);
    $result = '';
    $line = '';
    foreach ($string as $word) {
        if (strlen($line) + strlen($word) <= $length) {
            $line .= $word . ' ';
        } else {
            $result .= trim($line) . "\n";
            $line = $word . ' ';
        }
    }
    $result .= trim($line);
    return $result;
}
echo breakLines("Line with words should break at this spot", 15);