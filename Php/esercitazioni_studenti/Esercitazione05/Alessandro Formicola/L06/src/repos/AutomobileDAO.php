<?php

class AutomobileDAO {

    private $database;

    public function __construct() {
        $conn = new Connection();
        $this -> database = $conn -> getConnection();
    }

    // metodo per ottenere tutte le auto dal database
    public function getAutomobili() {
        $Automobili = [];

        $request = "SELECT * FROM automobili";
        $resultSet = $this -> database -> query($request);
        $resultSet -> setFetchMode(PDO::FETCH_CLASS, 'Automobile');

        while ($auto = $resultSet -> fetch()) {
            $automobili[] = $auto;
        }
        return $automobili;
    
    }

}