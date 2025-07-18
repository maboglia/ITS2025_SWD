<h1><?= TITOLO ?></h1>

<table>
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modello</th>
            <th>Cilindrata</th>
            <th>Posti</th>
            <th>Prezzo</th>
        </tr>
    </thead>
    <tbody>
        <!-- Riga ripetuta per ogni auto -->
        <?php foreach ($automobili as $auto):?>
        <tr>
            <td><?= $auto->marca ?></td>
            <td><?= $auto->modello ?></td>
            <td><?= $auto->cilindrata ?></td>
            <td><?= $auto->posti ?></td>
            <td><?= $auto->prezzo ?> €</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>