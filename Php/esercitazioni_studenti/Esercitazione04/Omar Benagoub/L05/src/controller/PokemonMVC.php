<?php

    require "../src/service/PokemonService.php"; //importo il file di configurazione

    class PokemonMVC{
        private $service; 
        function __construct() {
            $this->service = new PokemonService(); //creo un oggetto di tipo pokemonDAO
        } 
        public function getPokemon() {
            include VIEW."header.php"; //includo l'header

            $allPokemon = $this->service->getAllPokemon(); //richiamo il metodo getAllPokemon della classe pokemonDAO
            include VIEW."tabella.php"; //includo la tabella
            include VIEW."footer.php"; //includo il footer
        }
    }