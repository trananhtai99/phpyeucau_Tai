<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exsercise mảng</title>
<style type="text/css">
    *{
        margin: 0px;
        padding: 0px;
    }
    .content {
        width: 500px;
        padding: 10px;
        border: 2px solid #ddd;
        height: auto;
        margin: 10px auto;
    }
</style>
</head>
<body>
        <div class="content">
        <?php
            $group = array("1" => "Admin", "2" => "Manager", "3" => "Member", "4" => "Guest");
            $city = array("tp" => "TPHCM", "hn" => "Hà Nội", "dn" => "Đà Nẵng");

            function createSelectbox($name, $attribute, $array, $keySelect){           
            $xhtml ="";
            if(!empty($array)){
                $xhtml .= '<select name = "'.$name.'" id ="'.$name.'" style = "'.$attribute.'">';
                foreach($array as $key => $value){

                    if($key == $keySelect){
                        $xhtml .= '<option value="'.$key.'" selected = "selected">'.$value.'</option>';
                    }else{
                        $xhtml .= '<option value="'.$key.'">'.$value.'</option>';
                    }                   
                }              
                $xhtml .= '</select>';   
            }
            return $xhtml;
        }
        $groupSelect = createselectbox("group", "width: 200px", $group, 4);
        $citySelect = createselectbox("city", "width: 300px", $city, "tp");
        echo $groupSelect . "<br/>" . $citySelect;
        ?>
            
        </div>
</body>
</html>

