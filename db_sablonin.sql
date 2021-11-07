-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2021 pada 13.03
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sablonin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_barang`
--

CREATE TABLE `kelola_barang` (
  `id` int(11) NOT NULL,
  `Nama_barang` varchar(255) NOT NULL,
  `Jenis_barang` varchar(255) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_barang`
--

CREATE TABLE `riwayat_barang` (
  `id` int(11) NOT NULL,
  `Nama_barang` varchar(255) NOT NULL,
  `Jenis_barang` varchar(255) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_barang`
--

INSERT INTO `riwayat_barang` (`id`, `Nama_barang`, `Jenis_barang`, `Jumlah`, `Status`, `Time`) VALUES
(1, 'Sablon Baju', 'Sablon', 12, 'INSERT', '2021-10-21 00:35:58'),
(2, 'Sablon Dasi', 'Sablon', 33, 'INSERT', '2021-10-21 00:37:18'),
(3, 'Warna Orange', 'Kain', 13, 'UPDATE', '2021-10-21 00:46:19'),
(11, 'Kaos', 'Sablon', 11, 'INSERT', '2021-11-07 14:21:56'),
(12, 'Baju', 'Sablon', 12, 'INSERT', '2021-11-07 14:22:54'),
(32, 'Levis', 'Kain', 11, 'INSERT', '2021-11-07 15:19:15'),
(33, 'u', 'u', 1, 'INSERT', '2021-11-07 15:19:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(6, 'admin1', 'admin1', '$2y$10$aAky.W6JwybFlrmWIIiDAe3/xI11pRDhaOXCm.OiJFr4CLVychza.'),
(7, 'farul', 'admin2', '$2y$10$I0B1Z/.RDRo1dZmM9jGnAOQrGDZK2asTUNmzBKu3NfseWw2nAiDXa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelola_barang`
--
ALTER TABLE `kelola_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_barang`
--
ALTER TABLE `riwayat_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelola_barang`
--
ALTER TABLE `kelola_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `riwayat_barang`
--
ALTER TABLE `riwayat_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
