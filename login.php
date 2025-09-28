<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>

    <!-- Hubungkan file CSS login -->
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>

    <!-- Container modal untuk form login -->
    <div class="modal-container"> 
        <div class="modal-content">
        
            <!-- Tombol tutup (×) untuk kembali ke beranda -->
            <span class="close-button">&times;</span> 

            <!-- Judul form -->
            <h2>Login</h2>

            <!-- Form login: data dikirim ke backend/proses_login.php -->
            <form action="backend/proses_login.php" method="POST">
                <!-- Input Username -->
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Masukan Username" required><br>

                <!-- Input Password -->
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukan Password" required><br>

                <!-- Tombol Login -->
                <button type="submit" class="login-button">Login</button>
            </form>

            <!-- Opsional: link ke halaman daftar -->
            <p>Belum punya akun? <a href="signup.php">Daftar di sini</a></p>

        </div>
    </div>

    <!-- Script tombol close kembali ke index.php -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const closeBtn = document.querySelector('.close-button');
            if (closeBtn) {
                closeBtn.addEventListener('click', function () {
                    // Arahkan ke halaman index jika tombol × ditekan
                    window.location.href = 'index.php';
                });
            }
        });
    </script>
</body>
</html>
