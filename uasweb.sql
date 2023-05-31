-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2023 pada 06.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `noUjian` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgllahir` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `noHp` int(13) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`noUjian`, `nama`, `tempat`, `tgllahir`, `alamat`, `noHp`, `jurusan`, `prodi`, `email`) VALUES
(3357888, 'kresna', 'jakarta', '2004/11/04', 'Sogo', 2147483647, 'Teknik', 'Teknologi Informasi', 'kresnabayu164@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`email`, `username`, `password`) VALUES
('kresnabayu164@gmail.com', 'kresna', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`noUjian`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
