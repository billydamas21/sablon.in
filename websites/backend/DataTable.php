<?php
// memanggil function query
require 'Functions.php';

// Query Data akun + Jumlah data

$KelolaAkun = query("SELECT * FROM accounts");
$JumlahDataAkun = count(query("SELECT * FROM accounts"));


$Barang = query("SELECT * FROM kelola_barang");
$JumlahDataBarang = count(query("SELECT * FROM kelola_barang"));


$Riwayat = query("SELECT * FROM kelola_riwayat");
$JumlahDataRiwayat = count(query("SELECT * FROM kelola_riwayat"));


// $Ulasan = query("SELECT * FROM kelola_ulasan");
// $JumlahDataRiwayat = count(query("SELECT * FROM kelola_ulasan"));
