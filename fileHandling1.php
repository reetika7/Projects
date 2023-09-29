<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <?php
    
    if (file_exists("cao.php")){
        echo "the file exists";
    }
    else{
        echo "file does not exists";
    }
    echo "<br/>";
    if (file_exists("cao1.php")){
        echo "the file exists.";
    }
    else{
        echo "\nfile does not exists.";
    }
    
    echo "<br/>";
    echo readfile("hello.php");
    
    ?>
</body>
</html>