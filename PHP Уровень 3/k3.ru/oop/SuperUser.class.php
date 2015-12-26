<?php	

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