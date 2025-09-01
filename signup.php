<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <!-- Menetapkan karakter UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsif untuk mobile -->
    <title>Signup Pengguna</title>

    <!-- Menghubungkan ke file CSS eksternal -->
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>

    <!-- Kontainer modal untuk form signup -->
    <div class="modal-container">
        <div class="modal-content">
            <!-- Tombol close untuk kembali ke halaman utama -->
            <span class="close-button">&times;</span> 

            <h2>Sign Up</h2>

            <!-- Form signup -->
            <form action="backend/proses_signup.php" method="POST">
                <!-- Input username -->
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username" required><br>

                <!-- Input password -->
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required><br>

                <!-- Tombol submit -->
                <button type="submit" class="login-button">Daftar</button>
            </form>
        </div>
    </div>

    <!-- Script untuk tombol close kembali ke index -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const closeBtn = document.querySelector('.close-button');
            if (closeBtn) {
                closeBtn.addEventListener('click', function () {
                    window.location.href = 'index.php'; // Kembali ke halaman utama
                });
            }
        });
    </script>

</body>
</html>
