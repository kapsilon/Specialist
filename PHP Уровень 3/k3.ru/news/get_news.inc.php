<?php

if ($result = $news->getNews()) {
	$rows = count($result);
	echo "Количество записей: $rows<br>";
	foreach ($result as $item) {
		$dt = date("d-m-Y H:i", $item["datetime"]);
		echo <<<NEWS
		<h2>$dt {$item["title"]}</h2>
		<span>{$item["category"]}</span>
		URL: {$item["source"]}
		<h2>{$item["decription"]}</h2>
<a href="?del={$item["id"]}">Удалить</a>
NEWS;
	}
}
else $errMsg = "Данных нет";

?>