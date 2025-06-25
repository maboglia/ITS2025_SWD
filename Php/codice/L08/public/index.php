<?php require_once '../vendor/autoload.php'; ?>


<?php
use app\controller\ProdottoMVC;
//routing

$pagina = $_GET['page'] ?? 'home';

// if (isset($_GET['page'])){
//     $pagina = $_GET['page'];
// }

$controller = new ProdottoMVC();

switch ($pagina) {
    case 'prodotti':
        $controller->index();
        break;
    
    default:
        $controller->home();
        break;
}
