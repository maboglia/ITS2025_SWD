<?php
class Connection {

    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO('mysql:host='.HOST.';dbname=automobili', USER, PASW);
        } catch (PDOException $e) {
            echo 'Errore di connessione: ' . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}