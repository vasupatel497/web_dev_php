<?php
//Script_48: Use array_reduce() to apply a callback function to elements and return a single value

$array = [1, 2, 3, 4, 5];

$result = array_reduce($array, function ($carry, $item) 
{
    return $carry + $item;
}
, 0);

echo $result;

?>