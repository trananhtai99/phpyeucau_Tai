<?php
// Mảng không liên tục

$courses = array("php"=>"PHP","zend"=>"Zend Framework","joomla"=>"Joomla","vn"=>"Vn");

echo '<pre>';
print_r($courses);
echo '</pre>';

if(!empty($courses))
foreach ($courses as $key => $value){
    echo $key . ": " . $value . "<br/>";
}
