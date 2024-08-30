<?php

function isPalindrome($n, $val)
{
  $arr = [];
  while (count($arr) < $n) {
    $num = $val;
    $sum = 0;
    if ($val > 9) {
      while ($num > 0) {
        $rem = $num % 10;
        $sum = $sum * 10 + $rem;
        $num = floor($num / 10);
      }
      if ($sum == $val) {
        $arr[] = $sum;
      }
    }
    $val++;
  }
  return $arr;
}

print_r(isPalindrome(5, 6));
