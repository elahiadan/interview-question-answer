<?php
$arr = [8, 5, 5, 1, 3, 4, 5, 7, 1, 2, 1, 4, 6];

function freq($arr)
{
    $newArr = [];
    $freq = [];
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        if (!empty($freq[$arr[$i]])) {
            $freq[$arr[$i]] += 1;
        } else {
            $freq[$arr[$i]] = 1;
        }
    }
  arsort($freq);
  print_r($freq);
    foreach ($freq as $j => $v) {
        for ($k = 0; $k < $v; $k++) {
            array_push($newArr, $j);
        }
    }
    return $newArr;
}

print_r(freq($arr));
