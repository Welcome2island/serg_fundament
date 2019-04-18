<?php
$phone = $_POST['name'];
$name = $_POST['nomer'];
if (isset($phone) && isset($name)
    && $phone != "" && $name != "") {
    if (mail('fundamentservis@yandex.ru', 'Лид', $phone . ' ' . $name )) {
        echo "<h3>Сообщение отправлено</h3>";}
    else {
        echo "<h3>При отправке сообщения возникла ошибка</h3>";
    }
}
//if( $_POST){
//
//    require 'class.phpmailer.php';
//    require 'class.smtp.php';
//
//    $mail = new PHPMailer;
//    $mail->isSMTP();
//
//// Настройки
//    $mail->Host = 'smtp.server.ru';
//    $mail->SMTPAuth = true;
//    $mail->CharSet = 'UTF-8';
//    $mail->Username = 'fundamentservis@yandex.ru'; // логин от вашей почты
//    $mail->Password = 'Nhgy5r5Iljm70'; // пароль от почтового ящика
//    $mail->SMTPSecure = 'ssl';
//    $mail->Port = '465';
//    $mail->From = 'fundamentservis@yandex.ru'; // адрес почты, с которой идет отправка
//    $mail->FromName = 'Сообщение с domain.ru'; // имя отправителя
//    $mail->addAddress('info@domain.ru');
//
//// Письмо
//    $mail->isHTML(true);
//    $mail->Body = "Имя: {$_POST['name']}<br> Телефон: {$_POST['phone']}<br> Email: {$_POST['email']}<br> Сообщение: " . nl2br($_POST['body']);
//    $mail->AltBody = "Имя: {$_POST['name']}\r\n Телефон: {$_POST['nomer']}\r\n Email: {$_POST['email']}\r\n Сообщение: {$_POST['body']}";
////	$mail->SMTPDebug = 0;
//
//    if( $mail->send() ){
//        $answer = '1';
//    }else{
//        $answer = '0';
//        echo 'Письмо не может быть отправлено. ';
//        echo 'Ошибка: ' . $mail->ErrorInfo;
//    }
//    die( $answer );
//}
