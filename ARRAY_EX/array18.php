<?php
    $cities=array("kedarnath","nashik","shimla","maldiv","goa");
    $remove=array_search("goa",$cities);
    unset($cities[$remove]);
    print_r($cities);
?>