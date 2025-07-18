<?php

namespace app\model;

class Prodotto {

    private $id;
    private $nome;
    private $categoria;
    private $origine;
    private $prezz_kg;
    private $disponibilita;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function prezzoIvato() {
        return $this->prezzo_kg * 1.22; // 22% IVA
    }




}