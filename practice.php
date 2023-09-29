<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
$txt="Hello World";
$x=17;
echo "$txt\n";
echo "$x\n";
echo "<br/>";

$txt1="What a nice day !!";
echo $txt.",".$txt1;
echo "<br/>";

$a=2;
$b=3;
echo $a + $b,", ",$a - $b,", ",$a * $b,", ",$a ** $b,", ",$a % $b,", ",$a / $b;
echo "<br/>";
echo ++$a,", ",++$b;
echo "<br/>";

$var1=150;
$var2=250;
$var3=$var1+$var2;
$var4=$var1/$var2;
echo $var3,", ",$var4,", ",$var3*=$var4;
echo "<br/>";


echo $a and $b,", ",$a or $b;
echo "<br/>";

$n1=3;
$n2=5;
if ($n1<$n2)
{
    echo "n2 is greater than n1";
}

echo "<br/>";

$d=date("D");
if ($d=="Fri")
{
    echo "have a nice weekend";
}
else{
    echo "have a nice day";
}

$day=date("D");
switch ($day){
    case "Mon":
        echo "today is monday";
        break;
    case "Tue":
        echo "today is tuesday";
        break;
    case "Wed":
        echo "today is wednesday";
        break;
    case "Thur":
        echo "today is thursday";
        break;
    case "Fri":
        echo "today is friday";
        break;
    case "Sat":
        echo "today is saturday";
        break;
    case "Sun":
        echo "today is sunday";
        break;

}

$i=1;
do {
    $i++;
    echo "the  number is ",$i,"<br/>";
}
while ($i<=5);

$r=array("one","two","three");






?>
</body>
</html>