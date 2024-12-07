<?php
 $first=0;
 $second=1;

 echo $first . " , " . $second;

 for ($i=3; $i <20 ; $i++) { 
    $next=$first+$second;
    echo " , ". $next;
    $first=$second;
    $second=$next;
 }
?>