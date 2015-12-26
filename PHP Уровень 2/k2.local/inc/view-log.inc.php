<?

if(file_exists(PATH_LOG)){
	$rows = file(PATH_LOG);
	$rows = array_reverse($rows);
	for($i = 0; $i < count($rows); $i++) {
		$ex = explode("|", $rows[$i]);
		echo date("d-m-Y H-i-s", $ex[0]), " - ", $ex[1], " - ", $ex[2], "<br>";
	}

}
?>