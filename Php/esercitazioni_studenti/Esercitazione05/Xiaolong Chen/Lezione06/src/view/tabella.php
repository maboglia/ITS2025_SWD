<h1><?= TITOLO ?></h1>
<table>
    <!--thead>tr>th*5-->
    <thead>
        <!-- Questa riga si deve ripetere per ogni automobile-->
        <tr>
            <th>Marca</th>
            <th>Modello</th>
            <th>Cilindrata</th>
            <th>Posti</th>
            <th>Prezzo</th>
        </tr>
    </thead>

    <!--tbody>tr>th*5-->
    <tbody>
        <!-- Questa riga si deve ripetere per ogni automobile-->
        <?php foreach ($automobili as $auto):?>
        <tr>
            <td><?= $auto->marca?></td>
            <td><?= $auto->modello?></td>
            <td><?= $auto->cilindrata?></td>
            <td><?= $auto->posti?></td>
            <td><?= $auto->prezzo?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>