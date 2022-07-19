<?php
$a = "tops";
echo strlen($a);
echo "<br>";
echo strpos("Hello world!","Worls!");
echo "<br>";
echo addcslashes("Topstech","t");
echo "<br>";
$b = "Tops Technologies";
echo chunk_split($b,3,'-');
echo "<br>";
$c = array("Have","a","nice","Day!");
echo implode(" ",$c);
echo "<br>";
$d = ("Good Morning!");
print_r(explode(" ",$d));
echo "<br>";
$e = '<p> Tops Tech</p>';
echo htmlentities($e);
echo "<br>";
echo md5($d);
echo "<br>";
echo base64_encode("Tops");
echo "<br>";
echo base64_decode("VG9wcw==");
echo "<br>";
$d = "thid jnsdchb kjvbdfkh mjv fkn bknv cfkbkvk sfkjv fkv fkhv f";
echo stristr($d,"mjv",true);

?>