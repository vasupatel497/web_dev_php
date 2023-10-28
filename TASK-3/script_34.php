<?php
//Script 34: Check if a Specific Value Exists in an Array

$myArray = [1, 2, 3, 4, 5];
$valueToCheck = 4;

if (in_array($valueToCheck, $myArray)) 
{
    echo "Value $valueToCheck exists in the array";
} 
else 
{
    echo "Value $valueToCheck does not exist in the array";
}

?>