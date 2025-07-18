<?php
class AutosaloneService {
    
    private $DAO;

    public function __construct() {
        $this->DAO = new AutomobileDAO;
    }

    public function getAutomobili() {
        return $this->DAO->getAutomobili();
    }

}