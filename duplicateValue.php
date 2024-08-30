<?php

// FIND DUPLICATE VALUE
$duplicate = [1, 3, 5, 7, 34, 2, 2, 4, 6, 4, 3, 19];
$duplicateValues = [];
$n = count($duplicate);
$ar = [];
// for ($i = 0; $i < $n; $i++) {
//     for ($j = 0; $j < $n; $j++) {
//         if ($duplicate[$i] == $duplicate[$j] && $i != $j) {
//             if (!in_array($duplicate[$i], $duplicateValues)) {
//                   $duplicateValues[] = $duplicate[$i];
//             }
//         }
//     }
// }
foreach ($duplicate as $key => $value){
    if(in_array($value, $ar)){
        $duplicateValues[] = $value;
    }{
        $ar[] = $value;
    }
}
echo "Duplicate values";
print_r($duplicateValues);
echo "\n";