<?php
//Script_43: Extract keys from an associative array using array_keys()

$associativeArray = ['Roll_no' => 'value1', 'Name' => 'value2', 'City' => 'value3'];

$keys = array_keys($associativeArray);

print_r($keys);

?>