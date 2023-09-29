<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json</title>
</head>
<body>
<?php
// $age = array("reetika"=>21,"charu"=>22,"pushpender"=>21);
// echo json_encode($age);

$con=mysqli_connect("localhost", "root", "lahamjat16", "sampledb");

if(!$con){

    echo "DB not Connected...";

}

else{

$result=mysqli_query($con, "select * from agents");
$arr = mysqli_fetch_array($result);
while($a = mysqli_fetch_array($result))
{
    $arr[]=$a;
}
//echo json_encode($arr);
$jbobj = json_encode($arr,JSON_PRETTY_PRINT);
header ("Content-Type: application/json");
echo $jbobj;

echo "<hr/>";
}

echo var_dump(json_decode($arr));
?>
</body>
</html>