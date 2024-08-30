<?php

$arr = [10,20,30,40,50,60,70,80];
function arrayRoration($arr, $n){
    $count = count($arr);
    $n = $n%$count;
    if ($n < 0) {
        $n += $count;
    }
    for($i=0; $i<$n; $i++){
        $lastIndex = $count-1;
        $pop = $arr[$lastIndex];
        for($j=$lastIndex; $j>=0; $j--){
            if($j==0){
                $arr[$j]=$pop;
            }else{
                $arr[$j] = $arr[$j-1];
            }
        }
    }
    return $arr;
}

print_r(arrayRoration($arr, 1))


?>