<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = $_GET['user'] ?? 'guest';
}

if (!isset($_SESSION['ops'])) {
    $_SESSION['ops'] = 0;
}

function increment_ops() {
    $_SESSION['ops']++;
}

function flash($key, $msg = null) {
    if ($msg !== null) {
        $_SESSION['flash'][$key] = $msg;
    } elseif (isset($_SESSION['flash'][$key])) {
        $msg = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);
        return $msg;
    }
    return null;
}