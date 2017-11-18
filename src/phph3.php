<?php
    $integer = $_REQUEST['luku'];

    // https://stackoverflow.com/a/7959256/6451184
    if($integer % 2 == 0) {
        echo "parillinen";
    }
    else {
        echo "pariton";
    }