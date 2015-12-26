<?
/*
$r = opendir(".");
while($str = readdir ($r)) {
	if($str == "." or $str == "..")
		continue;
	if(is_dir($str)) 
		echo "<b>".$str."</b><br>";
	else 
		echo $str."<br>";
}
*/

function dirTree($dir) {
	$r = opendir($dir);
	while($str = readdir ($r)) {
		if($str == "." or $str == "..")
			continue;
		if(is_dir($dir."/".$str)) {
			echo "<b>".$str."</b>";
			echo "<blockquote>";
			echo dirTree($dir."/".$str);
			echo "<blockquote>";
		}
		else 
			//echo "<blockquote><a href='".$dir."/".$str"'>$str</a></blockquote>";
			echo "<blockquote>$str</blockquote>";
	}
	closedir($r);
}


dirTree(".");
?>