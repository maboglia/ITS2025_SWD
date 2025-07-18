<?php

namespace app\service;
use app\repos\ProdottoRepo;

class ProdottoService {

    private $repo;

    function __contruct() {
        // Inizializzo il repository dei prodotti
        $this->repo = new ProdottoRepo();
    }
    
    public function getProdotti(){
        return $this->repo->getProducts();
    }
}