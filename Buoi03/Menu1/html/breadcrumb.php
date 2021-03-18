<?php
foreach($arrMenu as $key1 => $value1){
    $arrBreadcrumb[$key1][] = $value1['name'];

    if(isset($value1['child'])){
    foreach($value1['child'] as $key2 => $value2){
        $arrBreadcrumb[$key2][] = $value1['name'];
        $arrBreadcrumb[$key2][] = $value2['name'];
        }   
    }  
}

$currentBreadcrumb = $arrBreadcrumb[$menuCurrent];
$currentBreadcrumb = $currentBreadcrumb[0];

$xhtmlBreadcrumb = '';
if($menuCurrent == 'index'){
    $xhtmlBreadcrumb = '<a href="index.php">Home</a>';
}else{
    $xhtmlBreadcrumb = '<a href="index.php">Home</a>';
}
    
