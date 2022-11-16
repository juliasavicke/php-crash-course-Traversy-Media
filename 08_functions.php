<?php

// Function which prints "Hello I am Julia"
function hello()
{
    echo "Hello, I am Julia";
}
hello();

// Function with argument
function hello1($name)
{
    return "Hello, I am $name";
}
echo hello1("Julia");

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}
echo sum(4, 5);

// Create function to sum all numbers using ...$nums
function sum1(...$nums)
{

    echo '<pre>';
    var_dump($nums);
    echo '</pre>';

    $sum = 0;
    foreach ($nums as $key => $value) {
        $sum += $value;
    }
    return $sum;
}
echo sum1(1, 2, 3, 4, 5, 6);

// Arrow functions

function sum2(...$nums)
{
    return array_reduce($nums, fn ($total, $num) => $total + $num);
}
echo sum2(1, 2, 3, 4, 5, 6);
