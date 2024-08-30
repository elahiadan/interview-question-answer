<?php

// FIND SECOND HIGHEST VALUE
$secondHighest = [1, 3, 5, 7, 34, 2, 5, 8, 3, 1,19];
function secHigh($arr){
    $max = 0;
    $sec = $max;
    foreach($arr as $v){
      if($max < $v){
          $sec = $max;
          $max = $v;
      }elseif($sec < $v && $sec != $max){
          $sec = $v;
      }
    }
    return $sec;
}

$second = secHigh($secondHighest);
echo "Second Highest Value is - ".$second;
echo "\n";