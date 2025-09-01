<?php
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: ../index.php"); // <-- karena file ini di dalam folder /backend
    exit;
} else {
    echo "Login gagal!";
}
?>
