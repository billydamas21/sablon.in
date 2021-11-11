<?php
// memanggil function query
require 'Functions.php';

// Query Data akun + Jumlah data

$KelolaAkun = query("SELECT * FROM users");
$JumlahDataAkun = count(query("SELECT * FROM users"));


$Barang = query("SELECT * FROM kelola_barang");
$JumlahDataBarang = count(query("SELECT * FROM kelola_barang"));


$Riwayat = query("SELECT * FROM riwayat_barang");
$JumlahDataRiwayat = count(query("SELECT * FROM riwayat_barang"));


$Ulasan = query("SELECT * FROM kelola_ulasan");
$JumlahDataRiwayat = count(query("SELECT * FROM kelola_ulasan"));
