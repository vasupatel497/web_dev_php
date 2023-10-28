<?php
//Script 31: Search for a Specific Element in an Array

$myArray = [10, 20, 30, 40, 50];
$elementToFind = 40;

$index = array_search($elementToFind, $myArray);

if ($index !== false) 
{
    echo "Element $elementToFind found at index $index";
} else {
    echo "Element not found in the array";
}

?>