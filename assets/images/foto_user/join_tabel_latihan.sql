-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2023 pada 05.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `join_tabel_latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`) VALUES
(23013301, 'AHLLAN MAULANA JUSUFF ELICHWAN', 'Laki-laki', 'Bekasi', '2006-05-21', 'Jl. Jend. Sudirman Kav. 44-46, Jakarta 10210'),
(23013302, 'ALDODAMA SAPUTRA', 'Laki-laki', 'Bekasi', '2007-05-22', 'Bendungan Hilir, Tanah Abang. Jakarta Pu'),
(23013303, 'ANANDA SAVIER PRAMUSINTO', 'Laki-laki', 'Jakarta', '2006-05-23', 'Jl. Jend. Sudirman Kav. 5-6, Jakarta'),
(23013304, 'BAYU IKHSAN FADILAH', 'Laki-laki', 'Bekasi', '2008-05-24', 'Jenderal Sudirman Kav.71 Jakarta 12190'),
(23013305, 'CHALISA AZALIA HIDAYAH', 'Perempuan', 'Bandung', '2006-05-25', 'Jl. Jendral Sudirman No. 29, Jakarta'),
(23013306, 'DAFFA IRSYAD AL RASYID', 'Laki-laki', 'Bekasi', '2005-05-26', 'Jl Jend. Sudirman Kav. 24, Jakarta 12920'),
(23013307, 'DENI NUGRAHA', 'Laki-laki', 'Surabaya', '2006-05-27', 'Jl. Jendral Sudirman Kav 52-45, Jakarta Selatan'),
(23013308, 'DIMAS MUHAMMAD RIZKY WINDARTO', 'Laki-laki', 'Semarang', '2005-05-28', 'Jl. Braga No. 135 Bandung'),
(23013309, 'ERFANDA ZAKKY WIBOWO', 'Laki-laki', 'Depok', '2006-05-29', 'Jl. Tiang Bendera III No. 26-28-30, Jakarta 11230'),
(23013310, 'FARREL ATHA TSANI', 'Laki-laki', 'Tanggerang', '2004-05-30', 'Jl. Ir. H. Djuanda No. 137, Bandung'),
(23013311, 'SITI', 'Perempuan', 'Bogor', '2006-05-31', 'Jl. Pemuda No. 142, Semarang, Jawa Tengah 50132'),
(23013312, 'NUR', 'Perempuan', 'Bekasi', '2006-06-01', 'Jl. Imam Bonjol No. 18, Medan 20152');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nis`, `buku`) VALUES
(25102001, 23013301, 'Bahasa indonesia'),
(25102002, 23013302, 'Matematika'),
(25102003, 23013303, 'Ipas'),
(25102004, 23013304, 'Bahasa Inggris'),
(25102005, 23013305, 'Sejarah Indonesia'),
(25102006, 23013306, 'PPKN'),
(25102007, 23013307, 'PAI'),
(25102008, 23013308, 'Penjaskes'),
(25102009, 23013309, 'Pemrograman Berorientasi Objek'),
(25102010, 23013310, 'Basis Data');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
