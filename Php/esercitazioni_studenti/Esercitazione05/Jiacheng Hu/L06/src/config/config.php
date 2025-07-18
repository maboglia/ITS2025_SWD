<?php

    define("TITLE", "Cars showroom");

    define("HOST", "localhost:3306");
    define("USER", "ITS_2025");
    define("PASSWORD", "jiacheng.hu");

    define("SRC", "../src/");
    define("VIEW", SRC . "view/");
    define("CSS", "../public/css/");
    define("JS", "../public/js/");

    require_once SRC . "model/Car.php";
    require_once SRC . "repos/Connection.php";
    require_once SRC . "repos/CarDAO.php";
    require_once SRC . "service/CarService.php";
    require_once SRC . "controller/CarMVC.php";
    require_once SRC . "controller/CarREST.php";

?>