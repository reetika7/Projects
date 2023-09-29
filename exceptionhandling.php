<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExceptionHandling</title>
</head>
<body>
    <?php
    
    echo "Exception Handling";
    echo "<br/>";
    echo "<br/>";
    
    try {
        throw new Exception(" A terrible error has occurred ",42);
    }
    catch  (Exception $e){
        echo "Exception ".$e->getCode().":".$e->getMessage()."<br/>"." in ".$e->getFile()." on line ".$e->getLine().",".$e->getTrace().",".$e->getTraceAsString()."<br/>";
    }
    
    echo "<br/>";
    class myException extends Exception
    
    {
    
       function __toString()
    
       {
    
            return "<table border=\"1\">
    
            <tr>
    
            <td><strong>Exception ".$this -> getCode()."
    
            </strong>: ".$this -> getMessage()."<br />"."
    
            in ".$this -> getFile()." on line ".$this -> getLine()."
    
            </td>
            </tr>
    
            </table><br />";
    
        }
    
    }
    $a=new myException();
    echo $a->__toString();

    echo "<br/>";


class ClassA extends \stdClass {}

class ClassB extends \stdClass {}

class ClassC extends ClassB {}

class ClassD extends ClassA {}


function getSomeClass(): string

{

    return 'ClassA';

}


var_dump(new (getSomeClass()));

var_dump(new ('Class' . 'B'));

var_dump(new ('Class' . 'C'));

var_dump(new (ClassD::class));

echo "<br/>";
echo "<br/>";

class SimpleClass

{

    // property declaration

    public $var = 'a default value<br/>';

    // method declaration

    public function displayVar() {

        echo $this->var;

    }

}

$instance = new SimpleClass();

$assigned   =  $instance;

$reference  =& $instance;

$instance->var = '$assigned will have this value<br/>';

$instance = null; // $instance and $reference become null

var_dump($instance);
echo "<br/>";
var_dump($reference);
echo "<br/>";
var_dump($assigned);


echo "<br/>";

class Test

{

    static public function getNew()

    {

        return new static;

    }

}

class Child extends Test

{}

$obj1 = new Test();

$obj2 = new $obj1;

var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();

var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();

var_dump($obj4 instanceof Child);
 
echo "<br>";
echo (new DateTime())->format('Y');
echo "<br>";
echo (new DateTime())->format('M-Y');
echo "<br>";
echo (new DateTime())->format('D-M-Y');

echo "<br/>";
class Foo
{
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
}

$obj = Foo::getNew;
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;

class ExtendClass extends SimpleClass
{
    function displayVar()
    {
        echo "Extending Class\n";
        parent::displayVar();

    }
}
$extended = new ExtendClass();
$extended -> displayVar();





    ?>
</body>
</html>