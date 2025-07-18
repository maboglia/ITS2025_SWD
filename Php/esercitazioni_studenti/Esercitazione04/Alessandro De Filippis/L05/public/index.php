
<?// require "../src/config/config.php"; ?>

<?// require VIEW."header.php"; ?>

<?// require VIEW."tabella.php"; ?>

<?// require VIEW."footer.php"; ?>



<?php require "../src/config/config.php";?>

<?php require "../src/service/PokemonService.php";?>


<?php
    $ctrller = new PokemonMVC();
    $ctrller->getPokemon();
?>