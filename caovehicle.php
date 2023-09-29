<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vehicle</title>
</head>
<body>
    <?php
    
    class vehicle{
        private $strDescription;

        function getDescription(){
            return $this -> strDescription;
        }

        function setDescription($strDescription){
            $this -> strDescription = $strDescription;
        }

        function __construct($strDescription){
            $this -> strDescription = $strDescription;
        }
    }


    ?>
</body>
</html>