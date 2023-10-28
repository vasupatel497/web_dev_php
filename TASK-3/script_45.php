<?php
//Script_45: Flip the keys and values of an associative array using array_flip()

$associativeArray = ['Roll_no' => 35, 'Name' => 'vasu', 'City' => 'Rajkot'];

$flippedArray = array_flip($associativeArray);

print_r($flippedArray);

?>