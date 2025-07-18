<?php

class Automobile{
    private $is;
    private $Marca;
    private $Modello;
    private $Cilindrata;
    private $Posti;
    private $Prezzo;

    public function __get($nome_della_propieta_che_vuoi_ottenere){
        return $this->$nome_della_propieta_che_vuoi_ottenere;
    }
    
    public function __set($nome, $valore){
        $this->$nome = $valore
    }










}



?>