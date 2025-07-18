<?php

class AutomobileDAO{

    private $database;

    public function __construct(){
        $connessione = new Connessione();
        $this->database = $connessione->getDatabase();
    }
    
    public function getAutomobili(){
        $automobili=[];

        $richiesta ="SELECT * FROM automobili";
        $resultSet = $this->database->query($richiesta);

        $resultSet->setFetchMode(PDO::FETCH_CLASS, 'Automobile');

        while($record = $resultSet->fetch()){
            $automobili[] = $record;
        }
    
        //$auto = new Automobile();
        //$auto->id =1;
        //$auto->marca = 'Ferrari';
        //$auto->modello = 'GTO';
        //$auto->cilindrata = 6000;
        //$auto->posti = 2;
        //$auto->prezzo = 2500000;

        //$automobili[] = $auto;
        //array_push($automobili,$auto);
    
        return $automobili;
    }

}