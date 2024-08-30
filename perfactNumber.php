<?php

// FIND THE PERFACT NUMBER
$number = 28;
$sum = 0;
for ($i = 1; $i <= $number / 2; $i++) {
    if ($number % $i == 0) {
        $sum += $i;
    }
}
echo $number == $sum ? "$number is a perfact number." : "$number is not a perfact number.";
echo "\n";