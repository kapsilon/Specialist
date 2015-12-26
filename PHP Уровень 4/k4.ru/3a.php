<?
//генератор из php5.5

function nums()
{
  echo "START <br>";

  for ($i=0; $i < 5; ++$i) {
    yield $i;
    //выкидывает значение в форич и возвращается за остальным кодом
    echo "VALUE: $i<br>";
  }

  echo "FINISH <br>";
}

foreach (nums() as $v) {
  //echo "VALUE: $v <br>";
}

/*********/
//возвращение значений

function gen()
{
  yield 'a';
  yield 'b';
  yield 'name' => 'John';
  yield 'd';
  //yield 10 => 'Hello';
  yield  'e';
}

foreach (gen() as $k => $v) {
  echo "$k : $v<br>";
}


/*********/
//приём значений

function echoLogger()
{
  while (true) {
    echo 'Log: '.yield.'<br>';
  }
}
//сенд отправляет значение на место йелд
$logger = echoLogger();
$logger->send('ЮПА!');
$logger->send('ЮПА-СТАЙЛ!');

?>
