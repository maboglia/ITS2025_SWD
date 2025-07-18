<h1><?=TITOLO?></h1>

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
        <!-- questo blocco SI RIPETE PER OGNI AUTO -->
         <?php foreach($automobili as $auto): ?>
        <tr>
            <td><?=$auto->marca?></td>
            <td><?=$auto->modello?></td>
            <td><?=$auto->cilindrata?></td>
            <td><?=$auto->posti?></td>
            <td><?=$auto->prezzo?></td>
        </tr>
        <?php endforeach; ?>
        <!-- questo blocco SI RIPETE PER OGNI AUTO -->
    </tbody>
</table>