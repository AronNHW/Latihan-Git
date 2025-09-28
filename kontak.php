<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak Kami</title>

    <!-- Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Gaya Khusus Halaman -->
    <style>
        body {
            background-image: url('assets/175.webp'); /* Latar belakang gambar */
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
        label {
            color: #fff;
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
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <div class="row">
                <!-- Informasi Kontak -->
                <div class="col-md-6">
                    <h5>Alamat Kantor</h5>
                    <p>Jl. Dahlia, Kalimantan Selatan</p>
                    <p>Telp: 081254974751</p>
                    <p>Email: aaliyahpanggung@gmail.com</p>
                    <p>Jam Operasional: Senin - Jumat, 08.00 - 17.00</p>
                </div>

                <!-- Formulir Kontak -->
                <div class="col-md-6">
                    <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
                <script>
                    alert("Pesan Anda berhasil dikirim!");
                </script>
            <?php endif; ?>
            
            <form action="backend/proses_kontak.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nama" 
                        name="nama" 
                        placeholder="Nama Anda" 
                        required
                    >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        id="email" 
                        name="email" 
                        placeholder="email@contoh.com" 
                        required
                    >
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea 
                        class="form-control" 
                        id="pesan" 
                        name="pesan" 
                        rows="4" 
                        placeholder="Tulis pesan Anda di sini..." 
                        required
                    ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>


    <!-- Footer -->
    <div class="text-center mt-5 py-3 text-light" style="background-color: rgba(0,0,0,0.6);">
        Design by: <em>Aaron Nur Hasan Wahid</em>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
