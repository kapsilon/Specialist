<!-- Область основного контента -->
<form action=''>
	<label>Количество колонок: </label><br />
	<input name='cols' type='text' value="" /><br />
	<label>Количество строк: </label><br />
	<input name='rows' type='text' value="" /><br />
	<label>Цвет: </label><br />
	<input name='color' type='text' value="" /><br /><br />
	<input type='submit' value='Создать' />
</form>
<!-- Таблица -->
<?
include_once 'functions.inc.php';
_table();
_table(10, 10, 'green');
_table(100, 10, 'yellow');
?>
<!-- Таблица -->
<!-- Область основного контента -->