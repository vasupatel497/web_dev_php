<?php
//Script_42: Find the difference between two arrays using array_diff()

$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$dif = array_diff($array1, $array2);

print_r($dif);

?>