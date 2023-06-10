<?php
    class Webshipper{

        static function ship(string $ftp_uri, int $port = 21, string $username = "", string $password = "", string $remote_folder = "", array $config = array()){
            $remote_path = $remote_folder;
            // folder path to upload
            $current_path  = getcwd();
            chdir("../");
            $local_path = getcwd();

            // $conn = ftp_connect($ftp_uri, $port) or die("Could not connect to $ftp_uri, check the URL that was provided.");
            // login to FTP Server
            // ftp_login($conn, $username, $password);
            // turn on passive transfer
            // ftp_pasv($conn, true);
            $conn = "";
            // loop through every file & folder in the current directory and run a reccursive function
            echo "<pre>";
                Webshipper::fileHandler($conn, $local_path);
            echo "</pre>";
        }

        static function fileHandler($conn, $path){
            $default_remote_path = "public_html";

            if(is_dir($path)){
                chdir($path);
                $folder_name = explode("\\", $path);
                print_r($folder_name[count($folder_name) - 1] . "<br>");
                // create a remote directory through FTP on the server
                // if(ftp_mkdir($conn, $folder_name)){
                   // upload current directory to ftp server
                    //    change current directory in FTP Server to the created directory
                    // ftp_chdir($conn, $default_remote_path);
                    $current_obj = scandir(getcwd());

                    array_shift($current_obj);
                    array_shift($current_obj);

                    foreach($current_obj as $file){
                        // if(ftp_put($conn, "public_html", $file)){
                        $new_path = $path . "\\" . $file;
                        Webshipper::fileHandler($conn, $new_path);
                        // }else{
                        //     print_r("Something went wrong wile uploading files to FTP Server.");
                        // }
                    } 
                // }
            }
        }
    }
?>