<?

function Hello($name)
{
  echo "Привет, $name";
}

//1
Hello('John');

//2
$func = 'Hello';
$func('John');
var_dump($x);

//3
$x = function ($name)
      {
        echo "Привет, $name";
      };
$x('John');




?>
