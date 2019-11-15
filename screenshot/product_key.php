<?php

    include 'include/db_worker.php';

    if (isset($_GET['key'])) {

        $login = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_GET['key']);

        if (strlen($login) != 40) {
            echo "Bad";
            die;
        }

        $rez = DB_Execute("SELECT COUNT('username') FROM `users` WHERE `_key` = '$login'")[0];

        if ($rez == 1) {
            echo "Good";
        } else {
            echo "Bad";
        }
    }

?>