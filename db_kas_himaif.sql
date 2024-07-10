-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2024 pada 17.24
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mykas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas`
--

CREATE TABLE `tb_kas` (
  `id_kas` int(25) NOT NULL,
  `jenis_kas` varchar(100) DEFAULT NULL,
  `nominal` int(50) DEFAULT NULL,
  `keterangan` text,
  `created` datetime NOT NULL,
  `id_user` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kas`
--

INSERT INTO `tb_kas` (`id_kas`, `jenis_kas`, `nominal`, `keterangan`, `created`, `id_user`) VALUES
(24, 'km', 2500000, 'Dari Feri', '2024-07-10 22:09:36', '1'),
(25, 'km', 2500000, 'Dari Haikal', '2024-07-10 22:06:01', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ketlog`
--

CREATE TABLE `tb_ketlog` (
  `id_ketlog` int(11) NOT NULL,
  `log_masuk` varchar(30) DEFAULT NULL,
  `log_keluar` varchar(30) NOT NULL,
  `device` varchar(255) DEFAULT NULL,
  `id_user` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ketlog`
--

INSERT INTO `tb_ketlog` (`id_ketlog`, `log_masuk`, `log_keluar`, `device`, `id_user`) VALUES
(43, '2024-07-10 20:46:15', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '2'),
(44, '2024-07-10 21:59:08', '', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/15.0.0 Mobile/15A5370a Safari/602.1', '2'),
(45, '2024-07-10 22:04:46', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '1'),
(46, '2024-07-10 22:07:37', '', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/15.0.0 Mobile/15A5370a Safari/602.1', '1'),
(47, '2024-07-10 22:10:06', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '1'),
(48, '2024-07-10 22:10:18', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `akses`) VALUES
(1, 'zammil', 'zammil@gmail.com', 'zammil', 'admin'),
(2, 'labil', 'labil@gmail.com', 'labil', 'admin'),
(3, 'haykal', 'haykal@gmail.com', 'haykal', 'admin'),
(4, 'ferizal', 'ferizal@gmail.com', 'ferizal', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `tb_ketlog`
--
ALTER TABLE `tb_ketlog`
  ADD PRIMARY KEY (`id_ketlog`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `id_kas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_ketlog`
--
ALTER TABLE `tb_ketlog`
  MODIFY `id_ketlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
