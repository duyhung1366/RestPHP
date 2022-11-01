<?php
    class Database { 
        // Db params 
        private $host = 'localhost'; 
        private $db_name = 'myserver'; 
        private $username = 'root';
        private $password = '123456'; 
        private $conn ; 

        // Db connect 
        public function connect() {
            $this->conn = null ; 

            try {
                //code...
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password); 
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            } catch (PDOException $e) {
                echo 'Connection Error :' . $e->getMessage();
            }
            return $this->conn;
        }
    }
