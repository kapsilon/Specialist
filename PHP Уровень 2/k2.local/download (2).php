<?
/*
echo "<pre>";
print_r($_FILES);
echo "/<pre>";
*/

echo $_FILES["fname"]["name"];
$old = $_FILES["fname"]["name"];
$new = $_FILES["fname"]["tmp_name"];
move_uploaded_file($new,"upload/".$old);

?>



<form enctype="multipart/form-data" method="POST">
	<input type="file" name="fname"><br>
	<input type="submit" value="Отправить">

</form>