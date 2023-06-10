<?php
    require_once "libs/router.php";
    require_once "./pages/home.php";
    require_once "./pages/docs.php";

    function Routes(){
        // Route each endpoint to each pagae
        Router::baseRoute(function (){
            Home();
        });
        
        // create a new route
        Router::createRoute("/home", function (){
            Home();
        });

        Router::createRoute("/docs", function (){
            Docs();
        });

    }
?>