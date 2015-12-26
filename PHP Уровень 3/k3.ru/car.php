<?php

class Car {
	
	public $name = "";
	public $speed = 0;
	protected $country = "РФ";
	private $primeCost = 100;
	const CNAME = "Автомобиль";
	
	public function __construct($name,$sp) {
		$this->name = $name;
		$this->speed = $sp;
		echo "Создан объект класса ".__CLASS__."<br>";
	}
	
	public function __destruct() {
		echo "Удалён объект класса ".__CLASS__."<br>";
	}
	
	public function __clone() {
		echo "Клонирован объект класса ".__CLASS__."<br>";
	}
	
	public function show() {
		// echo "автомобиль";
		echo "<h3>", self::CNAME,"</h3>";
		echo $this->name, "<br>";
		echo $this->speed, "<hr>";
	}
	
	public function getClassName() {
		return __CLASS__ ;
	}
	
	public function __toString() {
	return __CLASS__." ".$this->name;
	}
	
	function __invoke() {
		echo __METHOD__;
	}
	
}
/*
$car1 = new Car;
// $car1 = new Car();

$car1->name = "Калина";
$car1->speed = "180";
*/

$car1 = new Car("Приора", 200);

//$car2 = $car1;
$car2 = clone $car1;
$car2->name = "Браво";

/*
echo $car1->name, "<br>";
echo $car1->speed, "<hr>";

echo $car1->show();
*/

$car1->show();
$car2->show();

//echo $car1->getClassName();
//echo Car::getClassName();

class SuperCar extends Car {
	public $price = 0;
	
	public function getPrice() {
		return $this->price;
	}
	
	public function show() {
		echo $this->price, "<br>";
		parent::show();
	}
	
	public function getCountry() {
		echo $this->country, "<br>";
	}
}

$car3 = new SuperCar("Феррари", 350);
$car3->show();
echo $car3->getClassName();

$car3->getCountry();
echo "<hr>";
$name = "ёМобиль";
$speed = 250;

try {
	if ($name == "ёМобиль")
		throw new Exception ("Автомобиль не создан");
	$car4 = new SuperCar($name, $speed);
} catch (Exception $e) {
	echo "Ошибка:<br>";
	echo $e->getMessage(),"<br>";
	echo $e->getLine(),"<br>";
	echo $e->getFile(),"<hr>";
}

echo "<hr>";

foreach ( $car1 as $p => $v) {
	echo "Свойство $p = $v <br>";
}

echo Car::CNAME,"<br>";


abstract class Log {
	abstract function write($txt);
}

class FileLog extends Log {
	function write($txt) {
		file_put_contents("log.txt",$txt);
	}
}
$fileLog = new FileLog();
$fileLog->write('q');




interface Numerable {
  function showList();
} 
 
class Books implements Numerable{
 public $bList	= [];
 function __construct($l){
   $this->bList = $l ;
 }	
 function showList	(){
   foreach($this->bList as $v)
   echo "Книга $v<br>"; 
 }
}  
class Users implements Numerable{
 public $uList = [];	
 function __construct($u){
   $this->uList	 = $u;
 }	
 function showList	(){
   echo "<ul>";	 
   foreach($this->uList as $v)
   echo "<li>$v<br>"; 
   echo "</ul>";   
 }	
} 
 
$books = new Books(array("PHP5","JS")); 
$users  = new Users(array("Вася","Петя")); 
$books->showList();
$users->showList();






final class Math {
	static $about = "Математика";
	static function random(){
		return rand()/getrandmax();
	}
}

echo Math::$about;
echo Math::random(),"<br>";





echo "<hr>";
if($car1 instanceOf Car)
	echo "car1 cоздан Car";
else
	echo "car1 не cоздан Car";

echo "<hr>";
if($car1 instanceOf SuperCar)
	echo "car1 cоздан Car";
else
	echo "car1 не cоздан Car";
echo "<hr>";




function __autoload($classname){
	include "$classname.php";
}

$unit = new Unit("танк");






class PropertyTest {
	const FILE = "prop.txt";
	public $data = [];
	//private $data = array();
	public function __set($name, $value) {
	if(file_exists(self::FILE))
		$this->data = unserialize(file_get_contents(self::FILE));
		$this->data[$name] = $value;
		file_put_contents(self::FILE, serialize($this->data));
	}
	public function __get($name) {
		if(file_exists(self::FILE))
			$this->data = unserialize(file_get_contents(self::FILE));
		if (array_key_exists($name, $this->data)) {
		return $this->data[$name];
	}
	}
	}
$obj = new PropertyTest;
$obj->a = 1;
$obj->some = "что-то там";
echo $obj->a . "\n\n";







echo $car1;

$car1();


var_dump(get_object_vars($car1));
var_dump(get_class_vars("Car"));
var_dump(get_class_methods("Car"));

echo get_class($car2);
echo get_parent_class($car2);

if (is_subclass_of($car2, "Car"))
	echo "Car является предком";

if (is_a($car2, "Car"))
	echo "Car1 является предком";




?>