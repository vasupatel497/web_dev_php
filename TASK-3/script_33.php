<?php
//Script 33: Check if a Specific Key Exists in an Associative Array

$myArray = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
$keyToCheck = 'age';

if (array_key_exists($keyToCheck, $myArray)) 
{
    echo "Key '$keyToCheck' exists in the array";
} 
else 
{
    echo "Key '$keyToCheck' does not exist in the array";
}

?>