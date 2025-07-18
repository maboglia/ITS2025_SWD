<?php include "model/product.php" ?>
<?php include "controller/productsCtrl.php" ?>

<?php

    $ctrl = new ProductsCtrl();

    $p1 = new Product("iPhone", 1200);
    $p2 = new Product("Huawei", 200);
    $p3 = new Product("Samsung", 400);

    $ctrl->addProduct($p1);
    $ctrl->addProduct($p2);
    $ctrl->addProduct($p3);

    if (isset($_GET['nameProduct'])) {

        $productName = $_GET['nameProduct'];
        $productPrice = $_GET['priceProduct'];
        $tempProduct = new Product($productName, $productPrice);
        $ctrl->addProduct($tempProduct);
    }

    $allProducts = $ctrl->getProducts();

    foreach ($allProducts as $product) {
        echo $product . "<br>";
    }

?>
