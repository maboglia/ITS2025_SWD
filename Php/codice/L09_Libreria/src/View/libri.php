<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    
    <div class="container">
        <h1>Libri</h1>
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Pagine</th>
                    <th>Prezzo</th>
                    <th>Editore</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libri as $libro): ?>
                <tr>
                    <td><?= $libro->titolo ?></td>
                    <td><?= $libro->pagine ?></td>
                    <td><?= $libro->prezzo ?></td>
                    <td><?= $libro->editore_id ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

</body>
</html>