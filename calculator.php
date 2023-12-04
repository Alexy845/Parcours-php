<?php
function calc(string $expression): int {
    if (!preg_match('/^[0-9+() -]*$/', $expression)) {
        throw new InvalidArgumentException('Expression contains invalid characters');
    }
    $result = eval("return $expression;");
    return (int)$result;
}
echo(calc('1 + 1')); // 2
echo(calc('9-5 + 2')); // 6
echo(calc('((5+3+(1+2)-9)+1) + (9+1)')); // 13