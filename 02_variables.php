<?php

// What is a variable

// Variable types

$name1 = 'Julia'; // string
$age1 = 36; // inteer

// Declare variables

$name = "Julia";
$age = 36;
$isFemale = true;
$height = 1.82;
$salary = null;

// Print the variables. Explain what is concatenation

echo $name . '<br>';
echo $age . '<br>';
echo $isFemale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables

echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isFemale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable

var_dump($name, $age, $isFemale, $height, $salary) . '<br>';

// Change the value of the variable

$name = false;

// Print type of the variable

echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); // false because we changed the type
is_int($age);
is_bool($isFemale);
is_double($height);

// Check if variable is defined
isset($name);
isset($address);

// Constants

define('PI', 3.14);
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
