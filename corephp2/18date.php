<?php
echo date('d-m-y');
echo "<br>";
echo date('D/M/Y');
echo "<br>";
echo date('d.m.y H:i:s a');
echo "<br>";
echo date('d-m-y',strtotime("+1week"));
echo "<br>";
$m = mktime(0,0,0,date("m")+1,date("d")+1,date("y"));
echo date('d/m/y',$m);
?>