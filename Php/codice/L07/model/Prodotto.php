<?php

class Prodotto {

    private $id;
    private $nome;
    private $categoria;
    private $prezzo;
    private $giacenza;



    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __tostring(){
        return $this->nome . ': ' . $this->prezzo;
    }


}
