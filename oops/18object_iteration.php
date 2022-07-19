<?php
class Myclass{
    public $a ="Public value";
    private $b = "private value";
    protected $c = "protected value";

    function demo()
    {
        foreach($this as $key)
        {
            echo $key;
            echo "<br>";

        }
    }
}
$obj = new MyClass;
$obj->demo;
foreach($obj as $val)
{
    echo $val;
}

?>