<?php
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$mail = $_POST['mail'];

$name = htmlspecialchars($name);
$telephone = htmlspecialchars($telephone);
$mail = htmlspecialchars($mail);

$name = urldecode($name);
$telephone = urldecode($telephone);
$mail = urldecode($mail);

$name = trim($name);
$telephone = trim($telephone);
$mail = trim($mail);

if (mail("hameleon2011007@mail.ru",
    "Заявка с сайта",
    "Имя: ".$name. "\nТелефон: ".$telephone. "\nEmail:\n".$mail))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}