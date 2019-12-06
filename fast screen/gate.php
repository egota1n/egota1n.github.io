<?php

    include 'include/db_worker.php';

    if (DB_Execute("SELECT COUNT(`ip`) FROM `dw_ip` WHERE `ip` = '".$_SERVER['REMOTE_ADDR']."'")[0] == 0) {
        DB_Execute("INSERT INTO `dw_ip` (`ip`) VALUES ('".$_SERVER['REMOTE_ADDR']."')", FALSE, FALSE);
        $temp = DB_Execute("SELECT `downloads` FROM `infos`")[0];
        $temp = $temp + 1;
        DB_Execute("UPDATE `infos` SET `downloads` = $temp", FALSE, FALSE);
    }

?>