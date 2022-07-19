<?php
class MyClass 
{

    public  $public = "Public value";
    private $private = "Private value";
    protected $protected = "protected value";

    public function demo()
    {
        echo $this->public;
        echo "<br>";
        echo $this->private;
        echo "<br>";
        echo $this->protected;
    }
}
$obj = new MyClass();
echo $obj->demo();

?>