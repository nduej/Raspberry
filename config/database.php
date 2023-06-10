<?php
    class Database{
        private $host = "localhost"; // Enter Hostname or Host IP
        private $db_name = ""; // Specify your Database Name on MySQL
        private $username = "root"; // User Credentials, MySQL username
        private $password = ""; // User Credentials, Specify MySQL password, if required to access database
        public $conn;

        // Connects to database
        function getConnection(){
            $this->conn = null;

            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            }
            catch(PDOException $e){
                echo "Connection Error: Unable to connect to Database, " . $e->getMessage();
            }

            return $this->conn;
        }
    }
?>