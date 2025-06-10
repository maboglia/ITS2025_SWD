<?php

class Connessione {

    private $conn = null;

    private function connetti() {
        
        try {
            $dsn = 'mysql:host=localhost:3306;dbname=esercitazioni;';
            $user = 'ITS_2025';
            $pass = 'ITS_2025';


            $this->conn = new PDO($dsn, $user, $pass);
            //echo "sei connesso al db";



        } catch (PDOException $eccezione) {
            echo 'Non sei connesso!!! Si è verificata una eccezione';
            echo $eccezione->getMessage();
        }

    }

    public function getConnessione() {
        
        if ($this->conn == null)
            $this->connetti();

        return $this->conn;
    }





}




