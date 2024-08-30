<?php

// MARGE ARRAY
$array1 = [0, 1, 17, 3, 4, 6, 8, 9, 10];
$array2 = [6, 4, 7, 1, 7, 8, 9];
$array3 = [];
$n1 = count($array1);
$n2 = count($array2);
$i1 = 0;
$i2 = 0;
while($i1 < $n1 && $i2 < $n2){
  if($array1[$i1] < $array2[$i2]){
    $array3[] = $array1[$i1];
    $i1++;
  }else{
    $array3[] = $array2[$i2];
    $i2++;
  }
}
while($i1 < $n1){
  $array3[] = $array1[$i1];
  $i1++;
}
while($i2 < $n2){
  $array3[] = $array2[$i2];
  $i2++;
}
print_r($array3);
echo "\n";