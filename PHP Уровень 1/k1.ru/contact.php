<!-- ������� ��������� �������� -->
<?
$postsize = ini_get('post_max_size');
$lastletter = $postsize{strlen($postsize)-1};
$postsize = (int)$postsize;
switch (strtoupper($lastletter)) {
	case 'G':
		$postsize *= 1024;
	case 'M':
		$postsize *= 1024;
	case 'K':
		$postsize *= 1024;
}
?>
<h3>�����</h3>
<p>127322 ������, ������������ �������� 21</p>
<h3>������� ������</h3>
<form action='' method='post'>
	<label>���� ������: </label><br />
	<input name='subject' type='text' size="50"/><br />
	<label>����������: </label><br />
	<textarea name='body' cols="50" rows="10"></textarea><br /><br />
	<input type='submit' value='���������' />
</form>	
<p>����. ������ ���������
<?= $postsize?>
 ����.
</p>
<!-- ������� ��������� �������� -->