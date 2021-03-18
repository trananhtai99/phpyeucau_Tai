<?php
$FileName = 'files/abc.txt';

if(file_exists($FileName)){
    echo 'Ton tai';
}else{
    echo 'Khong ton tai';
}