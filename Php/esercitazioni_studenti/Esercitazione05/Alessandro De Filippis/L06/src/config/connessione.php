<?php


class Connessione{



    private $database ;

    public function __construct(){
        try{
        $this->database =new PDO('mysql:host='.HOST.';dbname=esercitazioni', user, password);
        }catch(PDOException $e){
            echo 'Connessione fallita: '.$e->getMessage();
        }
    
    }

    public function getDatabase(){
        return $this->database;
    }



}