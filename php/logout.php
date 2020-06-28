<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    
    setcookie(
        'login',
        "0",
        time() + 60 * 60 * 24 * 30,
        '/'
    );
    
    echo "Success";
?>