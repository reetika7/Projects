
<?php 
$con=mysqli_connect("localhost", "root", "lahamjat16", "sampledb");

if(!$con){

    echo "DB not Connected...";

}

else{

$result=mysqli_query($con, "select * from agents");

if($result>0){

$xml = new DOMDocument("1.0"); // for xml class-object

// It will format the output in xml format otherwise

// the output will be in a single row
$xml->formatOutput=true;

$fitness=$xml->createElement("agents");

$xml->appendChild($fitness);

while($row=mysqli_fetch_array($result)){

    $user=$xml->createElement("user");
 
    $fitness->appendChild($user);

   

    $uid=$xml->createElement("a_code", $row['AGENT_CODE']);

    $user->appendChild($uid);

   

    $uname=$xml->createElement("a_name", $row['AGENT_NAME']);

    $user->appendChild($uname);

   

    $email=$xml->createElement("wrkg_area", $row['WORKING_AREA']);

    $user->appendChild($email);

   

    $password=$xml->createElement("commission", $row['COMMISSION']);

    $user->appendChild($password);

   

    $description=$xml->createElement("phnno.", $row['PHONE_NO']);

    $user->appendChild($description);

   

    $role=$xml->createElement("country", $row['COUNTRY']);

    $user->appendChild($role);

   

    // $pic=$xml->createElement("pic", $row['pic']);

    // $user->appendChild($pic);

   

}

echo "<xmp>".$xml->saveXML()."</xmp>";

$xml->save("report.xml");

}

else{

    echo "error";

}

}

?>

