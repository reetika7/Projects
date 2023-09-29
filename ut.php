<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once 'unittesting.php';
require_once 'PHPUnit/Framework.php';

class HelloWorldTest extends PHPUnit_Framework_TestCase{
public function test__construct(){

$hw = new HelloWorld();
$this->assertType('HelloWorld', $hw);}

public function testSayHello(){

$hw = new HelloWorld() ;
$string = $hw->sayHello();
$this->assertEquals('Hello World!', $string);}
}?>
</body>
</html>