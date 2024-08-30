<?php

$str = "({[]})(33567{ })";

function checkClassFormat($str)
{
  $o = ['(', '{', '['];
  $n = strlen($str);
  $re = [];

  for ($i = 0; $i < $n; $i++) {
    if (in_array($str[$i], $o)) {
      $re[] = $str[$i];
    } else if (!empty($re)) {


      if ($str[$i] == ')' && $re[count($re) - 1] == '(') {
        array_pop($re);
      }

      if ($str[$i] == '}' && $re[count($re) - 1] == '{') {
        array_pop($re);
      }

      if ($str[$i] == ']' && $re[count($re) - 1] == '[') {
        array_pop($re);
      }
    }
  }

  if (count($re)) {
    return 'false';
  }
  return 'true';
}

echo "\n";
echo checkClassFormat($str);
