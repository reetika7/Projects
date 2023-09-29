<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Objects</title>
</head>
<body>
    <?php
    class A{
        function foo()
        {
            if (isset($this))
            {
                echo "$this is defined";
                echo get_class($this);
                echo "\n";
            }
            else{
                echo "\$this is not defined.\n";
            }
        }
    }
    class B{
        function bar()
        {
            A::foo();
        }
    }
    $a = new A();
    $a->foo();

    A::foo();

    $b = new B();
    $b->bar();

    B::bar();

    class person{
        private $strfname = "Reetika";
        private $strlname = "Maurya";

        function getfname(){
            return $this -> strfname;
        }
        function getlname(){
            return $this -> strlname;
        }
    }
    $obj = new person;
    echo "<p>Firstname:" . $obj->getfname() . "</p>";
    echo "<p>Lastname:" . $obj->getlname() . "</p>";
    
    class shoppingcart{
        private $name;
        private $item;

        public function shoppingcart($inputname){
            $this -> name = $inputname;
        }

        public function additem($artnr,$num){
            $this -> item[artnr] += $num;
        }

        public function removeitem($artnr,$num){
            if ($this -> item[$artnr] > $num){
                $this -> item[$artnr] == $num;
                return true;
            }
            elseif ($this -> item[$artnr] == $num){
                unset($this -> item[$artnr]);
                return true;
            }
            else {
                return false;
            }
        }
    }

   
   class myclass{
    public function _construct(){}
    public function mypublic(){}
    protected function myprotected(){}
    private function myprivate(){}

    function foo()
    {
        $this -> mypublic();
        $this -> myprotected();
        $this -> myprivate();
    }

}
class myclass2 extends myclass{
    function foo2(){
        $this -> mypublic();
        $this -> myprivate();
        $this -> myprotected();

    }
}

/*$myclasss = new myclass();
$myclasss -> mypublic();
$myclasss -> myprotected(); don't work
$myclasss -> myprivate();   don't work
$myclasss -> foo();*/

$myclasss2 = new myclass2;
$myclasss2 -> mypublic();
//$myclasss2 -> foo2(); public and protected works not private

class bar{
    public function test(){
        $this -> testprivate();
        $this -> testpublic();
    }
    public function testpublic(){
        echo "bar::testpublic\n";
    }

    private function testprivate(){
        echo "bar::testprivate\n";
    }
}

class foo extends bar{
    public function testpublic(){
        echo "foo::testpublic\n";
    }
    private function testprivate(){
        echo "foo::testprivate\n";
    }
}

$myfoo = new foo();
$myfoo -> test();

echo "<br/>";

class test{
    private $foo;
    public function _construct($foo){
        $this -> foo = $foo;
    }
    private function bar(){
        echo "Accessed the private method";
    }
    public function baz(test $other){
        $other -> foo = "hello";
        var_dump($other -> foo);
        $other -> bar();
    }
}
$t = new test("test");
$t -> baz(new test("other"));

echo "<br/>";


    ?>
</body>
</html>