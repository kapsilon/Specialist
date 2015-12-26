<?

$host = "localhost";
$user = "root";
$pass = "";
$db = "web";
$link = mysqli_connect($host,$user,$pass,$db);

mysqli_query($link, "SET NAMES utf-8");
$sql = "SELECT * FROM teachers";
$result = mysqli_query($link, $sql);
print_r($result);
echo "<br>";

/*
$row = mysqli_fetch_array($result);
print_r($row);
*/

/*
while($row = mysqli_fetch_array($result)) {
	echo $row["id"], $row["name"], $row["addr"], "<br>";
	echo $row[0], $row[1], $row[2], "<br>";
}
*/

/*
while($row = mysqli_fetch_assoc($result)) {
	echo $row["id"], $row["name"], $row["addr"], "<br>";
	echo $row[0], $row[1], $row[2], "<br>";
}
*/

/*
while($row = mysqli_fetch_row($result)) {
	echo $row["id"], $row["name"], $row["addr"], "<br>";
	echo $row[0], $row[1], $row[2], "<br>";
}
*/

$arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($arr);
echo "</pre>";


mysqli_free_result($result);
mysqli_close($link);

?>