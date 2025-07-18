<?php
class Connessione{
    private $database;

    public function __construct()
    {
        try{
            $this->database=new PDO("mysql:host=".HOST.";dbname=esercitazioni",USER,PASS);
        }catch(PDOException $eccezione){
            echo "Non connesso al DB: ".$eccezione->getMessage();
        }
    }
    public function getDatabase(){
        return $this->database;
    }
}