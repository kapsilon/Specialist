<?
session_start();

echo "<pre>";
unset($_SESSION["basket"]);
print_r(print_r($_SESSION["basket"]););
echo "</pre>";
?>