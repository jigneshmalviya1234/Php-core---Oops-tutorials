<?php
class A
{
    public function test()
    {
        echo "This is test function";
    }
}
class B extends A
{

    public function demo()
    {
        echo "this is demo function";
    }
}
class C extends B
{
    public function foo()
    {
        echo "this is foo function";
    }
    
}

$obj = new C;
    $obj->test();
    $obj->demo();
    $obj->foo();
?>