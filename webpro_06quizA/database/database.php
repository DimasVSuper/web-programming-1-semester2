<?php
require_once 'config.php';

$config = new configuration();

$conn = new mysqli(
    $config->database["host"], // Host
    $config->database["user"], // Username
    $config->database["pass"], // Password
    $config->database["db"]    // Database name
);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>