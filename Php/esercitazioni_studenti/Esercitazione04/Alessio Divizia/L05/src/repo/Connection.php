<?php

class Connection {

    private $conn;

    private function connect() {
    
        try {
            
            $this->conn = new PDO(HOST, USER, PASS); //PHP Database Object
            
            echo "Connesso";

        } catch (PDOException $e) {
            
            echo "Connection not avilable: ".$e->getMessage();

        }
    }

    public function getConnection() {  //Singtone pattern
        
        if (!isset($this->conn))
            $this->connect();
        
            return $this->conn;
    }

}