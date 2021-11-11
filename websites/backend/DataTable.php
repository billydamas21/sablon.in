<?php
// memanggil function query
require 'Functions.php';
// Query Data akun
$KelolaAkun = query("SELECT * FROM users");
$JumlahAkun = count(query("SELECT * FROM users"));

// Query Data + Pagination barang
$JumlahDataPerHalamanBarang = 10;
$JumlahDataBarang = count(query("SELECT * FROM kelola_barang"));
$JumlahHalamanBarang = ceil($JumlahDataBarang / $JumlahDataPerHalamanBarang);
$HalamanAktifBarang = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$AwalDataBarang = ($JumlahDataPerHalamanBarang * $HalamanAktifBarang) - $JumlahDataPerHalamanBarang;
$Barang = query("SELECT * FROM kelola_barang LIMIT $AwalDataBarang, $JumlahDataPerHalamanBarang");

// Query Data + Pagination Riwayat
$JumlahDataPerHalamanRiwayat = 10;
$JumlahDataRiwayat = count(query("SELECT * FROM riwayat_barang"));
$JumlahHalamanRiwayat = ceil($JumlahDataRiwayat / $JumlahDataPerHalamanRiwayat);
$HalamanAktifRiwayat = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$AwalDataRiwayat = ($JumlahDataPerHalamanRiwayat * $HalamanAktifRiwayat) - $JumlahDataPerHalamanRiwayat;
$Riwayat = query("SELECT * FROM riwayat_barang LIMIT $AwalDataRiwayat, $JumlahDataPerHalamanRiwayat");
