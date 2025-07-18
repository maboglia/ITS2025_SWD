<?php

namespace app\controller;

use app\service\ProductService;

class ProductMVC {

    private $service;

    public function __construct() {
        $this->service = new ProductService();
    }

    public function home() {
        require "../src/view/header.php";
        echo "<h1>Homepage</h1>";
        require "../src/view/footer.php";
    }

    public function index() {
        $products = $this->service->getProducts();

        require "../src/view/header.php";
        require "../src/view/products.php";
        require "../src/view/footer.php";
    }

}