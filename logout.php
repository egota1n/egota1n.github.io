<?php

    session_start();

    $_SESSION['username'] = '';
    $_SESSION['auth-key'] = '';
    $_SESSION['sec-code'] = '';

    header('Location: /');

?>