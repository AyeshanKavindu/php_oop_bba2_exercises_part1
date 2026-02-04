<?php

/**
 * INSTRUCTIONS:
 * Write a class named Math.
 * Add static methods add(), subtract(), and multiply().
 * Use these methods to perform mathematical operations on two numbers.
 */
<?php
class Math
{
    public static function add(float $number1, float $number2):float
    {
        return $number1 + $number2;
    }
    public static function subtract(float $number1, float $number2):float
    {
        return $number1 - $number2;
    }
    public static function multiply(float $number1, float $number2):float
    {
        return $number1 * $number2;
    }

}
echo "Addition: " . Math::add(10, 5) . "<br>";
echo "Subtraction: " . Math::subtract(10, 5) . "<br>";
echo "Multiplication: " . Math::multiply(10, 5) . "<br>";





?>