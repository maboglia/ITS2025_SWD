<?php
class Prodotto{
    public $nome;
    public $prezzo;
    public function __construct($nome, $prezzo){//new Prodotto('IPhone');
        $this->nome=$nome;
        $this->prezzo=$prezzo;
    }
    public function __get($name){//magic methods
        return $this->$name;
    }
    public function __set($name,$value){
        $this->$name=$value;
    }
    public function __tostring(){
        return $this->nome.': '.$this->prezzo;
    }
}
?>