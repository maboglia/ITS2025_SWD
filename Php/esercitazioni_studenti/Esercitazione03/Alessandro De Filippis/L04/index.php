<?php

declare(strict_types = 1);

include 'model/prodotto.php';
include 'model/prodotti.php';

$p1 = new Prodotto;

$p1-> id = 1;
$p1-> nome = "smartphone   ";
$p1-> prezzo = 1200.00;
$p1-> giacenza = 10;
$p1-> categoria = "elettronica";

$controller = new Prodotti
$controller->add($p1);

$dao =new ProdottoDao

$prodotti = file("prodotti.csv");
//var_dump($prodotti);

foreach ($prodotti as $riga){

    $prezzi = explode(";", $riga);
    $p1 = new Prodotto;

    $p1-> id = $prezzi[0];
    $p1-> nome = $prezzi[1];
    $p1-> prezzo = (float)$prezzi[3];
    $p1-> giacenza = (int)$prezzi[4];
    $p1-> categoria = $prezzi[2];

    $controller->add($p1);
}

//mime type
header("Content-Type: application/json");

echo json_encode($controller->getProdotti());




?>