<?php
// set API Endpoint, access key, required parameters
$endpoint = 'convert';
$access_key = '7629b95f35bc0e4f644a3ca8ad7c6c7c';

$from = 'USD';
$to = 'EUR';
$amount = 10;

// initialize CURL:
$ch = curl_init('https://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.'&from='.$from.'&to='.$to.'&amount='.$amount.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// get the JSON data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$conversionResult = json_decode($json, true);

// access the conversion result
echo $conversionResult['result'];
?>