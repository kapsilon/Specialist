<?php

session_start();
$result = "";

echo $_POST["str"] ." и ". $_SESSION["randStr"];


if ($_SERVER["REQUEST_METHOD"] == POST){
	if(isset($_SESSION["randStr"])){
		if($_SESSION["randStr"] == $_POST["str"])
			$result = "Заходи!";
		else 
			$result = "Вон!";
	} else
		$result = "КАРТИНКА!!!";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
<form action="" method="post">
	<div>
		<img src="noise-picture.php">
	</div>
	<div>
		<label>Введите строку</label>
		<input type="text" name="str" size="6">
	</div>
	<input type="submit" value="OK">
</form>
<?php 
echo $result;
?>
</body>
</html>
