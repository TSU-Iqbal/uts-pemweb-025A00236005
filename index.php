<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";
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
    <div class="wadah">
        <h1><?= e($namaSitus) ?></h1>
        <p>Makan kenyang, harga mahasiswa.</p>
    </div>
</header>

<nav class="navigasi">
    <div class="wadah">
        <a href="index.php" class="aktif">Profil</a>
        <a href="katalog.php">Menu</a>
    </div>
</nav>

<main class="wadah">
    <section class="kotak">
        <h2>Tentang Kami</h2>
        <p>
            Kantin Mas Iqbal adalah kantin kecil di dekat kampus yang menjual
            makanan, camilan, dan minuman dengan harga murah untuk mahasiswa.
        </p>
    </section>

    <section class="kotak">
        <h2>Informasi Kantin</h2>

        <h3>Jam Buka</h3>
        <p>Senin - Sabtu, 07.00 - 21.00 WIB</p>

        <h3>Alamat &amp; Kontak</h3>
        <p>Jl. Kampus No. 10, Sukoharjo</p>
        <p>WhatsApp: 0812-3456-7890</p>
    </section>
</main>

<footer class="kaki">
    <div class="wadah">
        <p>&copy; <?= date("Y") ?> <?= e($namaSitus) ?> - Iqbal Bramasta Putra (025A00236005)</p>
    </div>
</footer>

</body>
</html>
