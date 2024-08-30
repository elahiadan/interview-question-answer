<?php

// FIND PRIME NUMBER WITHIN 20
$prime = [];
for ($number = 2; $number <= 20; $number++) {
    $is_prime = true;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $is_prime = false;
        }
    }
    if ($is_prime) {
        $prime[] = $number;
    }
}
print_r($prime);
echo "\n";

// IS NUMBER PRIME
$number = 29;
$check = true;
if ($number == 2 || $number == 3) {
    $check = true;
} elseif ($number % 2 == 0 || $number % 3 == 0) {
    $check = false;
} else {
    for ($i = 5; $i <= sqrt($number); $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            $check = false;
            break;
        }
    }
}
echo $check ? "$number is a prime number." : "$number is not a prime number.";
echo "\n";

function isPrime($num, $divisor = 2)
{
    if ($num <= 2) {
        return ($num == 2) ? true : false;
    }
    if ($num % $divisor == 0) {
        return ($num == $divisor) ? true : false;
    }
    return isPrime($num, $divisor + 1);
}
$number = 17;
echo isPrime($number) ? "$number is a prime number." : "$number is not a prime number.";
echo "\n";