<?php
function breakLines($string, $maxLength) {
    $lines = explode("\n", $string);
    $result = '';

    foreach ($lines as $line) {
        $words = explode(" ", $line);
        $lineLength = 0;

        foreach ($words as $word) {
            $wordLength = strlen($word);

            if ($wordLength > $maxLength) {
                $result .= rtrim($result) !== '' ? "\n" : '';
                $result .= $word . "\n";
                $lineLength = 0;
            } elseif ($lineLength === 0 || $lineLength + $wordLength <= $maxLength) {
                if ($lineLength > 0) {
                    $result .= ' '; 
                    $lineLength++;
                }
                $result .= $word;
                $lineLength += $wordLength;
            } else {
                $result .= "\n" . $word;
                $lineLength = $wordLength;
            }
        }

        if ($result !== '') {
            $result .= "\n"; 
        }
    }

    return rtrim($result);
}

echo breakLines('Title is long Line with words break', 12);
echo breakLines("Line with words should break at this spot", 15);

