<?php
include_once 'includes/functions.php';
include_once 'includes/session.php';

$id = $_GET['id'] ?? null;
$events = load_events();
$event = get_event_by_id($id);

if (!$event) {
    die("Evento non trovato.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($events as &$e) {
        if ($e['id'] == $id) {
            $e['title'] = $_POST['title'];
            $e['date'] = $_POST['date'];
            $e['description'] = $_POST['description'];
            break;
        }
    }
    save_events($events);
    increment_ops();
    flash('success', 'Evento modificato con successo!');
    header('Location: index.php');
    exit;
}

include_once 'includes/header.php';
include_once 'views/form.php';
include_once 'includes/footer.php';