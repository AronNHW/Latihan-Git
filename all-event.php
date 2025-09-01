<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Event Kami - Nusantara Teknologi Informasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-main {
            padding: 60px 15px;
        }

        .event-card {
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .event-card-body {
            padding: 20px;
        }

        .event-card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .event-card-date {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .event-image {
            max-height: 250px;
            object-fit: cover;
            width: 100%;
            border-radius: 8px;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container container-main">
    <h2 class="text-center mb-5">Daftar Semua Event Kami</h2>

    <div class="row justify-content-center">
        <?php
        $events = [
            [
                'title' => 'Workshop IT Security 2025: Perlindungan Data Digital',
                'date' => 'Jumat, 10 Agustus 2025 | Pukul 09:00 - 16:00 WIB',
                'description' => 'Pelatihan mendalam dan praktis mengenai praktik terbaik keamanan siber...',
                'image' => 'assets/event1.png'
            ],
            [
                'title' => 'Seminar Tren Teknologi Informasi Terkini: AI, IoT, dan Cloud Computing',
                'date' => 'Sabtu, 25 September 2025 | Pukul 13:00 - 17:00 WIB',
                'description' => 'Diskusikan masa depan teknologi dengan pakar industri...',
                'image' => 'assets/event2.jpg'
            ],
            [
                'title' => 'Webinar Desain UI/UX Interaktif untuk Aplikasi Mobile',
                'date' => 'Rabu, 05 Oktober 2025 | Pukul 19:00 - 21:00 WIB',
                'description' => 'Pelajari prinsip-prinsip desain antarmuka pengguna...',
                'image' => 'assets/event3.jpg'
            ],
            [
                'title' => 'Bootcamp Coding untuk Pemula: Membangun Website Pertama Anda',
                'date' => 'Setiap Sabtu, 15 November - 15 Desember 2025 | Pukul 09:00 - 12:00 WIB',
                'description' => 'Program intensif bagi Anda yang ingin memulai karir di dunia pemrograman...',
                'image' => 'assets/event4.webp'
            ],
        ];

        if (!empty($events)) {
            foreach ($events as $event) {
        ?>
                <div class="col-md-8 col-lg-6">
                    <div class="card event-card">
                        <div class="card-body event-card-body">
                            <?php if (!empty($event['image'])): ?>
                                <img src="<?php echo htmlspecialchars($event['image']); ?>" class="event-image mb-3" alt="Gambar Event">
                            <?php endif; ?>
                            <h3 class="event-card-title"><?php echo htmlspecialchars($event['title']); ?></h3>
                            <span class="event-card-date"><?php echo htmlspecialchars($event['date']); ?></span>
                            <p class="event-card-description mt-2"><?php echo nl2br(htmlspecialchars($event['description'])); ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo '<div class="col-12 text-center py-5"><p>Belum ada event yang tersedia saat ini.</p></div>';
        }
        ?>
    </div>

    <div class="text-center">
        <a href="javascript:history.back()" class="btn btn-secondary btn-back">Kembali</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
