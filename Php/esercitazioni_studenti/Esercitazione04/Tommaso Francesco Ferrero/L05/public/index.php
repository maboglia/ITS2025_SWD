<?php require "../src/config/config.php";?>
<?php require "../src/controller/PokemonMVC.php";?>

<?php

    $ctrl = new PokemonMVC();

    $ctrl->getPokemon();

?>