<?php
//Script_53: Remove duplicate values from an associative array using array_unique()

$associativeArray = ['Roll_No' => 35, 'Name' => 'vasu', 'Name' => 'vasu', 'Reg_No' => 15618223093];
$uniqueArray = array_unique($associativeArray);

print_r($uniqueArray);

?>