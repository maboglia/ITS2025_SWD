<?php
class Connection {
    private $conn;

    function connectionDB() {
        try {
            $this->conn = new PDO(HOST, USER, PASS);
        } catch (PDOException $e) { 
            echo "Errore di connessione: " . $e->getMessage();
        }
    }

    public function getConnection() {
        if (!isset($this->conn)) {
            $this->connectionDB();
        }
        return $this->conn;
    }
}