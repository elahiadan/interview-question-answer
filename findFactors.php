<?php

// FIND THE FACTORS OF A NUMBER
$num = 164;
$factors = [];
for ($i = 2; $i <= abs($num/2); $i++) {
    if ($num % $i == 0) {
        array_push($factors, $i);
    }
}
print_r($factors);
echo "\n";