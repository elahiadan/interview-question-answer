<?php

// COUNT VOWELS
$string = "Quinton de Kock, KL Rahul (c & wk), Marcus Stoinis, Deepak Hooda, Nicholas Pooran, Ayush Badoni, Krunal Pandya, Matt Henry, Ravi Bishnoi, Mohsin Khan, Yash ThakurBenchAmit Mishra, Arshin Kulkarni, Krishnappa Gowtham, Manimaran Siddharth, Yudhvir Singh Charak, Devdutt Padikkal, Arshad Khan, Prerak Mankad, Kyle Mayers, Shamar Joseph, Ashton Turner, Naveen-ul-Haq, Mayank Yadav";
$string = strtolower($string);
$len = strlen($string);
$vowels = ['a', 'e', 'i', 'o', 'u'];
$vowelCount = array_fill_keys($vowels, 0);
for ($i = 0; $i < $len; $i++) {
    if (in_array($string[$i], $vowels)) {
        $vowelCount[$string[$i]]++;
    }
}
print_r($vowelCount);
echo "\n";