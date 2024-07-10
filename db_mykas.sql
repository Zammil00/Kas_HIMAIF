-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2020 pada 01.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

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
  `keterangan` text DEFAULT NULL,
  `created` datetime NOT NULL,
  `id_user` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kas`
--

INSERT INTO `tb_kas` (`id_kas`, `jenis_kas`, `nominal`, `keterangan`, `created`, `id_user`) VALUES
(1, 'km', 400000, 'Uang Makan', '2020-11-28 13:35:49', '1'),
(2, 'kk', 300000, 'Beli Beras', '2020-11-28 13:36:05', '1'),
(3, 'kk', 6000, 'Beli Minuman', '2020-11-28 13:36:24', '1'),
(4, 'kk', 12000, 'Beli Nasi Sayur', '2020-11-28 13:37:07', '1'),
(5, 'kk', 40000, 'Beli Ayam', '2020-11-28 13:37:43', '1'),
(6, 'kk', 2000, 'Beli Permen', '2020-11-28 13:38:54', '1'),
(7, 'kk', 5000, 'Beli Kopi', '2020-11-28 13:39:10', '1'),
(8, 'kk', 6000, 'Beli Nasi Uduk', '2020-11-28 13:39:36', '1'),
(9, 'kk', 8000, 'Beli Mie Goreng', '2020-11-28 13:44:57', '1'),
(10, 'kk', 3000, 'Beli Es', '2020-11-28 13:45:36', '1'),
(11, 'kk', 20000, 'Beli Uduk', '2020-11-28 15:44:31', '1'),
(12, 'kk', 8000, 'Beli Makan', '2020-11-28 14:09:02', '1'),
(13, 'kk', 50000, 'Beli Kuota', '2020-11-30 04:02:26', '1'),
(14, 'kk', 27000, 'Beli Nasi', '2020-11-30 04:02:48', '1'),
(15, 'kk', 6000, 'Beli Sunligt + Sabun', '2020-11-30 04:03:16', '1'),
(16, 'kk', 38000, 'Beli Jajan', '2020-11-30 04:03:50', '1');

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
(28, '2020-11-25 17:34:23', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1'),
(29, '2020-11-25 17:43:14', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1'),
(30, '2020-11-25 17:46:02', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1'),
(31, '2020-11-27 10:21:50', '', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', '1'),
(32, '2020-11-27 11:05:04', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1'),
(33, '2020-11-27 11:05:24', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1'),
(34, '2020-11-28 08:41:36', '', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', '1'),
(35, '2020-11-28 11:34:26', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1'),
(36, '2020-11-28 19:16:28', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1'),
(37, '2020-11-29 22:10:20', '', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', '1'),
(38, '2020-11-30 03:19:49', '', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36', '1');

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
(1, 'Fajar', 'fajar@gmail.com', '123', 'admin');

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
  MODIFY `id_kas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_ketlog`
--
ALTER TABLE `tb_ketlog`
  MODIFY `id_ketlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
