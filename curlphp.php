
<?php

$url = "https://reqbin.com/echo/post/json";

 

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

 

$data = <<< DATA

{

  "Id": 78912,

  "Customer": "Jason Sweet",

  "Quantity": 1,

  "Price": 18.00

}

DATA;

 

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

 

$resp = curl_exec($curl);

curl_close($curl);

 

echo $resp;

?>


