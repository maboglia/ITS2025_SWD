<table>

    <thead>
        <tr>
            <th>Marca</th>
            <th>Prezzo</th>
            <th>Cilindrata</th>
            <th>Posti</th>
            <th>Prezzo</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($automobili as $auto): ?>
        <tr> <!-- ogni riga si deve ripertere per il numero di macchine -->
            <td><?= $auto->marca ?></td>
            <td><?= $auto->modello ?></td>
            <td><?= $auto->cilindrata ?></td>
            <td><?= $auto->posti ?></td>
            <td><?= $auto->prezzo ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>