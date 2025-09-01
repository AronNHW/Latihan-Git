<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk dan Jasa</title>

    <!-- Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Gaya Halaman -->
    <style>
        body {
            background-image: url('assets/175.webp'); /* Latar belakang */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #fff;
        }
        .overlay {
        background-color: white;     /* Ubah dari transparan gelap ke putih */
        color: black;                /* Supaya teks tetap terlihat jelas */
        padding: 40px;
        border-radius: 15px;
        margin-top: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sedikit bayangan */
        }   
        .table {
            background-color: rgba(255, 255, 255, 0.1); /* Tabel transparan */
        }

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
    <!-- Konten Utama -->
    <div class="container">
        <div class="overlay">
            <h2 class="text-center mb-4">Produk & Jasa Kami</h2>

            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card bg-dark text-light mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Web Custom</h5>
                            <p class="card-text">Website dinamis sesuai kebutuhan usaha Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-light mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Desain UI/UX</h5>
                            <p class="card-text">Desain interaktif dan ramah pengguna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-light mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">IT Konsultan</h5>
                            <p class="card-text">Pendampingan strategi digital Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="mt-5">Daftar Harga Paket</h4>
            <table class="table table-striped table-dark table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Nama Layanan</th>
                        <th>Harga</th>
                        <th>Estimasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pembuatan Website UMKM</td>
                        <td>Rp5.000.000</td>
                        <td>7 Hari</td>
                    </tr>
                    <tr>
                        <td>Redesign UI/UX App</td>
                        <td>Rp3.000.000</td>
                        <td>5 Hari</td>
                    </tr>
                    <tr>
                        <td>Konsultasi Digitalisasi</td>
                        <td>Rp1.500.000</td>
                        <td>3 Hari</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-center mt-5 py-3 text-light" style="background-color: rgba(0,0,0,0.6);">
        Design by: <em>Aaron Nur Hasan Wahid</em>
    </div>

    <!-- Script Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
