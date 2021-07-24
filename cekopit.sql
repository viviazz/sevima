-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2021 pada 10.44
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cekopit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_vaksin`
--

CREATE TABLE `jenis_vaksin` (
  `id` int(50) NOT NULL,
  `vaksin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_vaksin`
--

CREATE TABLE `member_vaksin` (
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member_vaksin`
--

INSERT INTO `member_vaksin` (`nik`, `nama`, `email`, `alamat`, `password`) VALUES
(2133333, 'astaghfirullah', 'aliviaviazzz@gmail.com', 'malang', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2133334, 'astaghfirullah', 'aliviaviazzz@gmail.com', 'malang', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(321456789, 'via', 'aliviaunopsg4@gmail.com', 'malang', '$2y$10$ar4GXxlvMbyREOar/zPZpeCPNiM8.DVU0Ot6TLI368D5CPRhWpTj2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$byRT4gYQoESRwfvvvPMXGee4xxP72KnQwzjV1yBvv.8mQXgSACOOu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member_vaksin`
--
ALTER TABLE `member_vaksin`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
