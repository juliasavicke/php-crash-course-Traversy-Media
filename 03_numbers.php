<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';

// Assignment with math operators
$a += $b;
echo $a . '<br>';
$a -= $b;
echo $a . '<br>';
$a *= $b;
echo $a . '<br>';
$a /= $b;
echo $a . '<br>';
$a %= $b;
echo $a . '<br>';

// Increment operator
echo $a++; //first the $a is printed and then increased
echo ++$a; //first increased and then printed

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45"); //true
is_numeric('3g.45'); //false

// Conversion

$strNumber = '12.34';
$number = intval($strNumber);
var_dump($number);
echo '<br>';

// Number functions
abs(-15) . '<br>';
pow(2, 3) . '<br>';
sqrt(16) . '<br>';
max(16, 12) . '<br>';
min(16, 12) . '<br>';
round(2.4) . '<br>';
floor(16.7) . '<br>';
ceil(16.7) . '<br>';


// Formatting numbers
$number = 176865432.234;
echo number_format($number, 2, ',', ' ');

// https://www.php.net/manual/en/ref.math.php
