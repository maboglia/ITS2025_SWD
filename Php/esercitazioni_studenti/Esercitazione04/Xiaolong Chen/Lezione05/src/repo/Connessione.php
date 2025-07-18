<?php
class Connessione{
    private $conn;
    private function connetti(){
        try {
            $this->conn=new PDO(HOST,USER,PASS);//php database object
        } catch (PDOException $e) {
            echo"Connessione non riuscita ".$e->getMessage();
        }
    }
    public function getConnessione(){
        if (!isset($this->conn))
            $this->connetti();
        return $this->conn;
    }
}