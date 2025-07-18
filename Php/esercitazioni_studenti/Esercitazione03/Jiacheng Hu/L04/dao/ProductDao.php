<?php

    class ProductDao {

        public function add($product) {
            $query = "INSERT INTO products (name, category, price, stock) VALUES " .
                     "('$product->name', '$product->category', $product->price, $product->stock);";

            return $query;
        }

        public function all() {
            return "SELECT * FROM products";
        }

    }

?>