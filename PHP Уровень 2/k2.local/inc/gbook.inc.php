<!-- Основные настройки -->
<?
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "";
const DB_NAME = "gbook";

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

mysqli_query($link, "SET NAMES utf-8");
?>
<!-- Основные настройки -->

<?
function clear($s) {
	return trim(strip_tags($s));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = clear($_POST["name"]);
	$email = clear($_POST["email"]);
	$msg = clear($_POST["msg"]);

$sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name','$email','$msg')";
mysqli_query($link, $sql);
}


?>

<!-- Сохранение записи в БД -->
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<!-- Сохранение записи в БД -->
<?
$del = $_GET["del"]*1;
$sql = "DELETE FROM msgs WHERE id = $del";
mysqli_query($link, $sql);

?>


<!-- Удаление записи из БД -->



<!-- Удаление записи из БД -->

<!-- Вывод записей из БД -->
<?
$sql = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";

$result = mysqli_query($link, $sql);
if(mysqli_errno($link) > 0) {
	echo "Ошибка: ".mysqli_error($link);
	exit;
}

$rows = mysqli_fetch_all($result);
mysqli_close($link);
$count = count($rows);

echo "<p>Всего записей в гостевой книге: количество записей {$count}</p>";

//print_r($rows);
foreach ($rows as $v) {
	$time = date("d-m-Y d H:i", $v[dt]);
	echo <<<WALL
	<p>
	<a href="{$v[email]}">{$v[name]}</a> {$time} написал <br>{$v[msg]}
	</p>
	<p align="right">
	<a href="http://k2.ru/index.php?id=gbook&del={$v[id]}">Удалить</a>
	</p>
WALL;
}

?>
<!-- Вывод записей из БД -->
