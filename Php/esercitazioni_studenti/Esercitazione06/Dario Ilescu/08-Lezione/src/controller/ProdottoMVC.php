<?php

namespace app\controller;

use app\service\ProdottoService;

class ProdottoMVC{

    private $service;

    public function __construct(){

        $this->service = new ProdottoService();

    }

    public function index() {
        
        //chiedo al service i prodotti 
        
        $prodotti = $this->service-> getProdotti();

        //mostro una view con tutti i prodotti

        require "../src/view/header.php";
        require "../src/view/prodotti.php";
        require "../src/view/footer.php";

    }

    public function home() {
        
        //chiedo al service i prodotti 

        //mostro una view con tutti i prodotti

        require "../src/view/header.php";
        echo "<h1>Home page</h1>";
        require "../src/view/footer.php";

    }

}