<?php
    class HTTPError{
        static function error_401(){
            
        }
        static function error_404(){
            header("");
            echo "<h1>Page Not Found</h1>";
            exit;
        }
    }
?>