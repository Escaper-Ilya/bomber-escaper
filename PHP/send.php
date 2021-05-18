
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$how_call = $_POST['how_call'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($mail);
$how_call = htmlspecialchars($how_call);

$name = urldecode($name);
$mail = urldecode($mail);
$how_call = urldecode($how_call);

$name = trim($name);
$mail = trim($mail);
$how_call = trim($how_call);

//echo $fio;
//echo "<br>";
//echo $email;
if (mail("gilya-nn@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$mail ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>