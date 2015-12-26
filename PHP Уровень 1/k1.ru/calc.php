<!-- Область основного контента -->
<?
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$operator = trim(strip_tags($_POST['operator']));
	$num1 = abs((int)$_POST['num1']);
	$num2 = abs((int)$_POST['num2']);
}
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	<label>Число 1:</label><br>
	<input type='text' name='num1' value="<?=$num1?>"/><br>
	<label>Оператор: </label><br>
	<input type='text' name='operator' value="<?=$operator?>"/><br>
	<label>Число 2: </label><br>
	<input name='num2' type='text' value="<?=$num2?>"/><br><br>
	<input type='submit' value='Считать'>
</form>	

<?
if ((num1 or $num1 == 0) and (num2 or $num2 == 0) and $operator) {
		switch($operator){
		case '+':
			$result = $num1+$num2;
			break;
		case '-':
			$result = $num1-$num2;
			break;
		case '*':
			$result = $num1*$num2;
			break;
		case '/':
			if ($num2 == 0) {
				$result = "На 0 делить нельзя";
			}
			else {
				$result = $num1/$num2;
			break;
		default: $result = 'Проверьте введенные данные';
		}
echo "Результат: ". $result ."</p>";
}
?>
<!-- Область основного контента -->