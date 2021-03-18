<?php
// Mảng lồng
$student = array(
                    "sv001" => array("name" => "Toi",
                                     "sex" => 1,
                                     "score" => array(4,5,6)
                                    ),
                    "sv002" => array("name" => "Nho",
                                     "sex" => 1,
                                     "score" => array(5,6,7)
                                    ),
                    "sv003" => array("name" => "Dau",
                                     "sex" => 0,
                                     "score" => array(7,8,9)
                                    ),
                                );

echo '<pre>';
print_r($student);
echo '</pre>';

//Ten cua sv001
echo $student["sv001"]["name"] . "<br/>"; //Toi

//Diem mon thu 2 cua sv003
echo $student["sv003"]["score"][1] . "<br/>"; //8

//Doi ten sv003 thanh Tao
$student['sv003']["name"] = "Tao";

//Thay doi diem sv002 mon thu 2 thanh 9 & mon thu 3 thanh 10
$student["sv002"]["score"][1] = 9;
$student["sv002"]["score"][2] = 10; 

echo '<pre>';
print_r($student);
echo '</pre>';