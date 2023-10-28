<?php
$numbers=array(1,2,3,4,5,6,7,8,9);
$remove=array_search(5,$numbers);
unset($numbers[$remove]);
print_r($numbers);
?>