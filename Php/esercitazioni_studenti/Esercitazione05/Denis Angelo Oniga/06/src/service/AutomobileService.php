<?php

class AutosaloneService {
    private $dao;
    
    public function __construct(){
        $this->dao = new AutomobioleDAO;
    }

    public function getAutomobili(){
        return $this->dao->getAutomobili();
    }



}
?>