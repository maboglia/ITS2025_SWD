<?php

class Connessione{

    private $conn;

    function connetti() {

        $this->conn = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
try {

    





    
} catch (PDOException $e) {
        echo "Connessione non riuscita" . $e->getMessage();
    }

    function getConn(){

        if(isset(self::$conn)) {
            return self::$conn;
        }
        return null;

    }

}

}

?>