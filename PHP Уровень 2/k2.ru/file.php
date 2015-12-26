<?


//define("FILE", "my.txt");
define("FILE","http://omnimir.ru");
/*
//if(file_exists(FILE)) {
	$handle = fopen(FILE,"r");
	//fwrite ($handle, "Лемонохват\r\n");
	//rewind($handle);
	while(!feof($handle))
	echo fgets($handle);
	
	fclose($handle);
//}

*/
/*
echo readfile(FILE);
print_r(file(FILE));
*/

/*
file_put_contents(FILE, "Джонни Куик\r\n", FILE_APPEND);
$f = file_get_contents(FILE);
echo $f;
*/
copy(FILE, date("Y-m-d"));
unlink(FILE);

?>