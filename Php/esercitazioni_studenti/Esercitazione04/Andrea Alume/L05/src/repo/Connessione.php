<?php

class Connessione{

    private $conn;

    function connetti() {

        try{
            $this->conn = new PDO(HOST, USER, PASS);
        }catch (PDOException $e){
            echo "Connessione non riuscita" . $e->getMessage();
        }
    }

    public function getConnessione(){
        
        if (!isset($this->conn))
            $this->connetti();

        return $this->conn;
    }
}