<?php

namespace app\services;

use app\repos\ProdottoRepo;

class ProdottoServices{

    private $repo;

    function __construct()
    {
        $this->repo = new ProdottoRepo();
    }

    public function getProdotti(){
        return $this->repo->getProducts();
    }
}