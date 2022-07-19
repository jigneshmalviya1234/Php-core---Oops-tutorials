<?php
class A
{
    public function test()
    {
        echo "This is test function";
    }
}
class B 
{

    public function demo()
    {

    }
}
class C extends A,B
{

    echo "this is foo function";
}

$obj = new C;
    $obj->test();
    $obj->demo();
?>