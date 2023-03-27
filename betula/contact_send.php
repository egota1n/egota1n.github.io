<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "6106576292:AAGTjCrqrSAC_V_tt2eVhUrUU8Y17t3TgM8";

//Сюда вставляем chat_id
$chat_id = "-1001985966049";

//Определяем переменные для передачи данных из нашей формы
    $form = 'Contact';
    $topic = ($_POST['topic']);
    $name = ($_POST['name']);
    $last_name = ($_POST['last_name']);
    $company = ($_POST['company']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);
    $position = ($_POST['position']);
    $location = ($_POST['location']);
    $message = ($_POST['message']);
    $txt = '';

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Form:' => $form,
        'Topic:' => $topic,
        'Name:' => $name,
        'Last_name:' => $last_name,
        'Company:' => $company,
        'Phone:' => $phone,
        'Email:' => $email,
        'Position:' => $position,
        'Location:' => $location,
        'Message:' => $message
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://xn--80ahcnkip5a.online/Project/unkown/betula/');
?>