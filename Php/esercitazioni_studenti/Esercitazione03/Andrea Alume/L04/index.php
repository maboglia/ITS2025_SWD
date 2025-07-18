<?php 
header("Content-Type: application/json"); // Fixed header content type


include "./Prodotti/prodotto.php"; 
include "./Prodotti/prodotti.php";
include "./Prodotti/ProdottoDao.php";


$prodotti = file("prodotti.csv");

$controller = new Prodotti;

foreach ($prodotti as $riga) {
    $pezzi = explode(",", $riga);

    $p1 = new Prodotto;
    $p1->id = (int)$pezzi[0];
    $p1->name = $pezzi[1];
    $p1->price = (float)$pezzi[3];
    $p1->giacenza = $pezzi[4]; 
    $p1->categoria = $pezzi[2];

    $controller->add($p1);

    $dao = new ProdottoDao;

}

?>