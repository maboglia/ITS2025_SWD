<?php

class Connessione{

    private $database;

    public function __construct(){
        try{
            $this->database = new PDO('mysql:host=' . HOST . ';dbname=automobili', USER, PASS);      //in PDO bisogna passare una stringa dsn. Mysql è il nome del mio host
        } catch (PDOException $eccezione){
            echo "Non connesso al DB: " . $eccezione->getMessage();
        }
    }
        

    public function getDatabase(){
        return $this->database;
    }

}