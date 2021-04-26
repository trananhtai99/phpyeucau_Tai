<?php 
    $xml=simplexml_load_file("data/gold.xml");
    $encode = json_encode(array($xml->ratelist->city));
    $decode = json_decode($encode, true);
    // $item = $decode[0]['item'];
    // echo '<pre>';
    // print_r($decode);
    // echo '</pre>';
    $goldlist = array_column($decode[0]['item'],'@attributes');
    $xhtml = "";
    foreach ($goldlist as $key => $value1){
       
        $xhtml .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>', $value1['type'], $value1['buy'], $value1['sell']);
        
    }
?>

<div class="box mt-4">
    <h3 class="mb-1">Giá vàng</h3>
    <div class="card card-body">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th><b>Loại vàng</b></th>
                    <th><b>Mua vào</b></th>
                    <th><b>Bán ra</b></th>
                </tr>
            </thead>
            <tbody>

                <?php echo $xhtml;?>

            </tbody>
        </table>
    </div>
</div>