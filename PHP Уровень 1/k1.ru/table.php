<!-- ������� ��������� �������� -->
<form action=''>
	<label>���������� �������: </label><br />
	<input name='cols' type='text' value="" /><br />
	<label>���������� �����: </label><br />
	<input name='rows' type='text' value="" /><br />
	<label>����: </label><br />
	<input name='color' type='text' value="" /><br /><br />
	<input type='submit' value='�������' />
</form>
<!-- ������� -->
<?
include_once 'functions.inc.php';
_table();
_table(10, 10, 'green');
_table(100, 10, 'yellow');
?>
<!-- ������� -->
<!-- ������� ��������� �������� -->