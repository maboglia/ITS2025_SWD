<?php

    class ProductController {

        private array $list = [];

        public function addProduct($product) {
            $this->list[] = $product;
            // array_push($this->list, $product);
        }

        public function getProducts() {
            return $this->list;
        }

        public function getProductById($id) {
            foreach ($this->list as $product) {
                if ($product->id == $id) {
                    return $product;
                }
            }
        }
    }

?>