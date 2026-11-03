<?php
declare(strict_types=1);

// data.php - sumber data menu kantin (tanpa database, cukup array)

$namaSitus = "Kantin Mas Iqbal";

// Array multidimensi: array berisi array asosiatif
// Setiap item punya 5 atribut: ikon, nama, kategori, harga, tersedia
$daftarItem = [
    ["ikon" => "🍳", "nama" => "Nasi Telur",       "kategori" => "Makanan", "harga" => 8000,  "tersedia" => true],
    ["ikon" => "🍗", "nama" => "Nasi Ayam Geprek", "kategori" => "Makanan", "harga" => 12000, "tersedia" => true],
    ["ikon" => "🍜", "nama" => "Mie Goreng",       "kategori" => "Makanan", "harga" => 7000,  "tersedia" => false],
    ["ikon" => "🥟", "nama" => "Gorengan",         "kategori" => "Camilan", "harga" => 1000,  "tersedia" => true],
    ["ikon" => "🍞", "nama" => "Roti Bakar",       "kategori" => "Camilan", "harga" => 6000,  "tersedia" => true],
    ["ikon" => "🧋", "nama" => "Es Teh",           "kategori" => "Minuman", "harga" => 3000,  "tersedia" => true],
    ["ikon" => "🍊", "nama" => "Es Jeruk",         "kategori" => "Minuman", "harga" => 4000,  "tersedia" => false],
    ["ikon" => "☕", "nama" => "Kopi Hitam",       "kategori" => "Minuman", "harga" => 3000,  "tersedia" => true],
];
