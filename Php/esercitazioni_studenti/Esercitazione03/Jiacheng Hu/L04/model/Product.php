<?php

    class Product {

        private int $id;
        private string $name;
        private string $category;
        private float $price;
        private int $stock;

        public function __construct() {
            // echo "Product constructed\n";
        }

        public function __get($property) {
            return $this->$property;
        }

        public function __set($property, $value) {
            $this->$property = $value;
        }

        public function __serialize() {
            return get_object_vars($this);
        }

    }

?>