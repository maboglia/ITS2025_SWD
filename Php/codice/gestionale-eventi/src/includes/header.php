<?php include_once 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestione Eventi</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

<header>
    <h1>Eventi PHP</h1>
    <p>Utente: <?= $_SESSION['user'] ?> | Operazioni: <?= $_SESSION['ops'] ?></p>
    <nav>
        <a href="index.php">Home</a> |
        <a href="add.php">Aggiungi evento</a>
    </nav>
</header>
<hr>