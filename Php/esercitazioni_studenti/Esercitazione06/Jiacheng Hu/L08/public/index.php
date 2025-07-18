<?php

// require_once "../app/model/Product.php";
// require_once "../app/repos/Connection.php";
// require_once "../app/repos/ProductRepo.php";
// require_once "../app/service/ProductService.php";
// require_once "../app/controller/ProductMVC.php";

require_once "../vendor/autoload.php";

use app\controller\ProductMVC;

$page = $_GET["page"] ?? "home";

// if (isset($_GET["page"])) {
//     $page = $_GET["page"];
// }

$controller = new ProductMVC();

switch ($page) {
    case "products":
        $controller->index();
        break;
    default:
        $controller->home();
        break;
}