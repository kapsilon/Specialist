<?php
if (!empty($_POST["title"]) and
	!empty($_POST["category"]) and
	!empty($_POST["description"]) and
	!empty($_POST["source"])
	)
	{
		$title = trim(strip_tags($_POST["title"]));
		$category = trim(strip_tags($_POST["category"]));
		$description = trim(strip_tags($_POST["description"]));
		$source = trim(strip_tags($_POST["source"]));
		
		if ($news->saveNews($title,$category,$description,$source))
			header("Location: news.php");
		else $errMsg = "Ошибка прb добавлении новости";
	}
	else $errMsg = "Заполните все поля формы";
?>