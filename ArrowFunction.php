<?php
// Class for returning an Arrow Function from a Function
class Arrow_Function
{
    /**
     * Function to add two numbers
     * Passing 'x' as a parameter
     * Returns a Function
     */
    function addition($x)
    {
        return fn ($y) => ($x + $y);
    }
}
$x = readline('Enter X Value: ');
$y = readline('Enter Y Value: ');

$obj = new Arrow_Function();

/**
 * Type 1
 * Calling addition Function using class object
 * Storing Function returned form the addition Function
 */
$add = $obj->addition($x);
echo "Addition: " . $add($y);

// Type 2
$multiply = fn ($x, $y) => ($x * $y);
echo "\nMultiplication: " . $multiply($x, $y);