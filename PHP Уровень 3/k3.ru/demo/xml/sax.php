<?php
header("Content-Type: text/html;charset=utf-8");	
	// Создание парсера
	
	$sax = xml_parser_create("UTF-8");
	
	// Назначение обработчиков начальных и конечных тегов
	
	function start ($p,$tag,$a) {
		switch ($tag ) {
			case "BOOK": echo "<div class='book'>"; break;
			case "AUTHOR": echo "<h4>"; break;
			case "TITLE": echo "<h2>"; break;
			case "PUBYEAR": echo "<span>"; break;
			case "PRICE": echo "<span>"; break;
		}
	}
	
	function endtag ($p,$tag) {
		switch ($tag ) {
			case "BOOK": echo "</div>"; break;
			case "AUTHOR": echo "</h4>"; break;
			case "TITLE": echo "</h2>"; break;
			case "PUBYEAR": echo "</span>"; break;
			case "PRICE": echo "</span>"; break;
		}
	}
	
	//  Назначение обработчика текстового содержимого
	
	function text($p,$text) {
		echo $text;
	}
	
	// Функция обработчик начальных тегов
	
	xml_set_element_handler($sax,"start", "endtag");
	
	// Функция обработчик закрывающих тегов
	
	xml_set_character_data_handler($sax,"text");
	
	// Функция обработчик текстового содержимого
	
	xml_parse($sax, file_get_contents("catalog.xml"));
	
?>
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php
		//Парсинг
	?>
	</table>
	</body>
</html>