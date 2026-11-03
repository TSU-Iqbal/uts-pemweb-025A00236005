<?php
declare(strict_types=1);

// data.php - sumber data menu kantin (tanpa database, cukup array)

$namaSitus = "Kantin Mas Iqbal";

// Array multidimensi: array berisi array asosiatif
// Setiap item punya 4 atribut: nama, kategori, harga, tersedia
$daftarItem = [
    ["nama" => "Nasi Telur",       "kategori" => "Makanan", "harga" => 8000,  "tersedia" => true],
    ["nama" => "Nasi Ayam Geprek", "kategori" => "Makanan", "harga" => 12000, "tersedia" => true],
    ["nama" => "Mie Goreng",       "kategori" => "Makanan", "harga" => 7000,  "tersedia" => false],
    ["nama" => "Gorengan",         "kategori" => "Camilan", "harga" => 1000,  "tersedia" => true],
    ["nama" => "Roti Bakar",       "kategori" => "Camilan", "harga" => 6000,  "tersedia" => true],
    ["nama" => "Es Teh",           "kategori" => "Minuman", "harga" => 3000,  "tersedia" => true],
    ["nama" => "Es Jeruk",         "kategori" => "Minuman", "harga" => 4000,  "tersedia" => false],
    ["nama" => "Kopi Hitam",       "kategori" => "Minuman", "harga" => 3000,  "tersedia" => true],
];
