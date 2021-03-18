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


if(!empty($student)){
    foreach ($student as $key => $value){
        $name   = $value["name"];
        $sex    = ($value["sex"]==1) ? "Boy" : "Girl";
        $score  = $value["score"];
        
        $total = array_sum(($value["score"]));

       // for($i = 0; $i < count($score); $i++){
       // $total += $score[$i];
        
        echo "Name: " . $name . " - Sex: " . $sex . " - Score: " . $total . "<br/>";
    }
}
?>