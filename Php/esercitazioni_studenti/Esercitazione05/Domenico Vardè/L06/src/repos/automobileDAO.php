<?php

class AutomobileDAO{

    private $database;

    public function __construct()
    {
        $conn = new Connessione();
        $this->database = $conn->getDatabase();
    }

    public function getAutomobili(){

        $automobili = [];

        $richiesta = "SELECT * FROM automobili";
        $resultset= $this->database->query($richiesta);
        $resultset->setFetchMode(PDO::FETCH_CLASS, 'Automobile');

        while($auto = $resultset->fetch()){
            $automobili[] = $auto;
        }

        $auto= new Automobile();
        $auto->id =1;
        $auto->marca = 'ferrari';
        $auto->modello = 'gto';
        $auto->cilindrata = 6000;
        $auto->posti = 2;
        $auto->prezzo = 25000000;

        $automobili[] = $auto;

        return $automobili;
    }
 
}