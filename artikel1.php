<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Unggulan - Nusantara Teknologi Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('assets/175.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        .overlay {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            margin-top: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .header {
            background-image: url('assets/header.jpg');
            background-size: cover;
            background-position: center;
            padding: 40px;
            color: white;
            text-align: center;
        }

        .logo {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid white;
        }

        .navbar-nav a {
            color: white;
            margin: 0 15px;
            font-weight: bold;
        }

        .card-title {
            color: #004080;
            font-size: 20px;
        }

        .card-text {
            font-size: 15px;
            color: #333;
        }

        .footer {
            background-color: #222;
            color: #ccc;
            padding: 15px;
            text-align: center;
            margin-top: 40px;
        }

        table.header-table, table.nav-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
        }

        .header-table td, .nav-table td {
            padding: 10px;
            text-align: center;
        }

        .logo-img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
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

        .card img {
            max-height: 250px;
            width: 100%;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        small {
            color: gray;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
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

    <!-- KONTEN -->
    <div class="container">
        <div class="overlay">
            <h3 class="mb-4">Artikel Unggulan</h3>

            <!-- Artikel 1 -->
            <div class="card mb-3">
                <div class="card-body">
                    <img src="assets/ai1.webp" alt="AI" class="img-fluid">
                    <h5 class="card-title">Inovasi Terbaru dalam Teknologi AI</h5>
                    <p class="card-text">Artificial Intelligence (AI) terus berkembang pesat dan mulai digunakan secara luas di berbagai sektor seperti kesehatan, keuangan, dan pendidikan. Teknologi ini memungkinkan otomatisasi tugas-tugas kompleks serta pengambilan keputusan berbasis data.</p>
                    <a href="https://www.forbes.com/sites/forbestechcouncil/2023/03/15/the-future-of-ai-innovation/" target="_blank" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="card mb-3">
                <div class="card-body">
                    <img src="assets/ai2.webp" alt="Cloud" class="img-fluid">
                    <h5 class="card-title">Manfaat Cloud Computing untuk Bisnis</h5>
                    <p class="card-text">Cloud computing menawarkan fleksibilitas, efisiensi biaya, dan skalabilitas. Banyak perusahaan kini beralih ke cloud untuk menyimpan data dan mengelola infrastruktur IT mereka secara efisien.</p>
                    <a href="https://www.ibm.com/cloud/learn/benefits-of-cloud-computing" target="_blank" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="card mb-3">
                <div class="card-body">
                    <img src="assets/ai3.jpg" alt="Keamanan" class="img-fluid">
                    <h5 class="card-title">Keamanan Data di Era Digital</h5>
                    <p class="card-text">Di era digital, menjaga keamanan data menjadi prioritas utama. Serangan siber dan pelanggaran data bisa sangat merugikan baik bagi individu maupun perusahaan. Oleh karena itu, penting untuk menerapkan sistem keamanan yang kuat.</p>
                    <a href="https://www.csoonline.com/article/2124676/what-is-data-security.html" target="_blank" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        &copy; Aaron Nur Hasan Wahid
    </div>

</body>
</html>
