<?php  include 'model/prodotto.php'; ?>
<?php  include 'controller/prodottiCtrl.php'; ?>

<?php

$ctrl = new ProdottiCtrl();

$P1 = new Prodotto('Iphone', 1200);
$P2 = new Prodotto('Samsung', 500);
$P3 = new Prodotto('Motorola', 100);

$ctrl->addProdotto($P1);
$ctrl->addProdotto($P2);
$ctrl->addProdotto($P3);

if (isset($_GET['nomeProdotto'])){
    $nomeProdotto = $_GET['nomeProdotto'];
    $prezzoProdotto = $_GET['prezzoProdotto'];
    $prodotto_temp = new Prodotto($nomeProdotto, $prezzoProdotto);
    $ctrl->addProdotto($prodotto_temp);
}

$AllProdotti = $ctrl->getProdotti();

foreach($AllProdotti as $prodotto){ // prima la Lista(variabile) poi l'elemento con cui interiamo, visto che con PHP e all'incontrario
    echo $prodotto->nome . ' ' . $prodotto->prezzo . '<br>';
}

?>