<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Klien - Nusantara Teknologi Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Menambahkan background image */
            background-image: url('assets/175.webp'); /* Ganti dengan path gambar background Anda */
            background-size: cover; /* Memastikan gambar menutupi seluruh area */
            background-attachment: fixed; /* Membuat gambar tetap saat discroll */
            background-position: center; /* Memposisikan gambar di tengah */
            color: #fff; /* Mengubah warna teks default menjadi putih agar kontras dengan overlay gelap */
        }

        /* Overlay untuk membuat teks lebih mudah dibaca di atas gambar background */
        .overlay {
            background-color: rgba(0, 0, 0, 0.75); /* Warna hitam dengan transparansi 75% */
            min-height: 100vh; /* Memastikan overlay menutupi seluruh tinggi viewport */
            padding-top: 50px; /* Padding atas agar konten tidak terlalu mepet */
            padding-bottom: 50px; /* Padding bawah */
        }

        .container-galeri {
            /* margin-top dan margin-bottom dipindahkan ke padding overlay */
            /* background-color diubah menjadi transparan atau dihilangkan jika overlay sudah cukup */
            background-color: rgba(255, 255, 255, 0.1); /* Sedikit transparan putih untuk kontainer */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-client {
            border: none;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            background-color: rgba(240, 240, 240, 0.9); /* Warna kartu klien dengan sedikit transparansi */
        }
        .card-client:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card-client img {
            width: 100%;
            height: 150px; /* Tinggi gambar yang seragam */
            object-fit: contain; /* Menjaga rasio aspek dan menampung gambar di dalam area */
            padding: 15px; /* Memberi sedikit ruang di sekitar logo */
            background-color: #ffffff; /* Latar belakang untuk logo klien */
            border-bottom: 1px solid #eee;
        }
        .card-client .card-body {
            text-align: center;
            padding: 15px;
        }
        .card-client .card-title {
            font-size: 1.1em;
            font-weight: bold;
            color: #333; /* Warna teks judul kartu */
        }
        .card-client .card-text {
            font-size: 0.9em;
            color: #666; /* Warna teks deskripsi kartu */
        }
        h2, h5 {
            color: #fff; /* Pastikan judul utama berwarna putih */
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
    <div class="overlay">
        <div class="container container-galeri">
            <h2 class="text-center mb-5">Galeri Klien Kami</h2>

            <div class="row">
                <?php
                // Data klien statis
                $clients = [
                    [
                        'name' => 'Bahlil Lahadalia',
                        'logo' => 'assets/kepala_BKPM.jpg', // Pastikan path ini benar
                        'description' => 'Solusi IT untuk manufaktur.'
                    ],
                ];

                // Loop untuk menampilkan setiap klien
                foreach ($clients as $client) {
                ?>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card card-client">
                            <img src="<?php echo $client['logo']; ?>" class="card-img-top" alt="Logo <?php echo $client['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $client['name']; ?></h5>
                                <p class="card-text"><?php echo $client['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>