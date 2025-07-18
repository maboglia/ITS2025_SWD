<h1><?= TITLE ?></h1>
<table>
    <thead>
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Type 1</th>
            <th>Type 2</th>
            <th>Generation</th>
            <th>Legendary</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pokemons as $pokemon) : ?>
            <tr>
                <td><img src=<?= $pokemon->getImage() ?> alt=<?= $pokemon->name ?></td>
                <td><?= $pokemon->name ?></td>
                <td><?= $pokemon->type1 ?></td>
                <td><?= $pokemon->type2 ?></td>
                <td><?= $pokemon->generation ?></td>
                <td><?= $pokemon->legendary ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>