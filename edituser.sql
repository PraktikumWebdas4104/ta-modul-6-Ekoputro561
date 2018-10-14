-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2018 pada 17.04
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edituser`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelolauser`
--

CREATE TABLE `kelolauser` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelolauser`
--

INSERT INTO `kelolauser` (`nim`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`, `password`) VALUES
('6701174106', 'Ricard Maul', '41-02', 'wanita', 'Badminton', 'Fakultas Komunikasi Bisnis', 'PBB', 'qwerty'),
('6701174107', 'Eko putro abdurrahman syakir', '41-01', 'pria', 'Renang', 'Fakultas Ekonomi Bisnis', 'asdflkasdflmdlfkm alkmfas', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `idPost` int(100) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`idPost`, `nim`, `nama`, `deskripsi`, `gambar`) VALUES
(0, '6701174107', 'Eko putro abdurrahman syakir', 'qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qweqwe qw', 'bb1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelolauser`
--
ALTER TABLE `kelolauser`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`idPost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
