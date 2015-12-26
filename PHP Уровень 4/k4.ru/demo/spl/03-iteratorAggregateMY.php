<?php
/**
 * Агрегатор
 */

 class NumberPow implements Iterator{
   private $obj;
   private $cur;

   function __construct($obj){
     $this->obj = $obj;
   }

  function rewind() {
     $this->cur = $this->obj->getStart();
   }

   function current() {
     return pow($this->cur,2);
   }

   function key() {
     return $this->cur;
   }

   function next() {
     $this->cur++;
   }

   public function valid() {
     return $this->cur <= $this->obj->getEnd();
   }
 }

 class NumberSqrt implements Iterator{
   private $obj;
   private $cur;

   function __construct($obj){
     $this->obj = $obj;
   }

  function rewind() {
     $this->cur = $this->obj->getStart();
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
     return $this->cur <= $this->obj->getEnd();
   }
 }




class NumberAction implements IteratorAggregate
{
  private $start, $end, $action;

  function __construct($start,$end,$action){
    $this->start = $start;
    $this->end = $end;
    $this->action = $action;
  }
  public function getIterator()
  {
    switch ($this->action) {
      case 'pow':
        return new NumberPow($this);
        break;
      case 'sqrt':
        return new NumberSqrt($this);
        break;
    }
  }

  function getStart()
  {
    return $this->start;
  }
  function getEnd()
  {
    return $this->end;
  }
}

$action = 'sqrt';
$obj = new NumberAction(3,7, $action);
foreach ($obj as $key => $value)
  print "$action числа $key = $value <br>";
