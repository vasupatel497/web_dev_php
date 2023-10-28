<?php
//Script 40: Remove and Replace Elements from an Array Using array_splice()

$myArray = [1, 2, 3, 4, 5];

// Remove elements starting from index 1, remove 2 elements, and replace with [6, 7]
array_splice($myArray, 2, 3, [6, 7]);

echo "Modified Array: ";
print_r($myArray);

?>