<?php

// FIND MAX MIN VALUE
$minMax = [1, 3, 5, 7, 34, 2, 2, 4, 6, 4, 3, 19];
$max = 0;
$min = 100;
foreach ($minMax as $k => $v) {
    if ($v > $max) {
        $max = $v;
    }
    if ($v < $min) {
        $min = $v;
    }
}
echo "Max Value - " . $max;
echo "\n";
echo "Min Value - " . $min;
echo "\n";