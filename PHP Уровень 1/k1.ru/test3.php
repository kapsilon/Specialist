<?
function MyStrlen($str)
{
	$str = (string)$str;
	$i=0;
	while ($str{$i} != "") {
		
		$i++;
	}
	return $i;
}
?>

<pre>
<?
$today = getdate();
print_r($today);
?>

<?
$dt = getdate(999999);
print_r($dt);
?>

<?
$t = mktime(0,0,0,12,32,2012);
$dt = getdate($t);
print_r($dt);


echo date("d-m-Y H:i:s");
echo "<br>";
echo date("r");
echo "<br>";
echo date("r", strtotime("+ 20 days, - 40 hours"));
?>


<?
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
print_r($GLOBALS);
?>

<h1>Before</h1>
<?
include_once "test.inc.php";
include_once "test.inc.php";
?>
<h1>After</h1>


<?
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name = trim(strip_tags($_POST['name']));
	$age = abs((int)$_POST['age']);
}
?>
<h1></h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="name" value="<?=$name?>"><br>
<input type="text" name="age" value="<?=$age?>"><br>
<input type="submit"><br>
</form>

<?
if ($name and $age) {
?>
<p>Ваше имя: <?=$name?></p>
<p>Ваш возраст: <?=$age?></p>
<?
}
?>