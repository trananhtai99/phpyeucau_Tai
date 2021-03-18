<?php
$php    = "PHP";
$zend   = "Zend Framework";
$joomla = "Joomla";
$vn     = "Vn";

$courses   = array();
$courses[] = "PHP";
$courses[] = "Zend Framework";
$courses[] = "Joomla";
$courses[] = "Vn";

$length    = count($courses);
echo $length;

//cach 1
/*if($length > 0){
    echo "Khong phai la mang rong";
}else{
    echo "Mang rong";
}
*/
//cach 2
if(!empty($courses)){
    echo "Khong phai la mang rong";
}else{
    echo "Mang rong";
}