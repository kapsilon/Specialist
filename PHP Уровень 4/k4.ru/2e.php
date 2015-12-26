<?
//Анонимные функции
$arr = [1,2,3,4,5];

function foo($v)
{
  return $v*10;
}

$newArr = array_map('foo', $arr);

$newArr = array_map(create_function(), $arr);

$newArr = array_map(function ($v)
                            {
                              return $v*10;
                            },
                            $arr);


?>
