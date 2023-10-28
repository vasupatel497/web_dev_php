<?php
//Script_50: Filter elements of an array based on a specified condition using array_filter()

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$filteredArray = array_filter($array, function ($value) 
{
    return $value % 2 == 0;
});

print_r($filteredArray);

?>