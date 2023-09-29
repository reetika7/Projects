<?php

$conn=mysqli_connect("localhost", "root", "lahamjat16", "testdb");
// // Check connection
if (!$conn) {
  echo "db not connected";
}
else{
    echo "db connected";
}

// // Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }


//$conn->close();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve user input from the form
    $amount = $_POST['amount'];
    $fromCurrency = $_POST['from'];
    $toCurrency = $_POST['to'];
    // Create a cURL request to fetch the conversion data
    $ch = curl_init();

    $url = "https://v6.exchangerate-api.com/v6/d5ecfe443c36ff29603803aa/pair/$fromCurrency/$toCurrency/$amount";

 

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_URL, $url);

    $result = curl_exec($ch);

    curl_close($ch);

 

    // Decode the JSON response

 

    $jsonObj = json_decode($result);

 

    // Check if the conversion result is available

    if (isset($jsonObj->conversion_result)) {

 

        $conversionResult = $jsonObj->conversion_result;

        echo "<h2>Conversion Result:</h2>";

        echo "<p>$amount $fromCurrency is equal to $conversionResult $toCurrency</p>";

 

    } else {

 

        echo "<h2>Error:</h2>";

        echo "<p>Unable to fetch conversion rate. Please check your input and try again.</p>";

 

    }

 

} else {

 

    // Handle cases where the form is not submitted

    echo "<h2>Error:</h2>";

    echo "<p>Invalid request.</p>";

 

}

?>

