<?php
$ch=curl_init();
$url='https://v6.exchangerate-api.com/v6/80680671cce3dde1412d4660/pair/USD/EUR/20';

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
$json_obj = json_decode($result);
echo $json_obj->conversion_result;
?>
 

 

 

