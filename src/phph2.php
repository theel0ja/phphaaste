<?php
    $username = $_REQUEST['tunnus'];
    $password = $_REQUEST['salasana'];
    if($username == 'admin' && $password == 'sala123') {
        echo "OK";
    } else {
        echo "VIRHE";
    }