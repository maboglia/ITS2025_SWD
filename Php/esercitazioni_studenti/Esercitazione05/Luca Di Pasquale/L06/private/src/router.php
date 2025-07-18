<?php 

$pagina = 'home';

if (isset($_GET['page'])) {
    $pagina = $_GET['page'];
}

switch ($pagina) {
    case 'automobile':
        $controller = new AutosaloneMVC();
        $controlle->index();
        break;
        
    case 'api':
        //$controller = new AutosaloneREST();
        $controlle->index();
        break;

    default:
        $controller = new AutosaloneMVC();
        $controller->home();
        break;
}