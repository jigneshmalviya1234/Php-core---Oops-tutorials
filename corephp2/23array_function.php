<?php
// combine
$a = array("a","b","c");
$b = array("Banana","Mango","Cherry");
print_r(array_combine($a,$b));

// merge
$c array("a"=>"Bike","b"=>"cycle","c"=>"auto");
$d = array("c"=>"car","d"=>"truck","e"=>"plane");
echo "<pre>";

print_r(array_merge($c,$d));
print_r(array_merge_recursive($c,$d));

// count
$e = array("php","asp","php","java","asp");
print_r(array_count_values($e));

// push
array_push($b,"hello");
print_r($b);

// pop`
array_pop($b);
print_r($b);

// search
if(array_search("cycle",$c))
{
    echo "found";

}
else{ 
    echo "not found";
}

// in_array
if(in_array("php",$e))
{
    echo "found";

}
else{
    echo "not found";
     
}



?>