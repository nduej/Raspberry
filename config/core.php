<?php
    // Ship The applicationto the developers host manager evertime thee page is refreshed
    // Webshipper()
    // Starts a New User Session
    if (preg_match('/index\.php/i', $_SERVER['REQUEST_URI'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
    
    session_start();
    $base_url = $_SERVER["HTTP_HOST"];
    $_SERVER['PHP_SELF'] = "HIDDEN_DATA";

?>  