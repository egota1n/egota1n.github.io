<?php

    include 'auth.php';

    if (isset($_GET['what'])) {
        if ($_GET['what'] == 'hits') {
            $arr = DB_Execute('SELECT `ip` FROM `ht_ip`', TRUE, FALSE);

            while($rez = $arr->fetchArray()) {
                echo $rez[0].'<br>';
            }
        } else if ($_GET['what'] == 'downloads') {
            $arr = DB_Execute('SELECT `ip` FROM `dw_ip`', TRUE, FALSE);

            while($rez = $arr->fetchArray()) {
                echo $rez[0].'<br>';
            }
        } else {
            echo "What you need to see?<br><b>/see.php?what=hits</b> - show IP`s of visited users<br><b>/see.php?what=downloads</b> - show IP`s of downloaded users";
        }

    } else {
        echo "What you need to see?<br><b>/see.php?what=hits</b> - show IP`s of visited users<br><b>/see.php?what=downloads</b> - show IP`s of downloaded users";
    }

?>