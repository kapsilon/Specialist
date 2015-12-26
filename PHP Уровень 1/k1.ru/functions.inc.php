<?
function DrawMenu($menu, $vertical=true)
{
	if (!is_array($menu))
		return false;
	$style = '';
	if (!$vertical)
		$style = ' style="display:inline;marging-right:15px"';
	echo '<ul>';
		foreach ($menu as $item) 
		{
		echo "<li$style><a href='$item[href]'>$item[link]</a></li>";
		}
	echo '</ul>';
	return true;
}

function _table($cols=5, $rows=5, $color=green)
{
echo "<table border='1'>";
for ($tr=1; $tr <= $rows; $tr++) { 
echo "<tr>";
for ($td=1; $td <= $cols ; $td++) { 
		if ($tr ==1 or $td==1) 
			echo "<th style='background:$color'>".$tr*$td."</th>";
		else
			echo "<td>".$tr*$td."</td>";
		}
			echo "</tr>";
	}
		echo "</table>";
}

?>