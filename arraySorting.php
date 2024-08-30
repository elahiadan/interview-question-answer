<?php

// SORT THE ARRAY IN ASCENDING ORDER
$arrSort = [1, 3, 5, 7, 34, 2, 8, 4, 6, 9];
$n = count($arrSort);
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - 1; $j++) {
        if ($arrSort[$j] > $arrSort[$j + 1]) {
            $temp = $arrSort[$j + 1];
            $arrSort[$j + 1] = $arrSort[$j];
            $arrSort[$j] = $temp;
        }
    }
}
print_r($arrSort);
echo "\n";