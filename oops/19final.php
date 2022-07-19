<?php
class A
{
    final function test()
    {
        echo "this is test function!";
    }
}
class B extends A
{
    function demo()
    {
        echo "this is demo ";
    }
}
$obj = new B;
$obj->test();

?>