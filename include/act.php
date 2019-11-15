<?php

    session_start();
    include 'db_worker.php';

    if (isset($_POST['act']) && ($_POST['act'] == 'reg' || $_POST['act'] == 'log') && isset($_POST['user']) && isset($_POST['passw'])) {
        if ($_POST['act'] == "reg" && isset($_POST['rpassw'])) {
            $login = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST['user']);
            $passw = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST['passw']);
            $rpassw = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST['rpassw']);

            if ($passw == $rpassw) {
                if (strlen($login) < 5 || strlen($passw) < 6 ) {
                    echo "Error. Check credentials len.";
                    die;
                }     
            } else {
                echo "Error. Passwords don`t match.";
                die;
            }

            if (Check_Already($login) == 1) {
                echo "Error. Select another login.";
                die;
            }

            Reg_User($login, $passw);

            echo "Successfull";

        } elseif ($_POST['act'] == "log") {
            $login = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST['user']);
            $passw = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST['passw']);

            if (strlen($login) < 5 || strlen($passw) < 5 ) {
                echo "Error. Check credentials.";
                die;
            }

            if (Check_Login($login, $passw) == 1) {
                $_SESSION['username'] = $login;
                $_SESSION['auth-key'] = sha1($passw);
                $_SESSION['sec-code'] = 'e%*56Kfw}0BeBnj@I{lm3MK##$dp9?Qp}vImZgS5';
                
                echo "Successfull";
            } else {
                echo "Error. Bad credentials.";
            }
        } else {
            echo "Error. Check fields.";
        }
    } else {
        echo "Error. Bad request.";
    }

?>