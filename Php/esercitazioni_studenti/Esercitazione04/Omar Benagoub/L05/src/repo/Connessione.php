<?php

class Connessione{

    private $conn;

    private function connetti(){

        try{
            $this->conn = new PDO(HOST, USER, PASS); //php database object
        } catch (PDOException $e){
            echo "Connection failed" . $e->getMessage();
        }
       
        // la freccia e come dire this.conn 
    }
public function getConnessione() {
    if (!isset($this->conn)) 
        $this->connetti(); //se non e settata la connessione, la creo
    return $this->conn;
}
}

    