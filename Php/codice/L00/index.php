<?php include_once("connessione.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
    <title>Document</title>
</head>
<body>
    <main class="container">

        <h1>Corso SWD</h1>
        <h2>Studenti</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
            </tr>
            <?php




// Lettura di tutti i record
$sql = "SELECT * FROM studenti";
            $stmt = $pdo->query($sql);

            // Iterazione sui risultati
            while ($row = $stmt->fetch()) {
                echo '<tr><td>'.$row['nome'] . "</td><td>" . $row['cognome'] . "</td></tr>";
            }
            ?>
        </table>
</main>
</body>
</html>


