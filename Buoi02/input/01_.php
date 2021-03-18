<?php
 $height =5;
 for($i = 1; $i <= $height; $i++){
     for ($k = 1; $k <= $i; $k++)
     echo '* ';
 }
 
$i = 1;
$n = 3;
    while($i <= $n){
        $result .= str_repeat ("*", $i) . "<br/>";
        
    }
   