
<?
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
$hour = (int)strftime('%H');
$welcome = '';
if($hour > 0 and $hour < 6){
	$welcome = '������ �����!';
}
elseif($hour >= 6 and $hour < 12){
	$welcome = '������ ����!';
}
elseif($hour >= 12 and $hour <= 18){
	$welcome = '������ ����!';
}
elseif($hour >= 19 and $hour <= 23){
	$welcome = '������ �����!';
}
else{
	$welcome = '������������!!!';
}
//echo "<h1> $welcome �����!</h1>";
?>