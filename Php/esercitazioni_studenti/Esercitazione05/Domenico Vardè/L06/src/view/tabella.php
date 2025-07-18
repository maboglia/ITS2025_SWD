

<h1><?= TITOLO ?></h1>

<table>
    <thead>
        <tr>
            <th>marca</th>
            <th>modello</th>
            <th>cilindrata</th>
            <th>posti</th>
            <th>prezzo</th>
        </tr>
    </thead>

    
    <tbody>
        <!-- questa riga si deve ripetere per ogni automobile nella tabella automobile -->
         <?php foreach($automobili as $auto): ?>
        <tr>
            <td><?= $auto->marca ?></td>
            <td><?= $auto->modello ?></td>
            <td><?= $auto->cilindrata ?></td>
            <td><?= $auto->posti ?></td>
            <td><?= $auto->prezzo ?></td>
        </tr>
        <?php endforeach; ?>
        <!-- questa riga si deve ripetere per ogni automobile nella tabella automobile -->
    </tbody>    
</table>

