<?php
class Myclass
{
    function __call($method,$arg)
    {
        echo "method is".$method;
        echo "<br>";
        // var_dump($arg);
        print_r($arg);
    }
}

$obj = new Myclass;
$obj->Tops("php","DM",12,23,34);

?>