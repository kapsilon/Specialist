<h2>��������� �� �����</h2>
<?	$menu = array();
	$menu[] = array('link'=>'�����', 'href'=>'index.php');
	$menu[] = array('link'=>'� ���', 'href'=>'index.php?id=about');
	$menu[] = array('link'=>'��������', 'href'=>'index.php?id=contact');
	$menu[] = array('link'=>'������� ���������', 'href'=>'index.php?id=table');
	$menu[] = array('link'=>'�����������', 'href'=>'index.php?id=calc');

include_once 'functions.inc.php';

if(!DrawMenu($menu))
	echo "��������, ������";
?>