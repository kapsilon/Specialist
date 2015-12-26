<?
//Замыкание

$name = 'John';

$closure = function() use($name)
 {
   echo $name;
 };

$closure();

/*************/

$add = function ($num)
      {
        return function($x) use($num)
                {
                  return $x * $num;
                }
      }

$add_2 = $add(2);
echo $add_2(2); //4
echo $add_2(5); //10

$add_5 = $add(5);
echo $add_2(2); //10
echo $add_2(5); //25

?>
