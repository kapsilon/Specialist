<?php
//бесконечный проход по массиву
$ai = new ArrayIterator([$t1, $t2, $t3]);
$ii = new InfiniteIterator($ai);
foreach ($ii as $task) {
  $stop = $task->action();
  if($stop)
    break;
  usleep(200);
}
