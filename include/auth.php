<?php

    session_start();
    include 'db_worker.php';

    $sec_code = 'e%*56Kfw}0BeBnj@I{lm3MK##$dp9?Qp}vImZgS5';

    if (isset($_SESSION['auth-key']) && isset($_SESSION['username']) && isset($_SESSION['sec-code'])) {
        if (strlen($_SESSION['auth-key']) == 40 && strlen($_SESSION['username']) > 5 && $_SESSION['sec-code'] == $sec_code) {
            $login = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_SESSION['username']);
            $passw = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_SESSION['auth-key']);

            if (Check_Login($login, $passw, FALSE) != 1) {
                header('Location: /');
            }
        } else {
            header('Location: /');
        }
    } else {
        header('Location: /');
    }

?>