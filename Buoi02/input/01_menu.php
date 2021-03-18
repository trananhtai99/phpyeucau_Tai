<?php

$arrMenu = [
    'index' => [
        "name"  => "Home", "link"  => "index.php"
    ],
    'about' => [
        "name"  => "About",
        "link"  => "data/about.php",
        "child" => [
            'service'   => [
                "name"  => "Service",
                "link"  => "service.php",
                "child" => [
                    'sale'      => ["name" => "Sale", "link" => "sale.php"],
                    'training'  => ["name" => "Training", "link" => "training.php"]
                ]
            ],
            'company'   => [
                "name"  => "Company",
                "link"  => "company.php",
                "child" => [
                    'toyota' => ["name" => "Toyota", "link"   => "toyota.php"]
                ]
            ]
        ]
    ],
    'contact' => ["name" => "Contact", "link" => "contact.php"]
];
    $strMenu1 = $strMenu2 = $strMenu3 ='';
    
    foreach($arrMenu as $key1 => $value1){
        $arrMenu[$key1][] = $value1['name'];
    
        if(isset($value1['child'])){
            foreach($value1['child'] as $key2 => $value2){
                $arrMenu[$key2][] = $value1['name'];
                $arrMenu[$key2][] = $value2['name'];
            }   
        if(isset($value2['child'])){
            foreach($value2['child'] as $key3 => $value3){
                $arrMenu[$key3][] = $value1['name'];
                $arrMenu[$key3][] = $value2['name'];  
                $arrMenu[$key3][] = $value3['name'];  
            }
        }
     echo '<pre>';
     print_r($arrMenu);
     echo '</pre>';

     
    }
}