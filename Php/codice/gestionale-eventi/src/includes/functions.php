<?php

function load_events() {
    $file = __DIR__ . '/../data/events.json';
    if (!file_exists($file)) return [];
    $json = file_get_contents($file);
    return json_decode($json, true) ?: [];
}

function save_events($events) {
    $file = __DIR__ . '/../data/events.json';
    file_put_contents($file, json_encode($events, JSON_PRETTY_PRINT));
}

function get_event_by_id($id) {
    $events = load_events();
    foreach ($events as $event) {
        if ($event['id'] == $id) return $event;
    }
    return null;
}

function generate_id($events) {
    $ids = array_column($events, 'id');
    return $ids ? max($ids) + 1 : 1;
}