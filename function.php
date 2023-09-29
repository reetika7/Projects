<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php function</title>
</head>
<body>
    <?php
    function square($a)
    {   
        $b = $a*$a;
        echo "sqaure of ",$a," is ",$b;
    }
    square(5);

    echo "<br/>";

    function name($fname)
    {
        echo $fname."Maurya.<br/>";
    }
    echo "my name is ";
    name("reetika");
    echo "brother's name is ";
    name("abhay");
    


    

?>
</body>
</html>