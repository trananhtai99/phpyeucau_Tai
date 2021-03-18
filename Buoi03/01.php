<?php
$str = "php/127/typescript/12/jquery/120/angular/50";
    /*
     * Array
     *  (
     *      'php'           => 127
     *      'typescript'    => 12
     *      'jquery'        => 120
     *      'angular'       => 50
     *  )
     *  
     */
   
   $arrA = explode('/', $str);

   $result = [];
   foreach ($arrA as $key => $value){
       if($key%2 == 0){
       $result[$value] = $arrA[$key+1];
   }
}
echo '<pre>';
print_r($result);
echo '</pre>';
