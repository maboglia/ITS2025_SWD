<?php

namespace app\repos;

class Connection {

    private $conn = null;

    private function connect() {

        try {

            $dns = "mysql:host=localhost:3306;dbname=esercitazioni";
            $user = "ITS_2025";
            $password = "jiacheng.hu";

            $this->conn = new \PDO($dns, $user, $password);

            // echo "Connected to the database!";

        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();

        }
    }

    public function getConnection() {

        if ($this->conn == null) {
            $this->connect();
        }

        return $this->conn;
        
    }
}