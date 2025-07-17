<?php
include_once 'includes/functions.php';
include_once 'includes/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $events = load_events();
    $event = [
        'id' => generate_id($events),
        'title' => $_POST['title'],
        'date' => $_POST['date'],
        'description' => $_POST['description']
    ];
    $events[] = $event;
    save_events($events);
    increment_ops();
    flash('success', 'Evento aggiunto con successo!');
    header('Location: index.php');
    exit;
}

$event = [];
include_once 'includes/header.php';
include_once 'views/form.php';
include_once 'includes/footer.php';