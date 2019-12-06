<?php

    include 'auth.php';

    if (isset($_POST['txid'])) {
        include 'functions.php';

        $txid = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST['txid']);

        if (strlen($txid) != 64) {
            echo "Bad lenght";
            die;
        } else if (DB_Execute("SELECT COUNT(`id`) FROM `txids` WHERE `txid` = '$txid'")[0] > 0) {
            echo "Already registered TXID.";
            die;
        }

        if (Check_Payment($txid)) {
            DB_Execute("update `users` SET `_key` = '".sha1($_SESSION['username'])."' WHERE `username` = '".$_SESSION['username']."'", FALSE, FALSE);
            DB_Execute("INSERT INTO `txids` (`txid`) VALUES ('$txid')", FALSE, FALSE);
            echo "Successfull";
        } else {
            echo "Not found";
        }
    }

?>