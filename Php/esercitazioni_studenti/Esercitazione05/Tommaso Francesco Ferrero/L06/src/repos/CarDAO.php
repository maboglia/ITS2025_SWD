<?php

    class CarDAO {

        private $conn;

        public function __construct() {
            $conn = new Connection();
            $this->conn = $conn->getConnection();
        }

        public function all() {

            $cars = [];

            $query = "SELECT * FROM automobili";
            $results = $this->conn->query($query);

            // If the columns of the rows match the attributes of the class you can use: PDO::FETCH_CLASS
            // $results->setFetchMode(PDO::FETCH_CLASS, "Car");
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {

                $car = new Car();

                $car->id = $row["id"];
                $car->brand = $row["marca"];
                $car->model = $row["modello"];
                $car->cc = $row["cilindrata"];
                $car->seats = $row["posti"];
                $car->price = $row["prezzo"];

                $cars[] = $car; // array_push($cars, $car);
            }

            return $cars;
        }
    }

?>