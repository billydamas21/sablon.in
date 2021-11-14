-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2021 pada 19.53
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
-- Struktur dari tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `accounts`
--

INSERT INTO `accounts` (`id`, `Nama`, `Username`, `Password`) VALUES
(6, 'admin1', 'admin1', '$2y$10$aAky.W6JwybFlrmWIIiDAe3/xI11pRDhaOXCm.OiJFr4CLVychza.'),
(7, 'farul', 'admin2', '$2y$10$I0B1Z/.RDRo1dZmM9jGnAOQrGDZK2asTUNmzBKu3NfseWw2nAiDXa');

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

--
-- Dumping data untuk tabel `kelola_barang`
--

INSERT INTO `kelola_barang` (`id`, `Nama_barang`, `Jenis_barang`, `Jumlah`) VALUES
(88, 'Hitam', 'Warna', 20),
(89, 'Putih', 'Warna', 5),
(90, 'Merah', 'Warna', 6),
(91, 'Ungu', 'Warna', 7),
(92, 'Abu-Abu', 'Warna', 4),
(93, 'Orange', 'Warna', 11),
(94, 'Merah Putih', 'Bendera', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_riwayat`
--

CREATE TABLE `kelola_riwayat` (
  `id` int(11) NOT NULL,
  `Nama_barang` varchar(255) NOT NULL,
  `Jenis_barang` varchar(255) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelola_riwayat`
--

INSERT INTO `kelola_riwayat` (`id`, `Nama_barang`, `Jenis_barang`, `Jumlah`, `Status`, `Time`) VALUES
(1, 'Sablon Baju', 'Sablon', 12, 'INSERT', '2021-10-21'),
(2, 'Sablon Dasi', 'Sablon', 33, 'INSERT', '2021-10-21'),
(3, 'Warna Orange', 'Kain', 13, 'UPDATE', '2021-10-21'),
(64, 'Hitam', 'Warna', 3, 'INSERT', '2021-11-10'),
(65, 'Putih', 'Warna', 5, 'INSERT', '2021-11-10'),
(66, 'Merah', 'Warna', 6, 'INSERT', '2021-11-10'),
(67, 'Ungu', 'Warna', 7, 'INSERT', '2021-11-10'),
(68, 'Abu-Abu', 'Warna', 4, 'INSERT', '2021-11-10'),
(69, 'Orange', 'Warna', 11, 'INSERT', '2021-11-10'),
(70, 'Merah Putih', 'Bendera', 6, 'INSERT', '2021-11-11'),
(71, 'Hitam', 'Warna', 5, 'UPDATE', '2021-11-11'),
(72, 'Hitam', 'Warna', 7, 'UPDATE', '2021-11-11'),
(73, 'Hitam', 'Warna', 20, 'UPDATE', '2021-11-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_ulasan`
--

CREATE TABLE `kelola_ulasan` (
  `id` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Ulasan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelola_barang`
--
ALTER TABLE `kelola_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelola_riwayat`
--
ALTER TABLE `kelola_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelola_ulasan`
--
ALTER TABLE `kelola_ulasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kelola_barang`
--
ALTER TABLE `kelola_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `kelola_riwayat`
--
ALTER TABLE `kelola_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `kelola_ulasan`
--
ALTER TABLE `kelola_ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
