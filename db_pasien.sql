-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jul 2022 pada 19.31
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pasien`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_peserta_vaksin`
--

CREATE TABLE `daftar_peserta_vaksin` (
  `id_peserta` int(11) NOT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `jenis_faskes` varchar(100) DEFAULT NULL,
  `nama_faskes` varchar(100) DEFAULT NULL,
  `dependesi` varchar(100) DEFAULT NULL,
  `nik` char(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `umur` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_peserta_vaksin`
--

INSERT INTO `daftar_peserta_vaksin` (`id_peserta`, `provinsi`, `kabupaten`, `kecamatan`, `jenis_faskes`, `nama_faskes`, `dependesi`, `nik`, `nama`, `jk`, `umur`, `tgl_lahir`, `no_hp`, `alamat`) VALUES
(2, 'Jawa Barat', 'Bogor', 'Ciomas', 'RUSD Jagakarsa', 'Yuki', 'Rp. 500000', '3374001', 'Budi', 'Laki - Laki', '30', '2022-07-05', '0812345587', 'Merdeka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_peserta_vaksin`
--
ALTER TABLE `daftar_peserta_vaksin`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_peserta_vaksin`
--
ALTER TABLE `daftar_peserta_vaksin`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
