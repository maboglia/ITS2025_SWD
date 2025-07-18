<?php

namespace app\services;

use app\repos\ProdottoRepo;

class ProdottoService {
    
    private $repo;

    public function __construct() {
        $this->repo = new ProdottoRepo();
    }

    public function getProdotti() {

        return $this->repo->getProducts();

    }
    
}