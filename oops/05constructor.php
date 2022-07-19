<?php
class A
{
    function __construct()

    {
        echo "construct method";
    }
}
class B extends A
{
    public $var = "variable";
    function __construct()
    {
        parent::__construct();
        echo "<br>";
        echo $this->var;
        echo "<br>";

        echo "b constructor";

    }
}
$obj = new B();

?>