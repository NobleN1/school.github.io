<?php

$recepient = "designer@lpdiamond.com";//почта
$sitename  = 'UDIAMOND - design school';
$subject   = "Новая заявка с сайта \"$sitename\"";
$name = "Новая заявка с сайта \"$sitename\"";
$email = 'noreply@site.ru';

$message="";
if (isset($_POST['form'])){
	if($_POST['form']!='') $message .= 'Форма: ' . $_POST["form"] ."<br>";
}
if (isset($_POST['name'])){
	if($_POST['name']!='') $message .= 'Имя: ' . $_POST["name"] ."<br>";
}
if (isset($_POST['name-second'])){
	if($_POST['name-second']!='') $message .= 'Фамилия: ' . $_POST["name-second"] ."<br>";
}
if (isset($_POST['phone'])){
	if($_POST['phone']!='') $message .= 'Телефон: ' . $_POST["phone"] ."<br>";
}
if (isset($_POST['email'])){
	if($_POST['email']!='') $message .= 'E-mail: ' . $_POST["email"] ."<br>";
}
if (isset($_POST['soc'])){
	if($_POST['soc']!='') $message .= 'Ссылка на соц.сети: ' . $_POST["soc"] ."<br>";
}
if (isset($_POST['question'])){
	if($_POST['question']!='') $message .= 'Вопрос: ' . $_POST["question"] ."<br>";
}

mail($recepient, $subject, $message, "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
?>