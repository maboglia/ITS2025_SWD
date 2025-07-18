<?php

namespace app\controller;

use app\services\ProdottoService;

class ProdottoMVC {

    // private $service;

    public function __construct() {
        // Inizializzo il servizio dei prodotti
        $this->service = new ProdottoService();
    }



    public function index() {
        //chiedo al service i prodotti
        $prodotti = $this->service->getProdotti(); 
        //mostro una view con tutti i prodotti
        require '../src/view/header.php';
        require '../src/view/prodotti.php';
        require '../src/view/footer.php';
    }

    public function home() {
 
        require '../src/view/header.php';
        echo "<h1>Homepage</h1>";
        require '../src/view/footer.php';
    }
}