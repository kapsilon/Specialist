<?php
class EvenFilter extends FilterIterator{

  public function __construct(Iterator $it){
    parent::__construct($it);
  }

  function accept(){
    if($this->getInnerIterator()->current() % 2 != 0){
      return false;
    }
    return $this->getInnerIterator()->current();
  }
}


$numbers = range(21234500, 21237700);

$even = new EvenFilter(new ArrayIterator($numbers));

foreach($even as $value)
  echo "$value - чёт<br>";
