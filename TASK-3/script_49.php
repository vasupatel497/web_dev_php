<?php
//Script_49: Split an array into chunks of a specified size using array_chunk()

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$chunks = array_chunk($array, 3);

print_r($chunks);

?>