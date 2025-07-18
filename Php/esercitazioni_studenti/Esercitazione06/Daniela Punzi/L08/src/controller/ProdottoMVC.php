<?php

namespace app\controller;

use app\services\ProdottoServices;

class ProdottoMVC{

    private $services;

    public function __construct(){
        $this->services = new ProdottoServices();

    }

    public function index(){
        //chiedo al services i prodotti
        $prodotti = $this->services->getProdotti();

        //mostro una view con tutti i prodotti
        require '../src/view/header.php';
        require '../src/view/prodotti.php';
        require '../src/view/footer.php';
    }

    public function home(){
        require '../src/view/header.php';
        echo '<h1>Home page</h1>';
        require '../src/view/footer.php';
    }
}