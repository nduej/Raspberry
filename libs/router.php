<?php
    require_once "./utils/errors.php";
    class Router{
        // This Method sets the default route
        static function baseRoute($callback){
            $endpoint = $_SERVER["REQUEST_URI"];

            if($endpoint == "/"){
                $callback();
                return;
            }
        }

        static function createRoute(string $route, $callback){
            $endpoint = $_SERVER["REQUEST_URI"];

            if($endpoint == $route){
                $callback($_SERVER);
            }
        }

        static function end(){
            echo "Page Not Found";
        }
    }

?>