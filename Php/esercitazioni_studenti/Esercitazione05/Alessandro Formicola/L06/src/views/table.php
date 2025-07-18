<h1><?= TITOLO ?></h1>

<table>
    <thead>
        <th>Marca</th>
        <th>Modello</th>
        <th>Cilindrata</th>
        <th>Posti</th>
        <th>Prezzo</th>
    </thead>

    <tbody>
        <!-- questa riga si deve ripetere per ogni automobile in automobili -->
        <?php foreach ($automobili as $auto) : ?>
            <tr>
                <td><?= $auto->__get('marca') ?></td>
                <td><?= $auto->__get('modello') ?></td>
                <td><?= $auto->__get('cilindrata') ?></td>
                <td><?= $auto->__get('posti')?></td>
                <td><?= $auto->__get('prezzo')?></td>
            </tr>
        <?php endforeach;?>
        <!-- questa riga si deve ripetere per ogni automobile in automobili -->
    </tbody>
</table>