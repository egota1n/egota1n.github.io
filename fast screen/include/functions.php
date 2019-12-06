<?php

    error_reporting(0);

    require_once 'db_worker.php';

    function Check_Payment($txid) {
        $temp = Get_BTC();

        $btc = $temp[0];
        $price = floatval($temp[1]);

        try {
            $massive = implode('', file("https://blockchain.info/rawtx/$txid"));
            $massive = json_decode($massive, true);
        
            for($i =0; $i != count($massive['out']); $i++)
                if($massive['out'][$i]['addr'] == $btc)
                    if($massive['out'][$i]['value'] >= $price*10**8)
                        return true;
        } catch(Exception $e) {
            return false;
        }
        
        return false;
    }

?>