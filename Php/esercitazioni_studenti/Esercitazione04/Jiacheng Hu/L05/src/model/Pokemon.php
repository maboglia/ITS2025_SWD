<?php

    class Pokemon {

        private $id;
        private $name;
        private $type1;
        private $type2;
        private $generation;
        private $legendary;

        public function __get($property) {
            return $this->$property;
        }

        public function __set($property, $value) {
            $this->$property = $value;
        }

        public function getImage() {
            return "https://img.pokemondb.net/sprites/home/normal/2x/" . strtolower($this->name) . ".jpg";
        }

    }
?>