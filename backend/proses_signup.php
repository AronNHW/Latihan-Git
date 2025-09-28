<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Validasi sederhana
if (empty($username) || empty($password)) {
    die("Username dan password tidak boleh kosong!");
}

// Cek apakah username sudah ada
$cek = $conn->query("SELECT * FROM users WHERE username='$username'");
if ($cek->num_rows > 0) {
    die("Username sudah digunakan!");
}

// Simpan ke database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($query) === TRUE) {
    echo "Registrasi berhasil! <a href='../login.php'>Login di sini</a>";
} else {
    echo "Gagal registrasi: " . $conn->error;
}
?>
