<?
//$pass = $_POST["pass"];
$salt = "giug=41kj";
echo $pass = md5(md5("qwerty").$salt);

?>