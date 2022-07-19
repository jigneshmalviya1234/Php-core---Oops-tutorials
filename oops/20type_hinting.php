<?php
class MyClass
{
    function MyFunc(otherclass $otherclass)
    {
        echo "MyFunction";
    }
}
class otherclass extends MyClass{
    function demo()
    {
        echo "Demo method";
    }
}
$ob = new MyClass;
$obj = new otherclass;
$ob->MyFunc($obj);
$obj->demo();

?>