<?
header("Content-Type: text/html; charset=utf-8");

define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "eshop");
define("ORDERS_LOG", "orders.log");

$basket = array();
$count = 0;

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

$error = array();
if(mysqli_errno($link)) $error[] = "Ошибка подключения БД";

//print_r($error);

basketInit();

?>