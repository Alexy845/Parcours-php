<?php
function breakLines(string $string, int $maxLength): string {
    $lines = explode("\n", $string);
    $result = '';

    foreach ($lines as $line) {
        $words = explode(" ", $line);
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
        $result .= "\n";
    }

    return rtrim($result);
}


echo breakLines('Title is long Line with words break', 12);