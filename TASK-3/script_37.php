<?php
//Script 37: Add and Remove Elements from an Array Using array_push() and array_pop()

$myArray = [1, 2, 3, 4, 5];

array_push($myArray, 6); // Add 6 to the end of the array
array_pop($myArray); // Remove the last element

echo "Modified Array: ";
print_r($myArray);

?>