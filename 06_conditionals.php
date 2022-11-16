<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo '1';
}

// Without circle braces
if ($age === 20) echo '1';


// Sample if-else
if ($age > 20) {
    echo '1';
} else {
    echo '2';
}

// Difference between == and ===
if ($age == 20) {
    echo '1' . '<br>';
}
if ($age == '20') { // with '==' the values are compared no matter to their type
    echo '1' . '<br>';
}

// if AND
if ($age > 20 || $salary === 300000) {
    echo 'do something';
}

// if OR

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: '18'; // create $myAge, which equals to $age or '18' if $age is not set

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch
$userRole = 'admin';
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}
