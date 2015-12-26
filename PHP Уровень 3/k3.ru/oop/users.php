<?php

	function __autoload($name) {
		require "$name.class.php";
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