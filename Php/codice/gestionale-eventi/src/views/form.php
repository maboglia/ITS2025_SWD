<form method="post">
    <label>Titolo:<br>
        <input type="text" name="title" value="<?= htmlspecialchars($event['title'] ?? '') ?>" required>
    </label><br><br>

    <label>Data (YYYY-MM-DD):<br>
        <input type="date" name="date" value="<?= htmlspecialchars($event['date'] ?? '') ?>" required>
    </label><br><br>

    <label>Descrizione:<br>
        <textarea name="description" required><?= htmlspecialchars($event['description'] ?? '') ?></textarea>
    </label><br><br>

    <button type="submit">Salva</button>
</form>