<?php
//Script_54: Extract a specific column from a multidimensional array using array_column()

$multiArray = [
    ['id' => 1, 'name' => 'Harshil'],
    ['id' => 2, 'name' => 'Vasu'],
    ['id' => 3, 'name' => 'Jay'],
];

$column = array_column($multiArray, 'name');

print_r($column);

?>