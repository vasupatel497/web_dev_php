<?php
//Script_47: Apply a user-defined function to all elements of an array using array_map()

function customFunction($value)
{
    return $value * 2;
}

$array = [1, 2, 3, 4, 5];
$mappedArray = array_map('customFunction', $array);

print_r($mappedArray);

?>