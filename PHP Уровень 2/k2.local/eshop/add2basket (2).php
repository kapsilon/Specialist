<?
	require "inc/lib.inc.php";
	require "inc/db.inc.php";

	if (!empty($_GET["id"])) {
	$id = $_GET["id"]*1;
	if ($id)
	add2Basket($id);
	}
	header("Location: catalog.php");

?>