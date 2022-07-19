<?php
function Demo($classname)
{
    require $classname.'.php';
}
spl_autoload_register('Demo');
$obj = new MyClasss;
echo $obj->a;
$obj->test();

?>