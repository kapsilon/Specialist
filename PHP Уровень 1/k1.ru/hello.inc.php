
<?
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
$hour = (int)strftime('%H');
$welcome = '';
if($hour > 0 and $hour < 6){
	$welcome = 'Доброй вечер!';
}
elseif($hour >= 6 and $hour < 12){
	$welcome = 'Доброе утро!';
}
elseif($hour >= 12 and $hour <= 18){
	$welcome = 'Добрый день!';
}
elseif($hour >= 19 and $hour <= 23){
	$welcome = 'Добрый вечер!';
}
else{
	$welcome = 'Приветствуем!!!';
}
//echo "<h1> $welcome Гость!</h1>";
?>