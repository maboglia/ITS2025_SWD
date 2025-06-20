<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    
    protected $articoli = [];
    protected $totale = 0;

    protected $fillable = ['totale'];

    public function addArticolo(Product $prodotto) {
        $this->articoli[] = $prodotto;
        $this->totale += $prodotto->prezzo;
    }

    public function getArticoli() {
        return $this->articoli;
    }

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

}
