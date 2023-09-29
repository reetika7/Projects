<?php

 

if(isset($_POST['submit']))

{

 

    $amt=$_POST['amt'];

    $curr1=$_POST['curr1'];

    $curr2=$_POST['curr2'];

    $url="https://v6.exchangerate-api.com/v6/80680671cce3dde1412d4660/pair/$curr1/$curr2/$amt";

   

    $ch=curl_init();

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

    curl_setopt($ch,CURLOPT_URL , $url);

    $result=curl_exec($ch);

    curl_close($ch);

    $result=json_decode($result,true);

    $final_amount=$result['conversion_result'];

    $final_rate=$result['conversion_rate'];

    echo $final_amount." ".$result['target_code']."\n";

 

    

 

//Entering data fetched from the api into the database.

 

    $con=mysqli_connect("localhost","root","lahamjat16","testdb");

    

    $sql = "INSERT INTO currency (base_code, target_code,conversion_rate,conversion_results) VALUES ('$curr1', '$curr2','$final_rate','$final_amount')";

          

    if ($con->query($sql) === TRUE)

    {

        echo "  New record created successfully";

    }

    else

    {

        echo "Error: " . $sql . "<br>" . $con->error;

    }  

 

    $conn->close();

 

}

 

?>

 