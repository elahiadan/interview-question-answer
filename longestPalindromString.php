<?php

$str = "abcabacskfdhkdkhdf";

function check($str)
{
    $arr2 = [];
    $l = strlen($str);
    for ($i = 1; $i < $l - 1; $i++) {
        $arr1 = [];
        $k = 0;
        while (true) {
            if (isset($str[$i + $k]) && $str[$i + $k] == $str[$i - $k]) {
                $arr1[$i + $k] = $str[$i + $k];
                $arr1[$i - $k] = $str[$i - $k];
            } else {
                break;
            }
            $k++;
        }
        if (count($arr1) > count($arr2)) {
            $arr2 = $arr1;
        }
    }

    $s = "";
    for ($i = 0; $i < $l; $i++) {
        if (!empty($arr2[$i])) {
            $s .= $arr2[$i];
        }
    }
    return $s;
    // return $arr2;
}

echo "Logest palindrome string is ".check($str) ." from the given ". $str;
// print_r(check($str));
