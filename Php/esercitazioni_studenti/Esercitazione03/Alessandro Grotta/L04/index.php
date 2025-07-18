<?php
//declare(strict_types = 1);

include "./Prodotto.php";
include "./Prodotti.php";
include "./ProdottoDao.php";

$controller = new Prodotti;

$prodotti = file("prodotti.csv");

foreach($prodotti as $riga){
    $pezzi = explode(",", $riga);
    $p1 = new Prodotto;
    $p1->id = $pezzi[0];
    $p1->nome = $pezzi[1];
    $p1->categoria = $pezzi[2];
    $p1->prezzo = $pezzi[3];
    $p1->giacenza = (int)$pezzi[4];

    //$controller->add($p1);
}

header('Content-type: application/json');

echo json_encode($controller->getProdotti());
