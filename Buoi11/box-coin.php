<?php
$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
    'start' => '1',
    'limit' => '10',
    'convert' => 'USD'
];

$headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: e1e39f89-78cb-43c7-8bbf-87f3f4c76d31'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $request,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
//print_r(json_decode($response)); // print json decoded response
// echo '<pre>';
// print_r(json_decode($response));
// echo '</pre>';
curl_close($curl); // Close request

$coinlist = json_decode($response, true)['data'];
$xhtml1 = '';
foreach ($coinlist as $key => $value1){
       
    $xhtml1 .= sprintf('<tr>
    <th><b>%s</b></th>
    <th><b>%s</b></th>
    <th><b>%s</b></th>
    </tr>', $value1['name'], $value1['quote']['USD']['price'], $value1['quote']['USD']['percent_change_24h']);}
// echo '<pre>';
// print_r($coinlist);
// echo '</pre>';
?>

<div class="box mt-4">
    <h3 class="mb-1">Giá coin</h3>
    <div class="card card-body">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th><b>Name</b></th>
                    <th><b>Price</b></th>
                    <th><b>Change (24h)</b></th>
                </tr>
            </thead>
            <tbody>
                <?php echo $xhtml1?>
            </tbody>
        </table>
    </div>
</div>