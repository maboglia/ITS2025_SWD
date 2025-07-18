<?php

namespace app\Services;

use App\Repos\ProdottoRepo;

class ProdottoService{

    private $repo;
    function __construct(){
        $this->repo = new ProdottoRepo();
    }

    public function getProdotti(){
        return $this->repo->getProducts();
   
    }
}