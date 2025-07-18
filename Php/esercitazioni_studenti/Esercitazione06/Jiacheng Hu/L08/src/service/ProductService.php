<?php

namespace app\service;

use app\repos\ProductRepo;

class ProductService {

    private $repo;

    public function __construct() {
        $this->repo = new ProductRepo();
    }

    public function getProducts() {
        return $this->repo->getProducts();
    }

}