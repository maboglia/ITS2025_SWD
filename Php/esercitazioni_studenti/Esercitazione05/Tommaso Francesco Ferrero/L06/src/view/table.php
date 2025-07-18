<h1><?= TITLE ?></h1>
<table>
    <thead>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Cc</th>
            <th>Seats</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cars as $car) : ?>
            <tr>
                <td><?= $car->brand ?></td>
                <td><?= $car->model ?></td>
                <td><?= $car->cc ?></td>
                <td><?= $car->seats ?></td>
                <td>€<?= $car->price ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>