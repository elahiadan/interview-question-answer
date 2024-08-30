<?php

$arr = [1, [2, 3], 4, [5, [6, 7]]];
// function flatArray($arr) {
//     static $newArr = []; // Static variable to retain flattened array
//     foreach ($arr as $v) {
//         if (is_array($v)) {
//             flatArray($v);
//         } else {
//             $newArr[] = $v;
//         }
//     }
//     return $newArr;
// }

// $result = flatArray($arr);
// print_r($result);


function flatArray($arr){
  $newArr = [];
  foreach($arr as $v){
    if(is_array($v)){
      $newArr = array_merge($newArr, flatArray($v));
    }else{
      $newArr[] = $v;
    }
  }
   return $newArr;
}
print_r(flatArray($arr));
