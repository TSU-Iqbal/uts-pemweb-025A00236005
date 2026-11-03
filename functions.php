<?php
declare(strict_types=1);

// functions.php - kumpulan fungsi (tanpa HTML)

// Mengamankan teks sebelum dicetak ke HTML (disediakan starter)
function e(string $teks): string
{
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

// Mengubah angka menjadi format rupiah, contoh: 8000 -> "Rp8.000"
function formatRupiah(int $angka): string
{
    return "Rp" . number_format($angka, 0, ',', '.');
}

// Menghitung rata-rata harga semua item
function hitungRataRataHarga(array $daftarItem): int
{
    $semuaHarga = array_column($daftarItem, "harga"); // ambil kolom harga saja
    $totalHarga = array_sum($semuaHarga);             // jumlahkan semua harga

    return (int) round($totalHarga / count($daftarItem));
}
