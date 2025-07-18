<?php include 'model/prodotto.php'; ?>
<?php include 'controller/prodottiCtrl.php'; ?>


<?php

    $ctrl = new ProdottiCtrl();

    $p1 = new Prodotto('IPhone', 1200);
    $p2 = new Prodotto('Huawey', 200);
    $p3 = new Prodotto('Samsung', 400);

    $ctrl->addProdotto($p1);
    $ctrl->addProdotto($p2);
    $ctrl->addProdotto($p3);

    $tuttiProdotti = $ctrl->getProdotti();

    foreach($tuttiProdotti as $prodotto){
        echo $prodotto . '<br>';
    }

?>
