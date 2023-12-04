<?php
function breakLines(string $string, int $maxLength): string {
    $lines = explode("\n", $string);
    $result = '';

    foreach ($lines as $line) {
        $words = explode(" ", $line);
        $lineLength = 0;

        foreach ($words as $index => $word) {
            $wordLength = strlen($word);

            if ($lineLength + $wordLength <= $maxLength) {
                $separator = ($index === count($words) - 1) ? '' : ' ';
                $result .= $word . $separator;
                $lineLength += $wordLength + strlen($separator);
            } else {
                $result = rtrim($result);
                $result .= "\n" . $word . ' ';
                $lineLength = $wordLength + 1;
            }
        }
        $result = rtrim($result) . "\n";
    }

    return rtrim($result);
}

echo breakLines('Title is long Line with words break', 12);