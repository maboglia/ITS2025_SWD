<?php

namespace app\model;

class Prodotto {
    private $id;
    private $nome;
    private $categoria;
    private $origine;
    private $prezzo_kg;
    private $disponibilita;

    public function __get($name):mixed {
        
        return $this->$name;
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPrezzo() {
        return $this->prezzo_kg;
    }

    public function prezzoIvato() {
        // Calcola il prezzo con IVA (supponiamo 22%)
        return $this->prezzo_kg * 1.22;
    }
}