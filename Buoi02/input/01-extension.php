<?php
$input ="D:/GoogleDrive/Doing/_psd/luutruonghailan-tamsu.php";

$output = [];

function getInfo($input){
    $index = strripos($input, "/");
    $result = substr($input, $index + 1);
    return $result;
}
$info = getInfo($input);

$result = array();

$arrinfo = explode("-", $info);

$arrtype = explode(".", $arrinfo[1]);

echo '<pre>';
print_r($arrtype);
echo '</pre>';