<?php
	abstract class AUser {
		abstract function showInfo();
	}
	
		interface ISuperUser {
		function getInfo();
	}
	
	

	class User extends AUser {
		public $name = "";
		public $login = "";
		public $password = "";
		
		public static $Count = 0;
		
		public function __construct($name,$login,$password) {
			++self::$Count;
			$this->name = $name;
			$this->login = $login;
			$this->password = $password;
		}
		
		public function __destruct() {
			echo "Пользователь ".$this->name." удалён <br>";
		}
		
		public function __clone() {
			$this->name = "";
			$this->login = "";
			$this->password = "";
			++static::$Count;
		}
		
		public function showInfo() {
			echo "Имя: ", $this->name, "<br>";
			echo "Логин: ", $this->login, "<br>";
			echo "Пароль: ", $this->password, "<br>";	
	}
	}
	
	
	$user1 = new User("Первый","first","fgjhdjj654");
	$user2 = new User("Второй","second","fg456fnfgn");
	$user3 = new User("Третий","third","dgfj946fgn");
	
	$user1->showInfo();
	$user2->showInfo();
	$user3->showInfo();
	
	$user4 = clone $user2;
	$user4->name = "Четвёртый";
	$user4->showInfo();
	
	
	

	
	class SuperUser extends User implements ISuperUser {
		public $role = "";
		
		public static $Count = 0;
		
		public function __construct($name,$login,$password,$role) {
		parent::__construct($name,$login,$password);
		$this->role = $role;
		++self::$Count;
		--parent::$Count;
		}
		
		public function showInfo() {
			parent::showInfo();
			echo "Роль: {$this->role} <hr>";
		}
		
		public function getInfo(){
			$res = [];
			foreach($this as $k => $v) $res[$k] = $v;
			return $res;
		}
		
	}
	
	$user = new SuperUser("Супер","super","jhg767fsfs","admin");
	$user->showInfo();
	var_dump($user->getInfo());
	/*
	$user->showInfo();
	echo "Роль пользователя: ".$user->role;
	*/
	$user5 = clone $user;
	
	
	echo "<br>Обычных пользователей = ", User::$Count ,"<br>";
	echo "Супер-пользователей = ", SuperUser::$Count ,"<br>";
	
?>