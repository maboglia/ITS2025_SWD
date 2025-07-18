<?php

// Enabling type control
    declare(strict_types = 1); 

    include "model/Product.php";
    include "controller/ProductController.php";
    include "dao/ProductDao.php";

    // $p1 = new Product();
    
    // $p1->id = 1;
    // $p1->name = "Smartphone";
    // $p1->category = "IT";
    // $p1->price = 500;
    // $p1->stock = 50;
    // var_dump($p1);
    $controller = new ProductController();
    $dao = new ProductDao();

    $productsFile = file("data/products.csv");

    foreach ($productsFile as $line) {
        $line = explode(',', $line);
        // var_dump($line);
        $p = new Product();

        $p->id = $line[0];
        $p->name = $line[1];
        $p->category = $line[2];
        $p->price = $line[3];
        $p->stock = $line[4];

        $controller->addProduct($p);
    }

    // mime type
    header("Content-Type: application/json");

    echo json_encode(array_map(fn($product) => $product->__serialize(), $controller->getProducts()));


    // echo json_encode(array_map(fn($p) => $p.__serialize(), $controller->getProducts()));

    // var_dump($products);

    // $controller->addProduct($p1);

    // echo $dao->add($p1) . "\n";
    // echo $dao->all();

    // var_dump($controller->getProducts());

    // echo "<h1>" . $p1->name . "</h1>"; // MVC approach

    // echo json_encode($p1); // REST approach

    // $name = "Simon";
    
    // // constant variable initialization
    // define("COURSE", "Software Developer");

    // function procedure() {
    //     echo COURSE . "\n";
    //     // echo $name; // error: not in scope
    //     global $name; // binding a global variable to a local scope
    //     $name = "Simon Hu"; 
    //     echo $name . "\n"; 
    //     echo date("d-m-Y h:i:s") . "\n";
    // }

    // function func(int $a, int $b): int {
    //     return $a + $b;
    // }

    // function test($a, $b = 2) {
    //     return $a * $b;
    // }

    // procedure();

    // echo "<pre>\n";
    // var_dump($name);
    // print_r($name);
    // echo "\n";
    // var_dump([1, 2, 3]);
    // print_r([1, 2, 3]);
    // echo "</pre>" . "\n";

    // echo func(1, 2);
    // echo "\n";
    // echo test(1);

?>