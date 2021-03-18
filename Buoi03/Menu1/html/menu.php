<?php
$arrMenu = [
    'index' => [
        "name"  => "Home", "link"  => "index.php"
    ],
    'about' => [
        "name"  => "About",
        "link"  => "about.php",
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

$menuCurrent = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

$xhtmlMenu = '';
foreach($arrMenu as $key => $value){
   $activeMenu = ($menuCurrent == $key) ? 'class = "active"' : '';
   
    if(isset($value['child'])){
        $xhtmlMenu .= '<li' . $activeMenu . '><a href ="' . $value['link'] . '">' . $value['name'] . '</a>';
        $xhtmlMenu .= '<ul>';
        foreach($value['child'] as $key => $value2){
            $xhtmlMenu .= '<li><a href = "' . $value2['link'] . '">' . $value2['name'] . '</a></li>';
        }
        $xhtmlMenu .='</ul>';
    }else{
        $xhtmlMenu .= '<li><a href="'. $value['link'].'">'. $value['name'].'</a></li>';
    }
   //Cách 2: $xhtmlMenu .= sprintf('<li %s><a href="%s">%s </a></li>',$activeMenu, $val['link'] , $val['name']);
}
