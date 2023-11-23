<?php
$alphabet = range('A', 'Z');
foreach ($alphabet as $index => $letter) {
    echo $letter;
    if ($index !== count($alphabet) - 1) echo ' | ';}?>
