<?php
    $integers = $_REQUEST['luvut'];
    
    // Make them array
    $integers = explode('|', $integers);

    // Used Google to get the functions
    $smallest = min($integers);
    $largest  = max($integers);

    echo "$smallest $largest";