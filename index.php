<?php
    require "config/core.php";
    require "config/database.php";
    require "App.php";

    // initializing Database Object
    $database = new Database();
    $db = $database->getConnection();

    // Executes the app & Obstrufucate HTML data
    ob_start(App($db, $base_url));
?>