<?php
/*
setcookie("userName", 'John', time()+90);
echo $_COOKIE["userName"];
*/

$name = base64_encode('вася');
setcookie("userName", $name, time()+90);
//echo base64_decode($_COOKIE["userName"]);

//echo "<pre>";
$a = array("text",1645);
$a = serialize($a);
setcookie("a", $a, time()+3600);
$a = $_COOKIE["a"];
print_r(unserialize($a));
?>