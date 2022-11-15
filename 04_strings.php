<?php

// Create simple string
$name = 'Julia';
$string1 = 'Hello, ' . $name . ' I am 36'; //concatenate with .
$string2 = "Hello, $name"; //insert variable

// String concatenation
echo 'Hello ' . ' World' . ' and PHP' . '<br>';

// String functions
strlen($string1);
trim($string1);
ltrim($string1); //left trim
rtrim($string1); //right trim
str_word_count($string1);
strrev($string1);
strtoupper($string1);
strtolower($string1);
ucfirst($name);
ucwords($string1);
strpos($string1, 'world'); // case sensitive
stripos($string1, 'world'); // case insensitive
substr($string1, 8);
str_replace('World', 'PHP', $string2); //case sensitive
str_ireplace('World', 'PHP', $string2); //case insensitive


// Multiline text and line breaks
$longText = "
Hello, my name is Julia
I am 36
I am from Vilnius
";
echo $longText;
echo nl2br($longText);

// Multiline text and reserve html tags
$longText = "
Hello, my name is <b>Julia</b>
I am 36
I am from Vilnius
";
echo $longText;
echo htmlentities($longText);
echo nl2br(htmlentities($longText));

// https://www.php.net/manual/en/ref.strings.php