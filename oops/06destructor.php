<?php
class MyClass
{
    function __construct()
    {
        echo $this->var = "My constructable class";

    }
    function __destruct()
    {
        echo $this->var = "is destroyig";
    }
}

$obj = new MyClass;
?>