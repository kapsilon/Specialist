<?php
// подключение библиотек
require "secure/session.inc.php";
require "../inc/lib.inc.php";
require "../inc/db.inc.php";
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$title = clean($_POST["title"]);
	$author =clean($_POST["author"]);
	$pubyear = $_POST["pubyear"]*1;
	$price = $_POST["price"]*1;

	if(empty($title) or empty($author) or empty($pubyear) or empty($price)) {
		header("Refresh: 3; url=add2cat.php");
		echo "Необходимо заполнить все поля";
		exit;
	}


	if(!addItemToCatalog($title, $author, $pubyear, $price)){
		echo 'Произошла ошибка при добавлении товара в каталог';
	}
	else {
		header("Location: add2cat.php");
	exit;
	}
}

?>