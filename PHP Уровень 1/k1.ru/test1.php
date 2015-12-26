<?
$x = true;
if ($x) {
	echo "One";
?>
<p>Привет</p>
<?
}else{
	echo "Two";
}
?> 

<?
$i = 2;
switch ($i) {
	case 0:
		echo "Результат: 0";
		break;
	case 1:
		echo "Результат: 1";
		break;
	case 2:
		echo "Результат: 2";
		break;
	default:
		echo "Взрыв!";
		break;
}
?>

<?
$arr0 = array();

$arr1 = array('А', "12", "9");
echo $arr1[1];
$arr1[] = 90;
$arr1[] = true;
?>

<pre>
<?
$users = array(4=>"john", "bill", 1=>"12", 25, true);
$users[500] = 400;
$users[] = 12;
unset($users[6]);
var_dump($users);
?>

<?
$arr2 = array();
$arr2[] = 100;
$arr2[5] = 400;
?>

<?
$user = array("name" => "john", true);
?>

<?
for ($i=1; $i <= 10 ; $i++) { 
	echo $i . ' ';
}
?>

<?
for ($i=1; $i <= 50 ; $i += 2 ) { 
	echo "$i ";
}
?>

<?
$i = 1;
while ($i <= 10) {
	echo $i++ . ' ';
}
?>

<?
$i = 1;
while ($i <= 50) {
	echo "$i ";
	$i += 2;
}
?>

<?
$i = 0;
$str = "Hello";
$lenstr = strlen($str);
while ($i <= $lenstr) {
	echo $str{$i}. '<br>';
	$i++;
}
?>

<?
$i = 100;
do {
	echo $i++;
} while ( $i <= 10);
?>

<?
$arr = array('a' => 'one', 'b' => 'two', 'c' =>'three');
foreach ($arr as $key => $value) {
	echo "$key => $value\n";
}
?>

<?
$user = array(1,2,3,4,5);
print_r($user);
foreach ($user as $v) {
	echo $v *=10 . '<br>';
}

foreach ($user as $v) {
	$v *=10 . '<br>';
}
print_r($user);

foreach ($user as &$v) {
	$v *=10 . '<br>';
}
print_r($user);
?>