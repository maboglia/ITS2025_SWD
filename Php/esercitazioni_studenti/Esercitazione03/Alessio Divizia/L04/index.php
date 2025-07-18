<?php
// declare(strict_types = 1); // Abilita la tipizzazione

include "./Prodotto.php";
include "./Prodotti.php";
include "./ProdottoDao.php";

$controller = new Prodotti;

// $controller->add($p1);
// var_dump($controller->getprodotti());

// echo "<h1>".$p1->nome."</h1>";

// echo json_encode($p1);

// $dao = new ProdottoDao;

// echo $dao->salvaProdotto($p1);
// echo $dao->dammiProdotto();

$prodotti = file("prodotti.csv"); // Lettura del file e lo salva in un arraydi righe

// var_dump($prodotti);

foreach($prodotti as $riga){
    $pezzi = explode(",", $riga);

    $p1 = new Prodotto;

    $p1->id = $pezzi[0];
    $p1->nome = $pezzi[1];
    $p1->categoria = $pezzi[2];
    $p1->prezzo = $pezzi[3];
    $p1->giacenza = $pezzi[4];

    $controller->add($p1);
}


// Tipi MIME(Multipurpose Internet Mail Extensions) identifica il formato di un file o messaggio
header("Content-type: application/json");

echo json_encode($controller->getProdotti());



/*
$nome = "Alessio";

define("CORSO","Software Developer");

function procedura(){
    echo CORSO;
    global $nome;
    $nome = "Alessio Divizia";
    echo $nome;
    echo date("d-m-Y h:i:s");
}

function funzione(int $a, int $b):int{
    return $a + $b;
}

function prova($a, $b = 2){
    return $a * $b;
}

echo "<pre>";

var_dump($nome);
print_r($nome);

echo "</pre>";

// procedura();

echo funzione(7,8);

echo prova(7,8);
*/
?>