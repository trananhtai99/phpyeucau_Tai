<?php
// Mảng lồng
/*
$student = array();
$student["sv001"] = array("name" => "Toi", "sex" => 1, "score" => array(4, 5, 6));
$student["sv002"] = array("name" => "Nho", "sex" => 1, "score" => array(5, 6, 7));
$student["sv003"] = array("name" => "Dau", "sex" => 0, "score" => array(7, 8, 9));
*/
// Cách khai báo #
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


