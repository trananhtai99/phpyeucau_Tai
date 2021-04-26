<?php
function vnExpressRSS($link){
    $data = file_get_contents($link);
    $xml = new SimpleXMLElement($data);

    $i = 1;
    $xhtml = '<ol>';
    foreach ($xml->channel->item as $item) {
        if ($i == 5) break;
        $link = $item->link;
        $title = $item->title;
        
        // echo '<pre>';
        // print_r($item);
        // echo '</pre>';
        // echo $item->description;
        preg_match_all('#.*src="(.*)".*br>(.*)<end>#imsU', $item->description. '<end>', $matches);
        $image = $matches[1][0];
        $description =$matches[2][0];
        
        $xhtml .=  '<li>
                        <div class="entry mb-1 clearfix">
                            <div class="entry-image mb-3">
                                <a href="' . $image . '" data-lightbox="image" style="background: url(' . $image . ') no-repeat center center; background-size: cover; height: 450px;"></a>
                            </div>
                        <div class="entry-title">
                            <h3><a href="' . $link . '">' . $title . '</a></h3>
                        </div>
                        <div class="entry-content">
                            <p>' . $description . '</p>
                        </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 25/04/2021 11:59:59</li>
                                    <li>vnexpress.net</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">Xem &rarr;</a></li>
                                </ul>
                            </div>                
                        </div>
                    </li>';
    
        $i++;
    }
    $xhtml .= '</ol>';
    return $xhtml;
}
?>