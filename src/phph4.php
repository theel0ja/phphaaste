<?php
    $integers = $_REQUEST['luvut'];

    // Make them array
    $integers = explode('|', $integers);

    $sum = 0;

    foreach($integers as $integer) {
        $sum += $integer;
    }
    
    echo $sum;