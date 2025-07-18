<?php

class AutosaloneMVC {

    private $service;


    public function __construct() {
        
        $this->service = new AutosaloneService();
    }

    
    
    //Costruzione della pagina in MVC
    public function index() {

        include VIEW . '/header.php';
        $automobili = $this->service->getAutomobili();
        include VIEW . '/table.php';
        include VIEW . '/footer.php';
    }

    //Default home page
    public function home() {

        include VIEW . '/header.php';
        echo "<h1>". TITOLO . "</h1>";
        include VIEW . '/footer.php';
    }

}