<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file handling</title>
</head>
<body>
    <?php
    /*$mfile = fopen("cao.php", "r") or die("file not present in path");
    echo fread($mfile,filesize("cao.php"));
    echo readfile("cao.php");
    while (!feof($mfile)){
        echo fgets($mfile);
    }

    echo "<br/>";

    while (!feof($mfile)){
        echo fgetc($mfile);
    }
    fclose($mfile);*/

    /*$afile = fopen("hello.php", 'r') or die("Unable to open the file.");

 

if ($afile) {
    $line = fgets($afile);
    if ($line !== false) {
        echo $line;
    } else {
        echo "File is empty.";
    }
    fclose($afile);
} else {
    echo "File does not exist or could not be opened.";
}*/

$bfile = fopen("hello.php", "w") or die("Unable to open file!");
$tx = "noida";
fwrite($bfile,"\n");
fwrite($bfile, $tx);
$txt = "bangalore";
fwrite($bfile, $tx);
fclose($bfile);
    ?>
</body>
</html>