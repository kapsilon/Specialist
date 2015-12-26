<?
$goods = array(
	23 => "товар 23",
	19 => "товар 19",
	5 => "товар 5",
	);
	
	session_start();
	
	if(!empty($_GET["id"])) {
	$_SESSION["basket"][$_GET["id"]*1] += 1;
	header("Location: {$_SERVER[PHP_SELF]}");
	}
	if(!empty($_SESSION["basket"])) {
		$sum = 0;
		if(is_array($_SESSION["basket"]))
		foreach($_SESSION["basket"] as $k => $v)
		$sum += $v;
	}
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
	<h1>Каталог</h1>
	<?
	echo "<ul>";
	foreach($goods as $k => $v) {
		echo "<li><a href='{$_SERVER[PHP_SELF]}?id=$k'>$v </a> <a href='{$_SERVER[PHP_SELF]}?del=$k'>Удалить</a> </li>";
	}
	echo "</ul>";
	echo "Количество товаров: $sum  шт.";
	?>
	<a href="basket.php">В корзину</a>
	</body>
</html>
