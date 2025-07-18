<?php

namespace app\controller;

use app\service\ProdottoService;

class ProdottoMVC {

    private $service;


    public function __construct() {
        $this-> service = new ProdottoService();
    }


    
    public function index () {
        //chiedo al service i prodotti
        $prodotti = $this->service->getProdotti();
        //mostro una view con i prodotti
        require '../src/view/header.php';
        require '../src/view/prodotti.php';
        require '../src/view/footer.php';
    }

    public function home() {
        $prodotti = $this->service->getProdotti();
        //mostro una src/view di benvenuto
        require '../src/view/header.php';
        echo '<h1>Home Page</h1>';
        require '../src/view/footer.php';
    }
}