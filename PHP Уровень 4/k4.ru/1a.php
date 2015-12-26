<?
/**
 *
 */
class Window
{
  private $visible = false;
  private $modal = false;
  private $dialog = false;

  function __construct($d,$m,$v)
  {
    $this->visible = $v;
    $this->modal = $m;
    $this->dialog = $d;
  }
}

//$w = new Window(true,false,true)
/**
 *Шаблон проектирование Билдер
 */
class CreateWindow
{
  function setVisible($flag = false){
    $this->visible = $flag;
    return $this;
  }
  function setModal($flag = false){
    $this->modal = $flag;
    return $this;
  }
  function setDialog($flag = false){
    $this->dialog = $flag;
    return $this;
  }

  function create(){
    return new Window($this->dialog, $this->modal, $this->visible);
  }
}

$x = new CreateWindow;
$w = $x->setModal(true)->setVisible(true)->create();


/**
 * Шаблон проектирование Синглтон
 *Создание лога
 */
class Logger
{
  const LOG_NAME = 'file.log';
  private static $_instance;


  private function __construct(){}
  private function __clone(){}

  static function getInstance()
  {
    if (self::_instance == null) {
      self::_instance = new self;
    }
    return self::_instance;
  }

  function log($str)
  {
    file_put_contents(self::LOG_NAME, $str.PHP_EOL, FILE_APPEND);
  }
}

//$log = new Logger;
$log = Logger::getInstance();
$log->log('Break #1');
Logger::getInstance()->log('Break #2');

/**
 * Шаблон проектирование Фабричный
 *Создание лога
 */

interface Shape
{
  function draw();
}

class Square implements Shape
{
  function draw()
  {
    echo __METHOD__;
  }
}

class Rectangle implements Shape
{
  function draw()
  {
    echo __METHOD__;
  }
}

class Circle implements Shape
{
  function draw()
  {
    echo __METHOD__;
  }
}
