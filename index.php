<!DOCTYPE html>
<html>
<head>
    <title>Website Organisasi</title>

    <!-- Menghubungkan stylesheet lokal -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <!-- Menggunakan Bootstrap 5.3.7 dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- Gaya tambahan untuk latar belakang dan teks -->
 <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('assets/175.webp'); /* Gambar latar seluruh halaman */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* Tabel header dan menu */
        table.header-table, table.nav-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff; /* PUTIH, agar tidak transparan */
        }

        .header-table td, .nav-table td {
            padding: 10px;
            text-align: center;
        }

      .logo-img {
        width: 90px;            /* Ukuran logo */
        height: 90px;           /* Tinggi disamakan agar bentuk tetap bulat */
        border-radius: 50%;     /* Membuat bentuk bulat */
        object-fit: cover;      /* Menyesuaikan gambar agar tidak gepeng */
        }


        .company-name {
            font-size: 36px;
            font-weight: bold;
            color: #999966;
            text-shadow: 1px 1px #ccc;
        }

        .nav-table a {
            display: block;
            text-decoration: none;
            color: black;
        }

        .nav-table .active a {
            font-weight: bold;
            text-decoration: underline;
        }

        small {
            color: gray;
        }
        

    </style>
</head>
<body>

    <!-- HEADER DENGAN BACKGROUND -->
    <div class="header-container">
        <table class="header-table">
            <tr>
                <td style="width: 120px;">
                    <img src="assets/nusa.png" alt="Logo" class="logo-img"><br>

                </td>
                <td>
                    <span class="company-name">Nusantara Teknologi Informasi</span>
                </td>
            </tr>
        </table>
    </div>

    <!-- NAVIGASI -->
    <table class="nav-table">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="visi_misi.php">Visi dan misi</a></td>
            <td><a href="produk_kami.php">Produk kami</a></td>
            <td><a href="kontak.php">Kontak</a></td>
            <td class="active"><a href="about.php">About us</a></td>
        </tr>
    </table>

</body>
</html>

    <!-- Kontainer Utama -->
    <div class="container"> 

        <!-- Sidebar Menu -->
        <div class="sidebar">

            <!-- Menu Artikel -->
            <div class="sidebar-section">
                <a class="sidebar-title" data-bs-toggle="collapse" href="#collapseArtikel" role="button" aria-expanded="true" aria-controls="collapseArtikel">
                    Artikel
                </a>
                <div class="collapse show" id="collapseArtikel">
                    <ul class="sidebar-list">
                        <li><a href="artikel1.php">Konsep Teknologi Informasi</a></li>
                    </ul>
                </div>
            </div>

            <!-- Menu Event Galeri -->
            <div class="sidebar-section">
                <a class="sidebar-title" data-bs-toggle="collapse" href="#collapseEventGaleri" role="button" aria-expanded="false" aria-controls="collapseEventGaleri">
                    Event Galeri
                </a>
                <div class="collapse" id="collapseEventGaleri">
                    <ul class="sidebar-list">
                        <li><a href="all-event.php">Lihat Semua Event</a></li>
                    </ul>
                </div>
            </div>

            <!-- Menu Foto Klien -->
            <div class="sidebar-section">
                <a class="sidebar-title" data-bs-toggle="collapse" href="#collapseFotoKlien" role="button" aria-expanded="false" aria-controls="collapseFotoKlien">
                    Foto Klien Kami
                </a>
                <div class="collapse" id="collapseFotoKlien">
                    <ul class="sidebar-list">
                        <li><a href="galeri.php">Galeri Klien</a></li>
                    </ul>
                </div>
            </div>

            <!-- Menu Login -->
            <div class="sidebar-section">
                <a class="sidebar-title" data-bs-toggle="collapse" href="#collapseLogin" role="button" aria-expanded="false" aria-controls="collapseLogin">
                    Login
                </a>
                <div class="collapse" id="collapseLogin">
                    <ul class="sidebar-list">
                        <li><a href="login.php">Sign In</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Konten Utama -->
        <div class="main">
            <div class="main-content-section">
                <h2>Selamat Datang di Website Kami</h2>
                <p>Ini adalah halaman utama website organisasi Anda. Di sini Anda bisa menemukan berbagai informasi menarik dan terbaru mengenai kegiatan serta produk kami.</p>
                <p>Kami berkomitmen untuk memberikan layanan terbaik dan informasi yang relevan kepada seluruh pengunjung website.</p>
            </div>

            <div class="main-content-section">
                <h3>Visi dan Misi Kami</h3>
                <ul class="main-list">
                    <li>Menjadi perusahaan terdepan dalam inovasi teknologi.</li>
                    <li>Memberikan solusi terbaik bagi kebutuhan pelanggan.</li>
                    <li>Menciptakan lingkungan kerja yang kolaboratif dan inspiratif.</li>
                </ul>
            </div>

            <div class="main-content-section">
                <h3>Artikel Unggulan</h3>
                <ul class="main-list">
                    <li><a href="#">Inovasi Terbaru dalam Teknologi AI</a></li>
                    <li><a href="#">Manfaat Cloud Computing untuk Bisnis</a></li>
                    <li><a href="#">Keamanan Data di Era Digital</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        Design by: <em>Aaron Nur Hasan Wahid</em>
    </div>

    <!-- Script Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
