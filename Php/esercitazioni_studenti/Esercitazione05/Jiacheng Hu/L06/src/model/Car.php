<?php

    class Car {

        private $id;
        private $brand;
        private $model;
        private $cc;
        private $seats;
        private $price;

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