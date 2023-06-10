<?php
    class Request{
        private $conn;
        
        static function get(string $url, array $query = [], array $headers = [], array $options = []){
            $conn = curl_init();
            
            curl_setopt($conn, CURLOPT_URL, $url);
            curl_setopt($conn, CURLOPT_RETURNTRANSFER, true);
            
            if(!empty($query)) {
                $query = http_build_query($query);
                curl_setopt($conn, CURLOPT_URL, $url . '?' . $query);
            }

            $response = curl_exec($conn);

            if($response === false){
                throw new Exception(curl_error(self::$conn));
            }
            curl_close($conn);
            return $response;
        }
    }
?>