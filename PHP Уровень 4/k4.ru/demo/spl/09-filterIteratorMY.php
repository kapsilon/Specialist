<?php

$data = [
  ['name'=>'Jane Thorster'],
  ['name'=>'Wolverine'],
  ['name'=>'Mockinbird'],
  ['name'=>'Hawkeye'],
  ['name'=>'Red Widow']
];
$perPage = 3;
$page = (int)$_GET['page'] ?: 1;
$offset = ($page * $perPage) - $perPage;

$it = new ArrayIterator($data);

try {
  foreach (new LimitIterator($it, $offset, $perPage) as $result) {
    echo $result['name']."<br>";
  }
} catch (OutOfBoundsException $e) {
  echo "Больше никого!";
}catch (Exception $e) {
  echo $e->getMessage();
}
