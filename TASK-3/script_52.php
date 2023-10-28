<?php
//Script_52: Merge two associative arrays using array_merge()

$array1 = ['Roll_No' => 35, 'Name' => 'vasu'];
$array2 = ['Clg' => 'ABC', 'Reg_No' => 15618223093];

$mergedArray = array_merge($array1, $array2);

print_r($mergedArray);

?>