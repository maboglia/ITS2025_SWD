<?php

class Automobile {
    private $id;
    private $marca;
    private $modello;   
    private $cilindrata;
    private $posti;
    private $prezzo;

    public function __get($nomeDellaProprietaCheVuoiOttenere) {
        return $this->$nomeDellaProprietaCheVuoiOttenere;
    }


    public function __set($nome, $valore) {
        $this->$nome = $valore;
    }

}
