<?php

    $page = "home";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    switch ($page) {
        case 'cars':
            $ctrl = new CarMVC();
            $ctrl->index();
            break;
        case 'api':
            $ctrl = new CarREST();
            $ctrl->index();
            break;
        default:
            $ctrl = new CarMVC();
            $ctrl->home();
            break;
    }

?>