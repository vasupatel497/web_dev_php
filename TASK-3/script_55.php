<?php
//Script_55: Retrieve the first and last keys of an array using array_key_first() and array_key_last()

$associativeArray = ['Roll_No' => 35, 'Name' => 'Vasu', 'Reg_No' => 15618223093];

$firstKey = array_key_first($associativeArray);
$lastKey = array_key_last($associativeArray);

echo 'First Key: ' . $firstKey . '<br>';
echo 'Last Key: ' . $lastKey;

?>