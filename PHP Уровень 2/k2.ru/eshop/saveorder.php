<?
	require "inc/lib.inc.php";
	require "inc/db.inc.php";

	if(!empty($_POST[name]) and !empty($_POST[email]) and !empty($_POST[phone]) and !empty($_POST[address])) {
		$name = clean($_POST[name]);
		$email = clean($_POST[email]);
		$phone = clean($_POST[phone]);
		$address = clean($_POST[address]);

		$order_id = $basket["orderid"];
		$time = time();
		$order = "$name|$email|$phone|$address|$order_id|$time\r\n";

		file_put_contents("admin/".ORDERS_LOG, $order, FILE_APPEND);

		basketInit();
		saveOrder($time);
	}


?>
<html>
<head>
	<title>Сохранение данных заказа</title>
</head>
<body>

<?

/*
echo "<pre>";
$goods = myBasket();
print_r($goods);
echo "</pre>";
*/

?>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>