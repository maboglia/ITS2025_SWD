<h1>Products</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Source</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $p) : ?>
            <tr>
                <td><?= $p->name ?></td>
                <td><?= $p->category ?></td>
                <td><?= $p->priceWithVAT() ?></td>
                <td><?= $p->source ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>