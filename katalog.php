<?php
declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

$jumlahItem    = count($daftarItem);                       // fungsi array bawaan
$rataRataHarga = hitungRataRataHarga($daftarItem);         // fungsi buatan sendiri
$hargaTermurah = min(array_column($daftarItem, "harga"));  // harga paling kecil
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - <?= e($namaSitus) ?></title>
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
        <a href="index.php">Profil</a>
        <a href="katalog.php" class="aktif">Menu</a>
    </div>
</nav>

<main class="wadah">
    <section class="kotak">
        <h2>Daftar Menu</h2>

        <div class="ringkasan">
            <div class="ringkasan__item">
                <span><?= e((string) $jumlahItem) ?></span>
                Jumlah menu
            </div>
            <div class="ringkasan__item">
                <span><?= e(formatRupiah($rataRataHarga)) ?></span>
                Rata-rata harga
            </div>
            <div class="ringkasan__item">
                <span><?= e(formatRupiah($hargaTermurah)) ?></span>
                Harga termurah
            </div>
        </div>

        <div class="grid">
            <?php foreach ($daftarItem as $item): ?>
                <?php
                if ($item["tersedia"] === true) {
                    $label      = "Tersedia";
                    $kelasLabel = "label";
                    $kelasKartu = "kartu";
                } else {
                    $label      = "Habis";
                    $kelasLabel = "label label--habis";
                    $kelasKartu = "kartu kartu--habis";
                }
                ?>
                <article class="<?= e($kelasKartu) ?>">
                    <p class="ikon"><?= e($item["ikon"]) ?></p>
                    <h3><?= e($item["nama"]) ?></h3>
                    <p class="kategori"><?= e($item["kategori"]) ?></p>
                    <p class="harga"><?= e(formatRupiah($item["harga"])) ?></p>
                    <p class="<?= e($kelasLabel) ?>"><?= e($label) ?></p>
                </article>
            <?php endforeach; ?>
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
