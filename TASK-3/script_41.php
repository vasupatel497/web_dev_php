<?php
//Script 41: Find the Intersection of Two Arrays Using array_intersect()

$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$intersection = array_intersect($array1, $array2);

echo "Intersection of Arrays: ";
print_r($intersection);

?>