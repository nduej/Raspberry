<?php
    require_once 'widgets/Header.php';
    require_once 'widgets/Footer.php';
    require_once 'widgets/Nav.php';
    require_once 'router/routes.php';

    function App($db, $base_url){
        AppHeader($base_url);
        Nav();
        Routes();
        Footer();
    }
?>