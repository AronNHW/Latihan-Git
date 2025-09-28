<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target = "uploads/" . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        echo "Upload berhasil!";
    } else {
        echo "Upload gagal!";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    Upload file informasi:
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>