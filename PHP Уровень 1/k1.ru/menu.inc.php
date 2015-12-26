<h2>Навигация по сайту</h2>
<?	$menu = array();
	$menu[] = array('link'=>'Домой', 'href'=>'index.php');
	$menu[] = array('link'=>'О нас', 'href'=>'index.php?id=about');
	$menu[] = array('link'=>'Контакты', 'href'=>'index.php?id=contact');
	$menu[] = array('link'=>'Таблица умножения', 'href'=>'index.php?id=table');
	$menu[] = array('link'=>'Калькулятор', 'href'=>'index.php?id=calc');

include_once 'functions.inc.php';

if(!DrawMenu($menu))
	echo "Извините, ошибка";
?>