<?php

// FIND LEAP YEAR
$year = 2000;
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "The " . $year . " is a LEAP year.";
} else {
    echo "The Year $year is not a LEAP year.";
}
echo "\n";