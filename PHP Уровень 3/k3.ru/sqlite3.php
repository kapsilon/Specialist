<?php

$mydb = new SQLite3("my.db");

$sql = "CREATE TABLE user (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT
)";

$result = $mydb -> exec($sql);
echo $result;

?>