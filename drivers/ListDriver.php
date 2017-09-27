<?php

$arr = PDO::getAvailableDrivers();

foreach ($arr as $a => $x){
   echo  ($a+1) . " "  . $x . "<br/>";
}

//print_r($arr);


