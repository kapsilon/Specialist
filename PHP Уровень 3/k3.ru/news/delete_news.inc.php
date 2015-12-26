<?php

$del = (int) $_GET["del"];

if ( $_SERVER["RQUEST_METHOD"] == "POST") {
	$errMsg = "Не ломайте ленту";
}
else {
	if ($news->deleteNews($del))
		header("Location: news.php");
	else
		$errMsg = "проблема при удалении новости";
}


?>