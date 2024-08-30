<?php

// FIND THE COUNT OF REPEATING ELEMENTS
$repeatingArray = [1, 3, 5, 7, 34, 2, 5, 8, 3, 1, 4, 6, 8, 9, 3, 1, 5, 9];
$repeating = [];
foreach ($repeatingArray as $v) {
    if (!empty($repeating[$v])) {
        $repeating[$v] += 1;
    } else {
        $repeating[$v] = 1;
    }
}
print_r($repeating);
echo $repeating[1] . " is the count of 1 in the array.";
echo "\n";