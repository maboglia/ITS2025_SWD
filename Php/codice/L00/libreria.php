<?php include_once("db_libreria.php"); ?>
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
        <h2>Libreria</h2>
        <table>
            <tr>
                <th>Titolo</th>
                <th>Pagine</th>
                <th>Prezzo</th>
                <th>Editore</th>
            </tr>
            <?php

// Lettura di tutti i record
$sql = "SELECT l.titolo, l.pagine, l.prezzo, e.nome as editore FROM libro l join editore e on l.editore_id = e.id";
            $stmt = $pdo->query($sql);

            // Iterazione sui risultati
            while ($row = $stmt->fetch()) {
                echo '<tr>';
                echo '<td>'.$row['titolo'] . '</td>';
                echo '<td>'.$row['pagine'] . '</td>';
                echo '<td>'.$row['prezzo'] . '</td>';
                echo '<td>'.$row['editore'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
</main>
</body>
</html>


