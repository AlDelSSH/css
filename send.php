<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text1 = $_POST['text1'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text1 = htmlspecialchars($text1);
$name = urldecode($name);
$email = urldecode($email);
$text1 = urldecode($text1);
$name = trim($name);
$email = trim($email);
$text1 = trim($text1);
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $text1;
if (mail("reykess64@gmail.com", "Коннект с сайта", "Сообщение:".$name.$text1.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>