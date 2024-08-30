<?php

// REVERSE THE STRING
$string = "Hello World";
$length = strlen($string);
$reversedString = '';
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
}
echo "\n";
echo "String is - " . $string;
echo "\n";
echo "Reverse String is - " . $reversedString;
echo "\n";