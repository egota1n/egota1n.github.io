<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5960989721:AAH18425oUVTYhU7Kgx6nzX6n5QTNH3seBw";

//Сюда вставляем chat_id
$chat_id = "-1001522485041";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $nameform = ($_POST['nameform']);
    $name = ($_POST['name']);
    $phone = ($_POST['phone']);
    $telegram = ($_POST['telegram']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Форма:' => $nameform,
        'Имя:' => $name,
        'Телефон:' => $phone,
        'Телеграм:' => $telegram
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = @fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://loyko.com.ua/thanks2.html');
}

?>