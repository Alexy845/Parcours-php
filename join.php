<?php
function joinWords(array $words, string $separator = ' '): string {
    $result = '';
    $count = count($words);
    
    for ($i = 0; $i < $count; $i++) {
        $result .= $words[$i];
        
        if ($i < $count - 1) {
            $result .= $separator;
        }
    }
    
    return $result;
}

echo joinWords(['Hello', 'World']); // Hello World
echo joinWords(['Hello', 'World'], '-'); // Hello-World