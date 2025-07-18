<h1>Prodotti</h1>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Prezzo</th>
            <th>Origine</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($prodotti as $prodotto) : ?>
            <tr>
                <td><?= $prodotto->nome ?></td>
                <td><?= $prodotto->categoria ?></td>
                <td><?= $prodotto->prezzoIvato() ?></td>
                <td><?= $prodotto->origine?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>