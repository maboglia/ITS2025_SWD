<?php 

class  AutomobileDAO {

    private $database;

    public function __construct() {
        $conn = new Connessione();
        $this->database = $conn->getDatabase();
    }
    public function getAutomobili() {
        $automobili = [];

        $richiesta = "SELECT * FROM automobili";
        $resultSet = $this->database->query($richiesta);

        while($record = $resultSet->fetch()) {
            $automobili[] = $auto;
        }
        // array_push($automobili, $auto);

        return $automobili;
    }
}