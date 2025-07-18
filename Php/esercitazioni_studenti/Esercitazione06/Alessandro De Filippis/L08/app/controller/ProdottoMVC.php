<?php

namespace app\controller;

use app\services\ProdottoService;

class ProdottoMVC{

    private $service = new ProdottoService();


    //private $service;
    //public function __construct(){
    //    $this->service = new ProdottoService();
    //}
    


    public function index(){
    //chiedo al service i prodotti
    $prodotti = $this->service->getProdotti();
    //mostro una view con tutti i prodotti
    require '..app/view/prodotti.php';
    require '..app/view/footer.php';
    require '..app/view/header.php';
    }

    public function home(){
    //mostro una view con tutti i prodotti
    require '..app/view/header.php';
    echo "<h1>Home page</h1>";
    require '..app/view/footer.php';

    }
}