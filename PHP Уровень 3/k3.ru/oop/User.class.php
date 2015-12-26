<?php	

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