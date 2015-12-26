<?
$visitCounter = 0;
if($_COOKIE["visitCounter"]) {
	$visitCounter = $_COOKIE["visitCounter"];
}
$visitCounter++;

$lastVisit = "";
if($_COOKIE["lastVisit"]) {
	$lastVisit = date("d-m-Y", $_COOKIE["lastVisit"]);
}

setcookie("visitCounter", $visitCounter, time()+31536000);
setcookie("lastVisit", time(), time()+31536000);
?>