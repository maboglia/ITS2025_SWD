<?php
// Avvia la sessione
session_start();

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera il nome dal form e lo salva nella sessione
    $_SESSION["nome"] = $_POST["nome"];

    // Recupera il colore dal form e imposta il cookie
    setcookie("colore", $_POST["colore"], time() + (86400 * 30), "/"); // Scade dopo 30 giorni

    // Reindirizza alla stessa pagina per mostrare il messaggio
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

// Recupera il nome dalla sessione (se esiste)
$nome = isset($_SESSION["nome"]) ? $_SESSION["nome"] : "";

// Recupera il colore dal cookie (se esiste)
$colore = isset($_COOKIE["colore"]) ? $_COOKIE["colore"] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nome e Colore</title>
</head>
<body>

<?php if (empty($nome) || empty($colore)): ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome: <input type="text" name="nome"><br>
        Colore preferito: <input type="text" name="colore"><br>
        <input type="submit" value="Invia">
    </form>
<?php else: ?>
    <p>Ciao, <?php echo $nome; ?>! Il tuo colore preferito è <?php echo $colore; ?>.</p>
<?php endif; ?>

</body>
</html>