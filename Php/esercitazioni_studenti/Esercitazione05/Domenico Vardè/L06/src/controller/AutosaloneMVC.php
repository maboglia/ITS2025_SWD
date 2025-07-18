<?php

class AutosaloneMVC{

    private $service;

    public function __construct()
    {
        $this->service = new AutosaloneService();
    }

    public function index()
    {
        $automobili = $this->service->getAutomobili();
        include VIEW . 'footer.php';
        include VIEW . 'header.php';
        include VIEW . 'tabella.php';
        
    }

    public function home()
    {
        
        
        include VIEW . 'footer.php';
        echo "<h1>". TITOLO ."</h1>";
        include VIEW . 'header.php';

    }



}