-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2025 pada 04.47
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peserta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `face_claim` varchar(10) NOT NULL,
  `devisi` varchar(10) NOT NULL,
  `has_voted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `face_claim`, `devisi`, `has_voted`) VALUES
(1, 'Kirana', 'Karina', 'Vocal', 0),
(3, 'Jareza', 'Yuqi', 'Vocal', 0),
(4, 'Shey', 'Jennie', 'Vocal', 0),
(5, 'Miella', 'Ahyeon', 'Vocal', 0),
(6, 'Heejin', 'Hyunbin', 'Rapper', 0),
(7, 'Karina', 'Ning ning', 'Vocal', 0),
(8, 'Louna', 'Minju', 'Vocal', 0),
(9, 'Zoeyy', 'Minji', 'Vocal', 0),
(10, 'Catherine', 'Yeji', 'Vocal', 0),
(11, 'Jexelle', 'Go Younjun', 'Vocal', 0),
(12, 'Axell', 'Ian', 'Vocal', 0),
(13, 'Dica', 'Iroha', 'Vocal', 0),
(14, 'Zee', 'Lesseo', 'Vocal', 0),
(15, 'Lavory', 'Yuqi', 'Vocal', 0),
(16, 'Viera', 'Winter', 'Vocal', 0),
(17, 'Nasabel', 'Sarang', 'Vocal', 0),
(18, 'Ken', 'Yeri', 'Vocal', 0),
(19, 'Glementine', 'Asa', 'Vocrap', 0),
(20, 'Loveichy', 'Minju', 'Vocal', 0),
(21, 'Grace', 'Juun', 'Vocrap', 0),
(22, 'Martha', 'Karina', 'Vocrap', 0),
(23, 'Navina', 'Yunjin', 'Vocal', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
