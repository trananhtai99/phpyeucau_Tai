<?php

$input = '69';
$strID = "78, 60,62,68,69,68,73,85,66 ,69,65,74,63,67 ,65,64,68,73,75,69,73,169";

$arrID = explode(',', $strID);
$stripped = preg_replace('/\s/', '', $strID); 

echo '<br/> val:'.$stripped;

$arrIDD = array_count_values($arrID);

echo '<pre>';
print_r($arrIDD);
echo '</pre>';