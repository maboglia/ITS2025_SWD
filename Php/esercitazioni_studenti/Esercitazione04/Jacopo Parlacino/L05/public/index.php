<?php require "../src/config/config.php"; ?> <!-- from import -->
<?php require "../src/controller/PokemonMVC.php"; ?> <!-- from import -->


<?php
    $ctrl = new PokemonMVC(); //creo un oggetto di tipo pokemonDAO
    $ctrl->getPokemon(); //richiamo il metodo getAllPokemon della classe pokemonDAO
