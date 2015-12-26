<?php
/*
Интерфейс Итератор - создаём foreach с чем угодно
*/
class NumberPow implements Iterator{
  private $start, $end;
  private $cur;

  function __construct($start, $end){
    $this->start = $start;
    $this->end = $end;
  }

 function rewind() {
    $this->cur = $this->start;
  }

  function current() {
    return pow($this->cur, 2);
  }

  function key() {
    return $this->cur;
  }

  function next() {
    $this->cur++;
  }

  public function valid() {
    return $this->cur <= $this->end;
  }
}



$values = new NumberPow(3,700);

foreach ($values as $key => $value) {
  print "квадрат числа $key = $value <br>";
}


/********/

class NumberSqrt implements Iterator{
  private $start, $end;
  private $cur;

  function __construct($start, $end){
    $this->start = $start;
    $this->end = $end;
  }

 function rewind() {
    $this->cur = $this->start;
  }

  function current() {
    return sqrt($this->cur);
  }

  function key() {
    return $this->cur;
  }

  function next() {
    $this->cur++;
  }

  public function valid() {
    return $this->cur <= $this->end;
  }
}


$values = new NumberSqrt(3,700);

foreach ($values as $key => $value) {
  print "Корень числа $key = $value <br>";
}
