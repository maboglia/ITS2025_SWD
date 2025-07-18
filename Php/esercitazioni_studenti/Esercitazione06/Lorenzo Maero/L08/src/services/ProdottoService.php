<?php 

namespace app\services;

use app\repos\ProdottoRepo;

class ProdottoService {

    private $repo;

    public function __construct() {
        // Inizializzo il repository ProdottoRepo
        $this->repo = new ProdottoRepo();
    }


    public function getProdotti() {
        return $this->repo->getProducts();
    }
}