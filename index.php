<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

$jumlahItem = count($daftarItem);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?= e($namaSitus) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="kepala">
    <div class="wadah kepala__isi">
        <img src="assets/logo.svg" alt="Logo kantin berupa mangkuk hijau" class="logo">
        <div>
            <h1><?= e($namaSitus) ?></h1>
            <p>Makan kenyang, harga mahasiswa.</p>
        </div>
    </div>
</header>

<nav class="navigasi">
    <div class="wadah">
        <a href="index.php" class="aktif">Profil</a>
        <a href="katalog.php">Menu</a>
    </div>
</nav>

<main class="wadah">
    <section class="kotak sambutan">
        <div>
            <h2>Tentang Kami</h2>
            <p>
                Kantin kecil di dekat kampus yang menjual makanan, camilan, dan
                minuman dengan harga ramah di kantong mahasiswa. Semua menu dimasak
                setiap hari, mulai dari Rp1.000 saja.
            </p>
            <a href="katalog.php" class="tombol">Lihat <?= e((string) $jumlahItem) ?> Menu</a>
        </div>
        <img src="assets/kantin.svg" alt="Ilustrasi gedung kantin dengan atap merah putih" class="gambar-kantin">
    </section>

    <section class="kotak">
        <h2>Informasi Kantin</h2>

        <div class="info">
            <div class="info__item">
                <h3>🕖 Jam Buka</h3>
                <p>Senin - Sabtu<br>07.00 - 21.00 WIB</p>
            </div>
            <div class="info__item">
                <h3>📍 Alamat</h3>
                <p>Jl. Kampus No. 10<br>Sukoharjo</p>
            </div>
            <div class="info__item">
                <h3>📱 Kontak</h3>
                <p>WhatsApp<br>0812-3456-7890</p>
            </div>
        </div>
    </section>
</main>

<footer class="kaki">
    <div class="wadah">
        <p>&copy; <?= e(date("Y")) ?> <?= e($namaSitus) ?> &middot; Iqbal Bramasta Putra (025A00236005)</p>
    </div>
</footer>

</body>
</html>
