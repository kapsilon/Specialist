<?
$subject = $_POST["subject"];
$message = $_POST["message"];
$to = "some@som.com";
if(mail($to, $subject, $message))
	echo "Сообщение отправлено!<br>"

?>




<form  method="POST">
	<input type="text" name="subject"><br>
	<input type="text" name="message"><br>
	<input type="submit" value="Отправить">

</form>