<?php
    abstract class RBModel{
        protected $conn;
        function __construct($db){
            $this->conn = $db;
        }
    }
?>