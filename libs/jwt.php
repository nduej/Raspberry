<?php
    class jwt{
        static string $token = '';

        private static function base64url_encode($data){
            return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
        }

        private static function base64url_decode($data){
            $data = str_replace(['-', '_'], ['+', '/'], $data);
            $mod4 = strlen($data) % 4;

            if($mod4) {
                $data .= substr('====', $mod4);
            }
            
            return base64_decode($data);
        }

        static function sign(array $payload, string $secret_key, array $expiry) : string{
            $header = array(
                'alg' => 'HS256',
                'typ' => 'JWT'
            );

            $encodedHeader = base64_encode(json_encode($header));
            $encodedPayload = base64_encode(json_encode($payload));
            $payload['exp'] = time() + $expiry['expires_in']; // Token expires in 1 hour
            
            $signature = hash_hmac('sha256', $encodedHeader . '.' . $encodedPayload, $secret_key, true);
            $encodedSignature = self::base64url_encode($signature);

            self::$token = $encodedHeader . "." . $encodedPayload . '.' . $encodedSignature;
            return self::$token;
        }

        static function verify(string $token, string $secret_key){
            $jwt_partition = explode('.', $token);

            if(count($jwt_partition) != 3){
                return false;
            }

            $encodedHeader = $jwt_partition[0];
            $encodedPayload = $jwt_partition[1];
            $encodedSignature = $jwt_partition[2];

            $header = json_decode(self::base64url_decode($encodedHeader), true);
            $payload = json_decode(self::base64url_decode($jwt_partition[1]), true);

            $signature = hash_hmac('sha256', $encodedHeader . '.'. $encodedPayload, $secret_key, true);
            $auth_signature = self::base64url_encode($signature);

            if($encodedSignature !== $auth_signature){
                // Invalid Signature
                return false;
            }

            if(isset($payload['exp']) && $payload['exp'] < time()){
                // Token has expired
                return false;
            }

            return true;
        }

    }
?>