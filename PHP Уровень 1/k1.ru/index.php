
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
	<?
	include 'hello.inc.php';

	$title = '���� ����� �����';
	$header = "������� ��������";
	$id = strtolower(strip_tags(trim($_GET['id'])));

	switch($id){
		case 'about':
			$title = '� �����';
			$header = '� ����� �����';
	break;
		case 'contact':
			$title = '��������';
			$header = '�������� �����';
	break;
		case 'table':
			$title = '������� ���������';
			$header = '������� ���������';
	break;
		case 'calc':
			$title = '��-���� �����������';
			$header = '�����������';
	break;
	}
	?>
		<title><?=$title?></title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- ������� ����� �������� -->
			<?
			include "top.inc.php"
			?>
			<!-- ������� ����� �������� -->
		</div>
		<div id="content">
			<?
			echo "<h1>$header</h1>";
			switch ($id) {
				case 'about': include 'about.php'; break;
				case 'contact': include 'contact.php'; break;
				case 'table': include 'table.php'; break;
				case 'calc': include 'calc.php'; break;
				default: include 'index.inc.php';
			}
			?>	
			<!-- ������� ��������� �������� -->
		</div>
		<div id="nav">
			<!-- ��������� -->
			<!-- ���� -->
			<?
			include "menu.inc.php"
			?>
			<!-- ���� -->
			<!-- ��������� -->
		</div>
		<div id="footer">
			<!-- ������ ����� �������� -->
			<?
			include "footer.inc.php"
			?>
			<!-- ������ ����� �������� -->
		</div>
	</body>
</html>