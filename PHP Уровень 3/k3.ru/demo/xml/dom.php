<?php
header("Content-Type: text/html;charset=utf-8");

$dom = new DOMDocument("1.0","utf-8");
$dom->load("catalog.xml");
$root = $dom->documentElement;

$books = $root->getElementsByTagName("book");
	
	
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
		for($i = 0; $i < $books->length; $i++) {
			$book  = $books->item($i)->childNodes;
			$author = $book->item(1)->nodeValue;
			$title = $book->item(3)->nodeValue;
			$pubyear = $book->item(5)->nodeValue;
			$price = $book->item(7)->nodeValue;

	?>
		<tr>
			<td><?= $author?></td>
			<td><?= $title?></td>
			<td><?= $pubyear?></td>
			<td><?= $price?></td>
		</tr>
	<?php
		}
	?>
	</table>
	</body>
</html>