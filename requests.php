<?php

class Request
{
    public static function get(string $url, array $query = [], array $headers = [], array $options = [])
    {
        // Initialize a cURL session
        $ch = curl_init();

        // Construct the URL with query parameters
        if (!empty($query)) {
            $url .= '?' . http_build_query($query);
        }

        // Set the URL for the cURL request
        curl_setopt($ch, CURLOPT_URL, $url);

        // Set the option to return the response as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Set custom headers if provided
        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        // Set additional cURL options if provided
        if (!empty($options)) {
            foreach ($options as $option => $value) {
                curl_setopt($ch, $option, $value);
            }
        }

        // Execute the cURL request and store the response in $response
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
            return false;
        }

        // Close the cURL session
        curl_close($ch);

        // Return the response
        return $response;
    }


}