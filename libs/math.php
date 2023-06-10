<?php
    class Math{
        static function acos(float|int $value){
            try{
                if($value > 0 || $value < 1){
                    $res = 0;

                    // do some arc cosine calculations
                    return $res;
                }
                return NAN;
            }catch(ValueError $error){
                return NAN;
            }
        }
        static function pow(int|float $value, int $power){
            $res = 1;

            for($i = 0; $i < $power; $i++){
                $res *= $value;
            }

            return $res;
        }
        static function square(int|float $value){
            return $value * $value;
        }

        static function sqrt(int|float $value){
            $res = $value;
            return $res;
        }
    }
?>