<?php

//cach 3
$courses = array ("PHP","Zend Framework","Joomla","Vn");

echo '<pre>';
print_r($courses);
echo '</pre>';
if(!empty($courses)){
foreach($courses as $key => $value){
    echo $value . "<br/>";
    }
}