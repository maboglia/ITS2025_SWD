<?php

class AutosaloneMVC {

    private $service;

    public function __construct() {
        $this->service= new AutosaloneService();
    }

    public function index() {

        include VIEW.'header.php';
        $automobili=$this->service->getAutomobili();
        include VIEW.'tabella.php';
        include VIEW.'footer.php';
    }


    public function home() {

        include VIEW.'header.php';
        echo "<h1>" . TITOLO . "</h1>";
        echo "<h1>Benvenuto nel nostro Autosalone</h1>";
        echo "<p>Qui puoi trovare le migliori automobili in circolazione</p>";
        echo "<p>Per visualizzare il nostro catalogo, clicca sul link in alto</p>";
        include VIEW.'footer.php';
    }



}
