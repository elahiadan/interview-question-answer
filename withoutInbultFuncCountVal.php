<?php

$str = "hippopotamous";
function countLetters($str)
{
    $arr = array();
    $len = 0;

    for ($i = 0; isset($str[$i]); $i++) {
        $len++;
    }

    for ($i = 0; $i < $len; $i++) {
        $char = $str[$i];
        if (isset($arr[$char])) {
            $arr[$key]++;
        } else {
            $arr[$char] = 1;
        }
    }
    return $arr;
}
$counts = countLetters($str);
print_r($counts);


$str = "hippopotamous";
function countValueStr($str)
{
    $arr = [];
    $len = strlen($str);
    for ($k = 0; $k < $len; $k++) {
        $arr[$str[$k]] = 0;
    }
    for ($i = 0; $i < $len; $i++) {
        if ($arr[$str[$i]]) {
            $arr[$str[$i]] += 1;
        } else {
            $arr[$str[$i]] = 1;
        }
    }
    return $arr;
}
print_r(countValueStr($str));



$arr = [1, 2, 3, 4, 1, 4, 1, 5, 2, 4, 5, 2, 5, 3, 1];
function countValueArr($arr)
{
    $newArr = [];
    $len = 0;
    foreach ($arr as $k => $item) {
        $len++;
        $newArr[$arr[$k]] = 0;
    }

    for ($i = 0; $i < $len; $i++) {
        if ($newArr[$arr[$i]]) {
            $newArr[$arr[$i]] += 1;
        } else {
            $newArr[$arr[$i]] = 1;
        }
    }
    return $newArr;
}
print_r(countValueArr($arr));
