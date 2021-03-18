<?php

//cach 3
$courses = array ("PHP","Zend Framework","Joomla","Vn");

if(!empty($courses)){
for($i = 0; $i < count($courses); $i++){
    echo $courses[$i] . "<br/>";
    }
}