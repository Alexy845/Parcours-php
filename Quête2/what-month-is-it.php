<?php

$month = date('n');

switch ($month) {
    case 1:
        echo "We are in the month of January\n";
        break;
    case 2:
        echo "We are in the month of February\n";
        break;
    case 3:
        echo "We are in the month of March\n";
        break;
    case 4:
        echo "We are in the month of April\n";
        break;
    case 5:
        echo "We are in the month of May\n";
        break;
    case 6:
        echo "We are in the month of June\n";
        break;
    case 7:
        echo "We are in the month of July\n";
        break;
    case 8:
        echo "We are in the month of August\n";
        break;
    case 9:
        echo "We are in the month of September\n";
        break;
    case 10:
        echo "We are in the month of October\n";
        break;
    case 11:
        echo "We are in the month of November\n";
        break;
    case 12:
        echo "We are in the month of December\n";
        break;
    default:
        echo "This is not a month\n";
        break;
}