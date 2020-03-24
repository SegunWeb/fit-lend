<?php
$recepient = "alena.muntyanu1992@gmail.com";
$siteName = "YumWeek";
$mailFrom = "yumweekpp@gmail.com";
$headers = "From: $mailFrom\r\nReplay-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
$pagetitle = "=?utf-8?B?".base64_encode("Заявка с сайта \"$siteName\"")."?=";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = "Имя: $name \nEmail: $email \nТелефон: $phone";



$success = mail($recepient, $pagetitle, $message, $headers);
echo $success;




?>