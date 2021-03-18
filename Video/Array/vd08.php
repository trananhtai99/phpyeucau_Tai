<?php
// Mảng không liên tục
/*
$courses   = array();
$courses["php"] = "PHP";
$courses["zend"] = "Zend Framework";
$courses["joomla"] = "Joomla";
$courses["vn"] = "Vn";
*/

// Cách khai báo #
$courses=array("php"=>"PHP","zend"=>"Zend Framework","joomla"=>"Joomla","vn"=>"Vn");
echo '<pre>';
print_r($courses);
echo '</pre>';

echo $courses["php"];