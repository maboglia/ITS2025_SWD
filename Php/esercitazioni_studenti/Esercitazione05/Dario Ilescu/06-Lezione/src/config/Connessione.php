<?php

class Connessione {

    private $database;

    public function __construct(){
        try {
            $this->database = new PDO("mysql:host=".HOST.";dbname=esercitazioni",USER,PASS);
        }
        catch(PDOException $e){
            echo "Non connesso al DB: " . $e->getMessage();
        }
    }

    public function getDatabase(){

        return $this->database;

    }

}