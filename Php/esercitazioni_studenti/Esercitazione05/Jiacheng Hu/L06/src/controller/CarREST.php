<?php

    class CarREST {

        private $service;

        public function __construct() {
            $this->service = new CarService();
        }

        public function index() {
            $cars = $this->service->getCars();
            
            header("Content-Type: application/json");
            
            echo json_encode(array_map(fn($car) => $car->__serialize(), $cars));
        }

    }

?>