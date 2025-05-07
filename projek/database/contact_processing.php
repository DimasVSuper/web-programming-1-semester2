<!-- filepath: c:\xampp\htdocs\project\database\contact_processing.php -->
<?php
session_start();
include './contactDB.php';

// Aktifkan debugging manual
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Pastikan output berupa JSON
header('Content-Type: application/json; charset=utf-8');

// Pastikan metode request adalah POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['status'] = 'error';
    header('Location: ../index.php');
    exit();
}

// Ambil data dari form
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Validasi input
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    $_SESSION['status'] = 'error';
    header('Location: ../index.php');
    exit();
}

// Query untuk menyimpan data
$sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    $_SESSION['status'] = 'error';
    header('Location: ../index.php');
    exit();
}

$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    $_SESSION['status'] = 'success';
} else {
    $_SESSION['status'] = 'error';
}

$stmt->close();
header('Location: ../index.php');
exit();
?>