<?php
session_start(); // Tambahkan ini untuk menggunakan session

// Koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "web_organisasi";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari form
$nama  = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$pesan = $_POST['pesan'] ?? '';

// Simpan ke tabel kontak
$sql = "INSERT INTO kontak (nama, email, pesan) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nama, $email, $pesan);

if ($stmt->execute()) {
    $_SESSION['success'] = "Pesan berhasil dikirim!";
} else {
    $_SESSION['error'] = "Gagal mengirim pesan: " . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect kembali ke halaman kontak
header("Location: ../kontak.php?status=sukses");
exit();
?>
