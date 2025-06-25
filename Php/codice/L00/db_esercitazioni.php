<?php
$host = 'localhost';
$db = 'esercitazioni';
$user = 'ITS_2025';
$pass = 'ITS_2025';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Gestione degli errori tramite eccezioni
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modalità di fetch predefinita
    PDO::ATTR_EMULATE_PREPARES   => false, // Disattiva le query emulata per maggiore sicurezza
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
   // echo "Connessione avvenuta con successo!";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>