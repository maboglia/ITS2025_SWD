<?php 

namespace app\controller;

use app\services\ProdottoService;

class ProdottoMVC {

    private $service;

    public function __construct() {
        //Inizializzo il servizio ProdottoService
        $this->service = new ProdottoService();
    }

    public function index() {
        //Si richiede al ProdottoService di recuperare i prodotti
        $prodotti = $this->service->getProdotti();
        //Mostro una vista con i prodotti
        require '../src/view/header.php';
        require '../src/view/prodotti.php';
        require '../src/view/footer.php';
    }

    public function home() {
        $prodotti = $this->service->getProdotti();

        //Mostro una vista di benvenuto
        require '../src/view/header.php';
        echo "<h1>Home Page</h1>";
        require '../src/view/footer.php';
    }
}