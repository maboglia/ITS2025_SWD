<?php

    class CarMVC {

        private $service;

        public function __construct() {
            $this->service = new CarService();
        }

        public function home() {

            include VIEW . "header.php";
            echo "<h1>" . TITLE . "</h1>";
            include VIEW . "footer.php";

        }

        public function index() {

            include VIEW . "header.php";
            $cars = $this->service->getCars();
            include VIEW . "table.php";
            include VIEW . "footer.php";

        }

    }

?>