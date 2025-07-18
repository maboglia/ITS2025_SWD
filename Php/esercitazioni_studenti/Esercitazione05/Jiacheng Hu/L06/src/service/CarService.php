<?php

    class CarService {

        private $dao;

        public function __construct() {
            $this->dao = new CarDAO();
        }

        public function getCars() {
            return $this->dao->all();
        }
    }
?>