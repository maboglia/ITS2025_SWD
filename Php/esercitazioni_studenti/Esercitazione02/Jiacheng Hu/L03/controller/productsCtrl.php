<?php

    class ProductsCtrl {

        public $products = [];

        public function addProduct($product) {
            $this->products[] = $product; // declarative
            // array_push($products, $products); // functional
        }

        public function getProducts() {
            return $this->products;
        }
    }

?>