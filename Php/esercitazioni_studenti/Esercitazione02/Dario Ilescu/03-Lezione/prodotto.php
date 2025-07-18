<?php

    class Prodotto{

        private $nome;

        private $prezzo;

        public function __construct($nome, $prezzo) {

            $this->nome = $nome;
            $this->prezzo = $prezzo;

        }

        public function __get($nome){

            return $this->$nome;

        }

        public function __set($name, $value){

            $this->name = $value;

        }

        public function __toString(){

            return $this->$nome.' '.$this->$prezzo;

        }


}
