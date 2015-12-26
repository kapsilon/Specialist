<?
function SayHello()
{
	echo "<h1>hello</h1>";
}

SayHello();
SayHello();
SayHello();
?>

<?
function SayHell($name)
{
	echo "<h1>hello, $name!</h1>";
}

SayHell('John');
$n = 'Mike';
SayHell($n);
SayHell(1);
?>

<?
function _SayHel($name, $h)
{
	echo "<h$h>hello, $name!</h$h>";
}

_SayHel('John', 1);
$n = 'Mike';
_SayHel($n, 2);
_SayHel(4, 3);
$str = '_SayHel';
$str(122, 5);
?>

<?
define('AAA', 100, true)
?>

<?
function _SayHell($name)
{
	static $count = 0;
	$count++;
	echo "Функция была вызвна $count раз";
	echo "<h1>hello, $name!</h1>";
}
_SayHell('John');
_SayHell('Mike');
_SayHell('Bill');
?>

<?
function _Foo()
{
	echo "Всего аргументов: ".func_num_args(). "<br>";
	echo "Второй аргумент: ". func_get_arg(1);
}
_Foo(1,2,3);
?>

<?
function MyCount($var, $mode)
{
	if (is_null($var))
		{
		return 0;
		}
	if(!is_array($var))
		{
		return 1;
		}
	$cnt = 0;
	foreach ($var as $v) {
		if(is_array($v) and $mode)
			$cnt += myCount ($v, 1);
		$cnt++;
	}
}
?>

<pre>
<?
print_r(get_defined_functions());
?>