<?php

class Prodotto{ 

    private $nome; //sarà una delle proprietà del prodottto, cioè il nome

    private $prezzo;

    public function __construct($nome, $prezzo){//new Prodotto('IPhone');
        $this->nome = $nome; //viene usata -> perchè php aveva usato il . per concatenare
        $this->prezzo = $prezzo;

    }

    //in php puoi avere solo 2 metodi

    public function __get($nome){ //tutti quelli che iniziano con __ sono magic methods
        return $this->$name;
    }

    public function __set($name, $value){ 
        $this->$name = $value;
    }

    public function __tostring(){
        return $this->nome . ': ' .$this->prezzo;
    }
}