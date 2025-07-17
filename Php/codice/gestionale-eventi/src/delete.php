<?php
include_once 'includes/functions.php';
include_once 'includes/session.php';

$id = $_GET['id'] ?? null;
$events = load_events();
$found = false;

foreach ($events as $i => $e) {
    if ($e['id'] == $id) {
        unset($events[$i]);
        $found = true;
        break;
    }
}

if ($found) {
    save_events(array_values($events));
    increment_ops();
    flash('success', 'Evento eliminato!');
}

header('Location: index.php');
exit;