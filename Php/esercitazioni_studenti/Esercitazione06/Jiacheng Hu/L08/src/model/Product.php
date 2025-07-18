<?php

// package
namespace app\model;

class Product {
    
    private $id;
    private $name;
    private $category;
    private $source;
    private $priceKg;
    private $availability;

    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value) {
        $this->$property = $value;
    }

    public function priceWithVAT() {
        return $this->priceKg * 1.22;
    }
}