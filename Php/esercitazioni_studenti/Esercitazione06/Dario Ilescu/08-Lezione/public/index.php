<?php  require_once "../vendor/autoload.php"; ?>


<?php
use app\controller\ProdottoMVC;
$pagina = $_GET["page"] ?? "home";

//if(isset($_GET["page"])){
//
//   $pagina = $_GET["page"];

//}

$controller = new ProdottoMVC();

switch ($pagina) {
    case 'prodotti':
        $controller->index();
        # code...
        break;
    
    default:
        $controller->home();
        # code...
        break;
}

?>