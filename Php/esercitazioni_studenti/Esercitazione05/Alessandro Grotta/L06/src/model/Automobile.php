<?php

class Automobile{

    private $id;
    private $marca;
    private $modello;
    private $cilindrata;
    private $posti;
    private $prezzo;

    public function __get($nomeProprietaDaOttenere): mixed{

        return $this->$nomeProprietaDaOttenere;
    }

    public function __set($nome, $valore):void{
        $this->$nome = $valore;

    }




}