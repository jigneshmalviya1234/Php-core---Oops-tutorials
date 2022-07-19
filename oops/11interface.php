<?php
interface A
{
    function demo();
    function test();
}
interface C
{
    function foo();
}
class B implements A,C
{
    function demo()
    {
        echo "demo method";
    }
    function test()
    {
        echo "test method";
    }
    function foo()
    {
        echo "foo method";
    }
}
$obj = new B;
$obj->demo();
echo "<br>";
$obj->test();
echo "<br>";
$obj->foo();


?>