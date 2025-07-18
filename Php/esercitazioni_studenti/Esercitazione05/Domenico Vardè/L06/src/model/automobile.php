<?php

class Automobile{

    private $id;
    private $marca;
    private $modello;
    private $cilindrata;
    private $posti;
    private $prezzo;

    public function __get($nomedellaproprietachevuoiottenere)
    {
        return $this->$nomedellaproprietachevuoiottenere;
    }
    public function __set($nome , $valore)
    {
        $this->$nome = $valore;
    }
}
