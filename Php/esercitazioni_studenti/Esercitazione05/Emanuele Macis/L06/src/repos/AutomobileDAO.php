<?php

class AutomobileDAO {

    private $database;

    public function __construct(){
        $conn = new Connessione();
        $this->database = $conn->getDatabase();
    }

    public function getAutomobili(){
        $automobili =[];

        $richiesta = "SELECT * FROM automobili";
        $resultSet = $this->database->query($richiesta);

        $resultSet->setFetchMode(PDO::FETCH_CLASS,"Automobile");

        while($record = $resultSet->fetch()){
        $auto = new Automobile();
        $auto->id = $reco;
        $auto->marca = 'Ferrari';
        $auto->modello = 'GTO';
        $auto->cilindrata = 6000;
        $auto->posti = 2;
        $auto->prezzo = 2500000;

        $automobili[] = $auto;
    }
        //array_push($automobili, $auto);

        return $automobili;
    }
}