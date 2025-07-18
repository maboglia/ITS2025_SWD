<?php

class Connessione{

    private $conn;

    private function connetti() {
        try {   
            $this->conn=new PDO(HOST,USER,PASS);
        } catch (PDOEXCEPTION $e) {
            echo "Connessione non risucita ".$e->getMessage();
        }

    }

    public function getConnessione() {

        if(!isset($this->conn)) 
        $this->connetti();    
        
        return $this->conn;
    }

}