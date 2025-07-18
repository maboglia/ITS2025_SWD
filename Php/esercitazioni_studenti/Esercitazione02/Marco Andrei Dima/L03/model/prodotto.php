<?php
class prodotto {

    private $nome;
    private $prezzo;
    public function __construct($nome, $prezzo) { //new prodotto(IPhone)
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
    public function __get($name) {  //magic methods
        return $this->$name;
    }

    public function __set($name, $value) { //magic methods
        $this->$name = $value;
    }

    public function __toString() { //magic methods
        return $this->nome . ": " . $this->prezzo;
    }

}
?>