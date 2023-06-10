<?php
    class Numpy{
        static function dot(array $a, array $b){
            $product = 0;

            if(count($a) > count($b) || count($b) > count($a)){
                return;
            }

            if(count($a) == count($b)){
                for ($i = 0; $i < count($b); $i++) { 
                    $product += ($a[$i] * $b[$i]);
                }
            }

            return $product;
        }

        static function array(array $array){
            // return Self::array($array);
        }
    }
    
?>