<?php

// RANDOM PASSWORD GENERATE
$str = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuioplkjhgfdsazxcvbnm1234567890";
$pass = "";
for ($i = 0; $i < 8; $i++) {
    $pass .= $str[rand(0, strlen($str)-1)];
}
echo "Random Password is - " . $pass;
echo "\n";