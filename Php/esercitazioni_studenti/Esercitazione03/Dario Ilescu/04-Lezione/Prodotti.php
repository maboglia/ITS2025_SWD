<?php

    class Prodotti{

        private $lista=[];

        public function add($prodotto){

            $this->lista[] = $prodotto; //array_push($this->lista, $prodotto) stessa cosa con meno caratteri (usa questa)

        }

        public function getProdotti(){

            return $this->lista;

        }

        public function getProdottiById($id){

            foreach($this->lista as $prodotto){

                if($prodotto->id == $id){

                    return $prodotto;

                }

            }

        }

    }

?>