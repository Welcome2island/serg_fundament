<?php
$phone = $_POST['name'];
$name = $_POST['nomer'];
$type = $_POST['type'];
$size = $_POST['size'];
$place = $_POST['place'];
if (isset($type) or isset($size) or isset($place)
    or $type != "" or $size != "" or $place != "") {
$message = "Телефон:" . $phone;
$message .= "\n";
$message .= "Ближайший населенный пункт:" . $place;
$message .= "\n";
$message .= "Примерный размер фундамента:" . $size;
$message .= "\n";
$message .= "Тип фундамента:" . $type;
$message .= "\n";
$message .= "Имя:" . $name;
    if (mail('fundamentservis@yandex.ru', 'Новый лид с квиз-формы', $message )) {
        echo "<h3>Сообщение отправлено</h3>";}
    else {
        echo "<h3>При отправке сообщения возникла ошибка</h3>";
    }
    }
    else {
    if (isset($phone) && isset($name)
    && $phone != "" && $name != "") {
        if (mail('fundamentservis@yandex.ru', 'Новый лид', $phone . ' ' . $name)) {
            echo "<h3>Сообщение отправлено</h3>";
        } else {
            echo "<h3>При отправке сообщения возникла ошибка</h3>";
        }
    }
}

