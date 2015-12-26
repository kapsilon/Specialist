
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
	<?
	include 'hello.inc.php';

	$title = 'Ñàéò íàøåé øêîëû';
	$header = "Ãëàâíàÿ ñòğàíèöà";
	$id = strtolower(strip_tags(trim($_GET['id'])));

	switch($id){
		case 'about':
			$title = 'Î ñàéòå';
			$header = 'Î íàøåì ñàéòå';
	break;
		case 'contact':
			$title = 'Êîíòàêòû';
			$header = 'Îáğàòíàÿ ñâÿçü';
	break;
		case 'table':
			$title = 'Òàáëèöà óìíîæåíèÿ';
			$header = 'Òàáëèöà óìíîæåíèÿ';
	break;
		case 'calc':
			$title = 'Îí-ëàéí êàëüêóëÿòîğ';
			$header = 'Êàëüêóëÿòîğ';
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
			<!-- Âåğõíÿÿ ÷àñòü ñòğàíèöû -->
			<?
			include "top.inc.php"
			?>
			<!-- Âåğõíÿÿ ÷àñòü ñòğàíèöû -->
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
			<!-- Îáëàñòü îñíîâíîãî êîíòåíòà -->
		</div>
		<div id="nav">
			<!-- Íàâèãàöèÿ -->
			<!-- Ìåíş -->
			<?
			include "menu.inc.php"
			?>
			<!-- Ìåíş -->
			<!-- Íàâèãàöèÿ -->
		</div>
		<div id="footer">
			<!-- Íèæíÿÿ ÷àñòü ñòğàíèöû -->
			<?
			include "footer.inc.php"
			?>
			<!-- Íèæíÿÿ ÷àñòü ñòğàíèöû -->
		</div>
	</body>
</html>