-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 02.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemilos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `NIS` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tingkat` varchar(5) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_vote`
--

CREATE TABLE `log_vote` (
  `id_log_vote` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_vote`
--

INSERT INTO `log_vote` (`id_log_vote`, `value`, `date_add`) VALUES
(1, '1', '2023-11-07 10:47:13'),
(2, 'Endriana-Deni', '2023-11-07 10:50:04'),
(3, 'Tanszah-Cantika', '2023-11-07 11:22:01'),
(4, 'Tanszah-Cantika', '2023-11-07 11:22:05'),
(5, 'Tanszah-Cantika', '2023-11-07 11:22:07'),
(6, 'Tanszah-Cantika', '2023-11-07 11:22:09'),
(7, 'Endriana-Deni', '2023-11-07 11:22:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemilihan`
--

CREATE TABLE `tb_pemilihan` (
  `no` int(1) NOT NULL,
  `calon_kewatos` varchar(25) NOT NULL,
  `hasil_vote` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemilihan`
--

INSERT INTO `tb_pemilihan` (`no`, `calon_kewatos`, `hasil_vote`) VALUES
(1, 'Fasya-Sahla', 5),
(2, 'Endriana-Deni', 6),
(3, 'Tanszah-Cantika', 6);

--
-- Trigger `tb_pemilihan`
--
DELIMITER $$
CREATE TRIGGER `tr_log_vote` AFTER UPDATE ON `tb_pemilihan` FOR EACH ROW INSERT INTO log_vote (value, date_add) VALUES (old.calon_kewatos, now())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Indeks untuk tabel `log_vote`
--
ALTER TABLE `log_vote`
  ADD PRIMARY KEY (`id_log_vote`);

--
-- Indeks untuk tabel `tb_pemilihan`
--
ALTER TABLE `tb_pemilihan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log_vote`
--
ALTER TABLE `log_vote`
  MODIFY `id_log_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
