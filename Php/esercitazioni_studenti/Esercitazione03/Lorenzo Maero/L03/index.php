<?php include 'model/prodotto.php' ?>
<?php include 'controller/prodottiCtrl.php' ?>

<?php

    $ctrl = new prodottiCtrl();

    $p1 = new Prodotto('IPhone', 1000);
    $p2 = new Prodotto('Samsung', 900);
    $p3 = new Prodotto('Xiaomi', 800);
    $p4 = new Prodotto('Huawei', 700);

    $ctrl->addProdotto($p1);
    $ctrl->addProdotto($p2);
    $ctrl->addProdotto($p3);
    $ctrl->addProdotto($p4);

    if (isset($_GET['nomeProdotto'])){

        $nome_prodotto = $_GET['nomeProdotto'];
        $prezzo_prodotto = $_GET['prezzoProdotto'];
        $prodotto_temp = new Prodotto($nome_prodotto, $prezzo_prodotto);
        $ctrl->addProdotto($prodotto_temp);
    }

    $tuttiProdotti =$ctrl->getProdotti();

    foreach($tuttiProdotti as $prodotto){
        echo $prodotto. '<br>';
    }
?>