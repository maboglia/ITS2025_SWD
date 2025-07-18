<?php
    class Product {

        private $name;
        private $price;

        // Constructor method
        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }

        // public function get_name() {
        //     return $name;
        // }

        // public function gen_price() {
        //     return $price;
        // }

        // Magic method N.B. double underscore before the name
        public function __get($property_name) {
            return $this->$property_name;
        }

        public function __set($property_name, $value) {
            $this->$property_name = $value;
        }

        public function __tostring() {
            return $this->name . ": €" . $this->price;
        }

    }

?>