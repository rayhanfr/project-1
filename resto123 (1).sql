-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 12:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto123`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah_menu` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_kategori_menu` int(11) NOT NULL,
  `nama_kategori_menu` varchar(30) NOT NULL,
  `photo_kategori_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_kategori_menu`, `nama_kategori_menu`, `photo_kategori_menu`) VALUES
(25, 'Sandwiches', 'spicy-italian.png'),
(26, 'Wraps', 'Chicken-Teriyaki-Salad.png'),
(27, 'Sides', 'png-transparent-oatmeal-raisin-cookies-chocolate-chip-cookie-peanut-butter-cookie-schmackary-s-baking-biscuit.png'),
(29, 'Drinks', 'colacola.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_kategori_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `deskripsi_menu` varchar(255) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `status_menu` enum('tersedia','habis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_kategori_menu`, `nama_menu`, `deskripsi_menu`, `harga_menu`, `status_menu`) VALUES
(7, 25, 'sdf', 'sdfsdfsdfsdfsdfsdf', 1000000, 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id_role_user` int(11) NOT NULL,
  `nama_role_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id_role_user`, `nama_role_user`) VALUES
(1, 'admin'),
(2, 'kasir'),
(3, 'Owner'),
(4, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `waktu_transaksi` datetime NOT NULL,
  `nomor_transaksi` varchar(30) NOT NULL,
  `grand_total_harga` int(11) NOT NULL DEFAULT 0,
  `nama_pembeli` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_transaksi` enum('selesai','onproses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `waktu_transaksi`, `nomor_transaksi`, `grand_total_harga`, `nama_pembeli`, `id_user`, `status_transaksi`) VALUES
(1, '2023-11-03 11:18:04', 'INV/2023/0001', 75000, 'udin', 1, 'selesai'),
(2, '2023-11-03 01:50:04', 'INV/2023/0002', 50000, 'udin', 1, 'selesai'),
(3, '2023-11-03 02:07:15', 'INV/2023/0003', 15000, 'asd', 1, 'selesai'),
(4, '2023-11-03 02:08:32', 'INV/2023/0004', 0, 'asd', 1, 'selesai'),
(5, '2023-11-03 02:09:43', 'INV/2023/0005', 15000, 'asd', 1, 'selesai'),
(6, '2023-11-03 03:41:42', 'INV/2023/0006', 15000, 'udin', 1, 'selesai'),
(7, '2023-11-10 07:30:32', 'INV/2023/0007', 35000, 'Retno', 1, 'selesai'),
(8, '2023-11-10 07:31:13', 'INV/2023/0008', 80000, 'Retno', 1, 'selesai'),
(9, '2023-11-10 09:03:28', 'INV/2023/0009', 15000, 'Retno', 1, 'selesai'),
(10, '2023-11-10 09:09:49', 'INV/2023/0010', 20000, 'gerald', 1, 'selesai'),
(26, '2023-11-17 10:15:58', 'INV/2023/0011', 15000, 'udin', 1, 'selesai'),
(27, '2023-11-17 10:18:22', 'INV/2023/0012', 20000, 'udin', 1, 'selesai'),
(28, '2023-11-17 10:19:49', 'INV/2023/0013', 15000, 'Retno', 1, 'selesai'),
(29, '2023-11-17 10:40:38', 'INV/2023/0014', 15000, 'gungun', 1, 'selesai'),
(30, '2023-11-24 08:29:51', 'INV/2023/0015', 165000, 'Retno', 1, 'selesai'),
(31, '2023-11-24 08:30:14', 'INV/2023/0016', 235000, 'asd', 1, 'selesai'),
(32, '2023-11-24 08:44:12', 'INV/2023/0017', 0, 'ffff', 1, 'onproses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_role_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_role_user`, `nama_user`, `username`, `password`, `profile_image`) VALUES
(1, 1, 'Administartor Aplikasi', 'admin', '$2y$10$iOuDMJROcUsLsR0wz7/Ml.PKNdsEkEROcs3BkKVbdJGe3NG9Fpfie', ''),
(2, 2, 'kasir toko123', 'kasir', '$2y$10$IedNGA19UX4XN0B8veY4Gur5b2iF4NIQaVeICIXmNSlQgTED7YTF6', ''),
(4, 1, 'Rayhan Wahyudin', 'ray', '$2y$10$9RsN5ENfI6kf55uice7CpOxg.MIW0nCYPZSTP1671p4cQglgljuFa', 'pngwing.com.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `transaksi` (`id_transaksi`),
  ADD KEY `barang` (`id_menu`);

--
-- Indexes for table `kategori_menu`
--
ALTER TABLE `kategori_menu`
  ADD PRIMARY KEY (`id_kategori_menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `kategori` (`id_kategori_menu`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_user` (`id_role_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kategori_menu`
--
ALTER TABLE `kategori_menu`
  MODIFY `id_kategori_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `barang` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `kategori_menu` FOREIGN KEY (`id_kategori_menu`) REFERENCES `kategori_menu` (`id_kategori_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_user` FOREIGN KEY (`id_role_user`) REFERENCES `role_user` (`id_role_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
