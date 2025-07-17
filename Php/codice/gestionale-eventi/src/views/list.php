<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/functions.php';

$events = load_events();
?>

<?php if ($msg = flash('success')): ?>
    <p style="color: green;"><?= $msg ?></p>
<?php endif; ?>

<h2>Elenco eventi</h2>
<?php if (empty($events)): ?>
    <p>Nessun evento presente.</p>
<?php else: ?>
    <ul>
        <?php foreach ($events as $event): ?>
            <li>
                <strong><?= htmlspecialchars($event['title']) ?></strong> (<?= $event['date'] ?>) <br>
                <?= nl2br(htmlspecialchars($event['description'])) ?><br>
                <a href="edit.php?id=<?= $event['id'] ?>">Modifica</a> |
                <a href="delete.php?id=<?= $event['id'] ?>">Elimina</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php include_once 'includes/footer.php'; ?>