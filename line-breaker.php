<?php
function breakLines($string, $maxLength) : string {
    $words = explode(" ", $string);
    $result = '';
    $lineLength = 0;

    foreach ($words as $word) {
        $wordLength = strlen($word);
        
        if ($lineLength + $wordLength <= $maxLength) {
            $result .= $word . ' ';
            $lineLength += $wordLength + 1;
        } else {
            $result = rtrim($result);
            $result .= "\n" . $word . ' ';
            $lineLength = $wordLength + 1;
        }
    }

    return rtrim($result);
}

echo breakLines('Title is long Line with words break', 12);