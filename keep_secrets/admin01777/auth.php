<?php

    session_start();
    include '../include/db_worker.php';

    if (isset($_SESSION['password_adm'])) {
        $passw = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_SESSION['password_adm']);

        if ($passw == Admin_Password()) {
        } else {
            header('Location: /admin01777/login');
        }
    } else {
        header('Location: /admin01777/login');
    }

?>