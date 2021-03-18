<?php

$FileName = 'files/abc.txt';
$size = filesize($FileName);

function convertSize($size, $totalDigit = 2, $distance = ' '){
    $units = array('Byte', 'KB', 'MB', 'GB', 'TB');

    $length = count($units);
    for($i = 0; $i < $length; $i++){
        if($size > 1024){
            $size = $size / 1024;
        }else{
            $unit = $units[$i];
            break;
        }
    }
    $result = round($size, $totalDigit) . $distance . $unit;
    return $result;
}
    echo convertSize($size);