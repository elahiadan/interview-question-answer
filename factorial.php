<?php

// FIND FACTORIAL VALUE
$factorial = 5;
function fact($n)
{
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * fact($n - 1);
}
echo "The factorial ".$factorial." is - ".fact($factorial);
echo "\n";