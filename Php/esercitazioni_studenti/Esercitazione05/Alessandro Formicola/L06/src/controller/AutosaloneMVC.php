<?php
class AutosaloneMVC {

    private $service;

    public function __construct() {
        $this->service = new AutosaloneService();
    }

    public function index() {

    include VIEWS . 'header.php';
    $automobili = $this->service->getAutomobili();
    include VIEWS . 'table.php';
    include VIEWS . 'footer.php';
    }

    public function home() {

        include VIEWS . 'header.php';
        echo "<h1>". TITOLO . "</h1>";
        include VIEWS . 'footer.php';   
        }
}