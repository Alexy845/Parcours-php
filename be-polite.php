<?php

$hour = date('H');

if ($hour >= 6 && $hour <= 12) {
    echo "Hello! Have a nice day :)\n";
} if ($hour >= 12 && $hour <= 18) {
    echo "Have a good afternoon!\n";
} if ($hour >= 18 && $hour <= 21) {
    echo "Good evening! Hope you had a good day!\n";
} else {
    echo "Good night! See you tomorrow :)\n";
}

?>