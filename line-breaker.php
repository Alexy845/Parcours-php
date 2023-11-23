
<?php
function breakLines(string $string, int $length) : string {
    $string = preg_replace('/\s+/', ' ', $string);
    $words = preg_split('/\s+/', $string);
    $result = '';
    $line = '';
    
    foreach ($words as $word) {
        $word = trim($word);

        if (strlen($line) + strlen($word) <= $length) {
            $line .= $word . ' ';
        } else {
            $result .= rtrim($line) . "\n";
            $line = $word . ' ';
        }
    }

    $result .= rtrim($line);
    return $result;
}

echo breakLines('Line with words', 15); // returns "Line with words"
echo breakLines("Line with words should break", 15); // returns "Line with words\nshould break"
echo breakLines("Line with words should break at this spot", 15); // returns "Line with words\nshould break at\nthis spot"