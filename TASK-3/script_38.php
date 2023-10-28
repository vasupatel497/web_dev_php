<?php
//Script 38: Remove an Element from the Beginning and Add Elements to the Beginning of an Array Using array_shift() and array_unshift()

$myArray = [1, 2, 3, 4, 5];

array_shift($myArray); // Remove the first element
array_unshift($myArray, 0); // Add 0 to the beginning

echo "Modified Array: ";
print_r($myArray);

?>