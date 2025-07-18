<?php

namespace app\service;

use app\repos\ProdottoRepo;

class ProdottoService{

    private $repo;

    function __construct() {
        // Inietto il repository
        $this->repo = new ProdottoRepo();
    }
    
        
    

    public function getProdotti(){
        return $this->repo->getProducts();
    }
}