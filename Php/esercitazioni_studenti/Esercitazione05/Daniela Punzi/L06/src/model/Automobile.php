<?php

// se scrivi questo puoi gestire i tipi come in java --> declare(strict_types = 1);

class Automobile{

    private $id;

    private $marca;

    private $modello;

    private $cilindrata;

    private $posti;

    private $prezzo;


    public function __get($nomeDellaProprietàCheVuoiOttenere){
        return $this->$nomeDellaProprietàCheVuoiOttenere;
    }

    public function __set($nome, $valore){
        $this->$nome = $valore;
    }

}