<?php 

class AutosaloneMVC {
    private $service;
    public function __construct() {
        $this->service = new AutosaloneService();

    }

    public function index() {
        include VIEW.'header.php';
        $automobili = $this->service->getAutomobili();
        include VIEW.'tabella.php';
        include VIEW.'footer.php';
    }

    public function home(){
        include VIEW.'header.php';
        echo"<h1>" . TITOLO . "</h1>";
        include  VIEW . 'footer.php';
    }
}