<?php
class A
{

    function __set($var,$val)
    {
        echo "variable is".$var;
        echo "<br";
        echo "value is".$val;

    }
    function __get($val)
    {
        echo "variable is",$val;
    }
}
$obj = new A;
$obj->x="test";
echo "<br>";
$obj->demo;


?>