<?php

    function DB_Execute($what, $multi=FALSE, $with=TRUE) {

        $db_worker = new SQLite3(__DIR__.'/Tm85j7YzTBdhMKcc.db');
        $rez = $db_worker->query($what);

        if ($multi) {
            return $rez;
        } else if ($with) {
            $query = $rez->fetchArray();

            return $query;
        }
    }

    function Admin_Password() {
        return DB_Execute("SELECT `password` FROM `infos`")[0];
    }

    function Get_BTC() {
        return DB_Execute("SELECT `btc`, `price` FROM `infos`");
    }

    function Get_Info($user) {
        return DB_Execute("SELECT `_key`, `_date` FROM `users` WHERE `username` = '$user'");
    }

    function Reg_User($user, $pass) {

        $date = date("Y-m-d H:i:s");
        $hashed = sha1($pass);
        $ip = $_SERVER['REMOTE_ADDR'];

        DB_Execute("INSERT INTO `users` (`username`, `password`, `u_password`, `_key`, `ip`, `_date`) VALUES ('$user', '$hashed', '$pass', 'null', '$ip', '$date')", FALSE, FALSE);
    }

    function Check_Already($user) {
        return DB_Execute("SELECT COUNT('u_password') FROM `users` WHERE `username` = '$user'")[0];
    }

    function Check_Login($user, $passw, $normal=True) {

        if ($normal) {
            $_1 = 'password';
            $_2 = 'u_password';
        } else {
            $_1 = 'u_password';
            $_2 = 'password';
        }

        return DB_Execute("SELECT COUNT('$_1') FROM `users` WHERE `username` = '$user' AND `$_2` = '$passw'")[0];
    }

?>