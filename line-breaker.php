
<?php
function breakLines(string $string, int $length): string {
    $string = preg_replace('/\s+/', ' ', $string);
    $lines = explode("\n", $string);
    $result = '';

    foreach ($lines as $line) {
        $words = explode(' ', $line);
        $currentLine = '';

        foreach ($words as $word) {
            $word = trim($word);

            if (strlen($currentLine) + strlen($word) <= $length) {
                $currentLine .= $word . ' ';
            } else {
                if (!empty($currentLine)) {
                    $result .= rtrim($currentLine) . "\n";
                    $currentLine = '';
                }
                
                $currentLine .= $word . ' ';
            }
        }

        if (!empty($currentLine)) {
            $result .= rtrim($currentLine) . "\n";
        }
    }

    return rtrim($result);
}

echo breakLines('Line with words', 15); // returns "Line with words"
echo breakLines("Line with words should break", 15); // returns "Line with words\nshould break"
echo breakLines("Line with words should break at this spot", 15); // returns "Line with words\nshould break at\nthis spot"