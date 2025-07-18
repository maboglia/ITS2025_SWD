<?php

    // PDO (PHP Data Objects)
    class Connection { 

        private $conn;

        private function connect() {
            try {
                $this->conn = new PDO("mysql:host=" . HOST . ";dbname=automobili_web", USER, PASSWORD);
            } catch (PDOException $e) {
                echo "Connection failed" . $e->getMessage();
            }
        }

        public function getConnection() {
            if (!isset($this->conn)) {
                $this->connect();
            }

            return $this->conn;
        }
    }

?>