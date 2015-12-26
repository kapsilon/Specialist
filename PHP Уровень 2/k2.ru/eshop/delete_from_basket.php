<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/db.inc.php";

	if (!empty($_GET["id"])) {
		$id = $_GET["id"]*1;
		deleteItemFromBasket($id);
	}
	header("Location: basket.php");
	
?>