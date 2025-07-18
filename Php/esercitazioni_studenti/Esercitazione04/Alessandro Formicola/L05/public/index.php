<?php require "../src/config/config.php";?>
<?php require "../src/controller/PokemonMVC.php";?>

<?php
    $pokemonMVC = new PokemonMVC();
    $pokemonMVC-> getPokemon();

