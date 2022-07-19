<?php
abstract class MyClass
{

    abstract function Demo();
    function Test()
    {
        echo "this is test method";
    }
}
class NewClass extends MyClass
{
    function foo()
    {
        echo "this is function";

    }
    function Demo()
    {
        $this->Test();
        echo "<br>";
        $this->foo();
        echo "<br>";
        echo "This is demo function";

    }
}
$obj = new NewClass;
// $obj->Test();
$obj->Demo();


?>