<?php
class MyClass
{
    public $var = "Tops";
    public function Test()
    {
        echo "This is Test Function";

    }
}
$obj = new MyClass;
echo $obj->var;
echo "<br>";
$obj->Test();


?>