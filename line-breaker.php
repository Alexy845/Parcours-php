<?php
function breakLines($string, $maxLength): string {
    $lines = explode("\n", $string);
    $result = '';

    foreach ($lines as $line) {
        $words = explode(" ", $line);
        $lineLength = 0;
        $wordCount = 0;
        foreach ($words as $word) {
            $wordLength = strlen($word);
            if ($wordLength > $maxLength) {

                $result .= rtrim($result) !== '' ? "\n" : ''; 
                $result .= $word . "\n";
                $lineLength = 0;
                $wordCount = 0;
            } elseif ($lineLength === 0 || ($lineLength + $wordLength + 1 <= $maxLength && $wordCount < 2)) {
                if ($lineLength > 0) {
                    $result .= ' '; 
                    $lineLength++;
                }
                $result .= $word;
                $lineLength += $wordLength;
                $wordCount++;
            } else {
                $result .= "\n" . $word;
                $lineLength = $wordLength;
                $wordCount = 1;
            }
        }
        if ($result !== '') {
            $result .= "\n"; 
        }
    }

    return rtrim($result, "\n");
}

echo breakLines('Title is long
Line with words break', 12);



