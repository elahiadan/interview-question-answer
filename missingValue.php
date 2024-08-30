<?php

// FIND MISSING VALUE
$missingArray = [1, 2, 3, 4, 6, 8, 9, 10];
$mc = count($missingArray);
$missingValue = [];
$expected = 1;
foreach ($missingArray as $num) {
    while ($expected < $num) {
          $missingValue[] = $expected;
        $expected++;
    }
    $expected++;
}
print_r($missingValue);
echo "\n";

// USING RECURSIVE FUNCTION
function missingNumber($arr, $i, $k)
{
    $missingVal = [];
    while ($i < $arr[$k]) {
        $missingVal[] = $i;
        $i++;
    }
    if ($k + 2 > count($arr)) {
        return $missingVal;
    }
    return array_merge($missingVal, missingNumber($arr, $i + 1, $k + 1));
}
$mvl = missingNumber($missingArray, 1, 0);
echo "USING RECURSIVE FUNCTION \n";
print_r($mvl);