<?php include 'model/prodotto.php'; ?>
<?php include 'controller/prodottiCtrl.php'; ?>

<?php

    $ctrl = new ProdottiCtrl();

    $p1 = new Prodotto('Iphone',1200);
    $p1 = new Prodotto('Huawei',200);
    $p1 = new Prodotto('Samsung',400);

    $ctrl->addProdotto($p1);
    $ctrl->addProdotto($p2);
    $ctrl->addProdotto($p3);

    if (isset($_GET['nomeProdotto'])){

        $nome_prodotto = $_GET['nomeProdtto'];
        $prezzo_prodotto = $_GET['prezzoProdtto'];
        $prodotto_temp = new Prodotto($nome_prodotto, $prezzo_prodotto);
        $ctrl->addProdotto($prodotto_temp);

    }

    $tuttiProdotti = $ctrl->getProdotti();

    foreach ($tuttiProdotti as $prodotto){
        echo $prodotto . "<br>";
    }

?>