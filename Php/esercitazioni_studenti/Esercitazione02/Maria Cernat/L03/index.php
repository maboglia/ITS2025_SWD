<?php include 'model/prodotto.php';  ?>
<?php include 'controller/prodottiCtrl.php'; ?>

<?php

    $ctrl = new ProdottiCtrl();
    $p1 = new Prodotto (nome: 'Iphone', prezzo: 1200);
    $p2 = new Prodotto (nome: 'Huawey', prezzo: 200);
    $p3 = new Prodotto (nome: 'Samsung', prezzo: 400);

    $ctrl ->addProdotto(prodotto: $p1);
    $ctrl ->addProdotto(prodotto: $p2);
    $ctrl ->addProdotto(prodotto: $p3);

    if(isset($_GET ['nomeProdotto'])){

        $nome_prodotto = $_GET['nomeProdotto'];
        $prezzo_prodotto = $_GET['prezzoProdotto'];
        $prodotto_temp = new Prodotto(nome: $nome_prodotto, prezzo: $prezzo_prodotto);
        $ctrl ->addProdotto(prodotto: $prodotto_temp);

    }

    $tuttiProdotti = $ctrl -> getProdotti();

    foreach ($tuttiProdotti as $prodotto) {
        echo '-----------------';
        echo $prodotto -> nome . '<br>';
    }

?>