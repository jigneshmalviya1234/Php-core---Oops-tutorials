<?php
$var = array(23,34,array("Apple","Orange"),array("x"=>"PHP","JAVA"),"demo","hello");
echo "<pre";
// print_r($var);
print_r($var[2][0]);
echo "<br>";
print_r($var[3]['x']);
echo "<br>";
print_r($var[5]);

?>