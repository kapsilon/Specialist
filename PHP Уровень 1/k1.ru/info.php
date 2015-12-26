<h2>122=2*6/9</h2>
<?php
echo '123=',2*6/9;
?>
<h2>
<?php
echo '123=',2*6/9;
?>
</h2>
<?php
echo strftime('%d-%B-%Y, %A');
?>
<p>
<?
error_reporting(E_ALL); 
$x = 11;
$x = $x + 14;
echo $x;
unset($x);
echo $x;
?>
</p>
<?$name = 'Pete' ?>
<p>
Hell yeah!
<?
$x = 20;
$name = $x + 5;
echo $name;
$name = $x + 15;
echo $name;
?>
</p>
<p>
<?
$a = 'beta';
$$a = 'tetta';
echo $beta;
$a = 'alpha';
$$a = ' tetta';
echo $alpha;
?>
</p>
<p>
<?
$x = false;
echo $x ;
?>
</p>
<p>
<?
$x = 'orange';
echo "He \n drank. ";
echo "He 'drank' \n\t $x \"\$fifty\" juice!";
?>
</p>
<?
$x = 'orange';
echo <<<intoro
He 'drank' 

	$x \"\$fifty\" juice!"
intoro;
?>
</p>
<p>
<?
$x = "orange";
echo "He drank {$x}s & juice! of {$x}s"
?>
</p>

<p>
<?
$str = 'this is death.';
$first = $str{0};
$last = $str{strlen($str)-2};
echo $first, $last, strlen($str);
$str{strlen($str)-1} = '!';
echo $str;
?>
</p>

<p>
<?
$x = true;
$c = $x * 10;
echo $c;
$x = 'he5llo';
$c = $x * 10;
echo $c;
?>
</p>

<p>
<?
$x = '5bar';
settype($x, 'int');
echo $x;
$x = '5bar';
echo (int)$x;
echo $x;
?>
</p>

<p>
<?
const PETTA = 1459;
echo PETTA;
?>
</p>