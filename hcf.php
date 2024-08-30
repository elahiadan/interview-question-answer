<?php

// FIND HCF
// function hcf($num1, $num2)
// {
//     while ($num2 != 0) {
//         $temp = $num2;
//         $num2 = $num1 % $num2;
//         $num1 = $temp;
//     }
//     return $num1;
// }
function hcf($num1, $num2)
{
    if ($num2 == 0) {
        return $num1;
    } else {
        return hcf($num2, $num1 % $num2);
    }
}
echo "HCF of 16 and 12 is - " .hcf(16, 12);;
echo "\n";