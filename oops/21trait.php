<?php

trait A
{
    function demo()
    {
        echo "this is demo";
    }
}
trait B
{
    function test()
    {
        echo "this is test";
    }
}
class MyClass
{
    use A,B;
    function foo()
    {
        echo "foo function";

    }
}
$obj = new MyClass;
$obj->test();
$obj->demo();
$obj->foo();