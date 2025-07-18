<?php

class AutosaloneService{

    private $dao;

    public function __construct()
    {
        $this->dao = new AutomobileDAO;
    }

    public function getAutomobili(){
        return $this->dao->getAutomobili();
    }


}



