<?php

// Action with numbers

 $reminder_of_division = 7 % 3;
 var_dump($reminder_of_division);

 echo '<br>';

 $int_part_of_division = (int)(7 / 7.15);
 var_dump($int_part_of_division);

 echo '<br>';

 $sqrt_number = 25;
 var_dump(sqrt($sqrt_number));

 echo '<br>';

 // Actions with strings

 $string = 'Десять негритят пошли купаться в море';

 $fourth_word = explode(' ', $string);
 var_dump($fourth_word[3]);

 echo '<br>';

 $get_char = mb_substr($string, 16, 1);
 var_dump($get_char);

 echo '<br>';

 $to_upper = mb_convert_case($string, MB_CASE_TITLE, 'UTF-8');
 var_dump($to_upper);

 echo '<br>';

 var_dump(mb_strlen($string, 'UTF-8'));

 echo '<br>';

 // Actions with logic operators

 $bool = true;
 $number = 1;
 var_dump($bool == $number);

 echo '<br>';

 $bool2 = false;
 $number2 = 0;
 var_dump($bool2 === $number2);

 echo '<br>';

$string1 = 'three';
$string2 = 'три';
$len1 = mb_strlen($string1);
$len2 = mb_strlen($string2);

if ($len1 > $len2){
 echo $string1 . ' is greater than ' . $string2;
} elseif ($len1 < $len2){
 echo $string1 . ' is less than ' . $string2;
} else {
 echo $string1 . ' and ' . $string2 . ' are equal';
}

 echo '<br>';

 $number3 = 125 * 13 + 7;
 $number4 = 223 + 28 * 2;

 if ($number3 > $number4){
   var_dump($number3 . ' is greater than ' . $number4);
 } elseif ($number3 < $number4){
   var_dump($number3 . ' is less than ' . $number4);
 } else {
   var_dump($number3 . ' and ' . $number4 . ' are equal');
 }