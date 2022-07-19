<?php
class Demo
{
    public $var = "This is variable";
    public $a = "This ia a value";
    function Test()
    {

        echo $this->var;
        echo "<br>";
        echo $this->a;
        echo "<br>";
        echo "This is test function";
    }
}
$obj= new Demo;
$obj->test();

?>