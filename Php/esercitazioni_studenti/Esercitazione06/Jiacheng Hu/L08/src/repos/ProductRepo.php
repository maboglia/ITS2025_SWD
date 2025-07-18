<?php

namespace app\repos;

use app\model\Product;
use app\repos\Connection;

class ProductRepo {

    private $conn;

    public function __construct() {
        $conn = new Connection();
        $this->conn = $conn->getConnection();
    }

    public function getProducts() {
        $results = $this->conn->query("SELECT * FROM fruits_and_vegetables");

        $results->setFetchMode(\PDO::FETCH_CLASS, Product::class);

        return $results->fetchAll();
    }

}