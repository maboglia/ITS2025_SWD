<?php

class Connessione{
    private $database;

    public function __construct(){
        try{
            $this->database = new PDO('mysql:host='. HOST .';dbname=automobili',USER,PASS);            
        }catch(PDOException $eccezzione){
            echo "Non connesso al DB ".$eccezzione->getMessage();
        }
    }

    public function getDatabase(){
        return $this->database;        
    }
}