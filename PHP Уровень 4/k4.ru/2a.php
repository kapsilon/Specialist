<?
/*
fuction foo($a,$b)
{
  if($a == $b) return 0;
  return ($a<$b) ? -1 : 1;
}

usort([1,2,3,4,5], 'foo');
*/

interface Strategy
{
  function doOperation($num1, $num2);
}
class OperationAdd
{
  function doOperation($n1,$n2);
  {
    return $n1 + $n2;
  }
}
class OperationMult
{
  function doOperation($n1,$n2);
  {
    return $n1 * $n2;
  }
}


class Context
{
  private $strategy;
  function __construct(Strategy $s);
  {
    $this->strategy = $s
  }
  function execute($n1, $n2);
  {
    return $this->strategy->doOpertion($n1, $n2);
  }
}

$ctx = new Context(new OperationAdd);
echo $ctx->execute(2,3);
