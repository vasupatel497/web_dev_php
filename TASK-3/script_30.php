<?php

//Script 30: Remove Duplicate Values from an Array

$myArray = [1, 2, 2, 3, 4, 4, 5];

$uniqueArray = array_unique($myArray);

//echo "Array with Duplicate Values Removed: ";
print_r($uniqueArray);

?>