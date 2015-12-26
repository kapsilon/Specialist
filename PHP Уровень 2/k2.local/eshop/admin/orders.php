<?php
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/db.inc.php";
?>
<html>
<head>
	<title>Поступившие заказы</title>
</head>
<body>
<h1>Поступившие заказы:</h1>
<?
$orders = getOrders();

/*
echo "<pre>";
print_r($_COOKIE);
print_r($orders);
echo "</pre>";
*/

foreach ($orders as $order) {

?>
<hr>
<h2>Заказ номер: <?= $order["orderid"]?></h2>
<p><b>Заказчик</b>: <?= $order["name"]?></p>
<p><b>Email</b>: <?= $order["email"]?></p>
<p><b>Телефон</b>: <?= $order["phone"]?></p>
<p><b>Адрес доставки</b>: <?= $order["address"]?></p>
<p><b>Дата размещения заказа</b>: <?= date("d-m-Y H:i", $order["date"])?></p>


<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
</tr>

<? 
$i = 0;
$sum = 0;

foreach ($order[goods] as $book) {
$i++;
$sum += $book["price"] * $book["quantity"];
?>
<tr>
	<td><?= $i?></td>
	<td><?= $book["title"]?></td>
	<td><?= $book["author"]?></td>
	<td><?= $book["pubyear"]?></td>
	<td><?= $book["price"]?></td>
	<td><?= $book["quantity"]?></td>
</tr>
<?
}
?>

</table>
<p>Всего товаров в заказе на сумму: <?= $sum?> руб.</p>
<?
}
?>
</body>
</html>