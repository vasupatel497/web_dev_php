<?php
//Script 39: Extract a Portion of an Array Using array_slice()

$myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$slice = array_slice($myArray, 4, 8); // Extract elements starting from index 2, length 4

echo "Extracted Array: ";
print_r($slice);

?>