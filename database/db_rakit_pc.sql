-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 02:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rakit_pc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id_cart` varchar(40) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `no_pesanan` varchar(40) NOT NULL,
  `method_payment` varchar(30) NOT NULL DEFAULT 'Belum Di Pilih',
  `status` varchar(50) NOT NULL DEFAULT 'Belum Di Konfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id_cart`, `id_user`, `no_pesanan`, `method_payment`, `status`) VALUES
('05477f5374506cf866e9b5c6b76e8fb9', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'gopay', 'Terkonfirmasi'),
('1c4139857cada2f46b0d41af0da79406', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'ovo', 'Terkonfirmasi'),
('e659f95622e03c4639c831b77de322a6', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'dana', 'Terkonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komponen`
--

CREATE TABLE `tb_komponen` (
  `id_komponen` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `qty` int(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komponen`
--

INSERT INTO `tb_komponen` (`id_komponen`, `nama`, `type`, `jenis`, `kondisi`, `qty`, `harga`, `status`) VALUES
('123u01gahsdgdfa', 'Geforce RTX 2090', 'RTX 2090', 'VGA', 'Bagus', 15, '5000000', 'Tersedia'),
('1435f1haqzttg456w', 'Mouse Razer RZ-X0', 'GM-001', 'Mouse', 'Bagus', 20, '500000', 'Tersedia'),
('2hh1hhg277tasd', 'Corsair 600W', 'Gold Class', 'PSU', 'Bagus', 20, '2500000', 'Tersedia'),
('88192734hghgaas', 'AERO COOLER RGB', '120mm', 'Cooler Fan', 'Bagus', 100, '250000', 'Tersedia'),
('912gz9syy0q3jha', 'AERO COOLER Masive RGB', 'Liquid Cooler', 'CPU Cooler', 'Bagus', 30, '2500000', 'Tersedia'),
('98as9d9ahsidah', 'Thermaltake MicroCase S100TG', 'S100TG', 'Case', 'Bagus', 12, '1000000', 'Tersedia'),
('adfasd1231asd5', 'RAM Corsair 8GB Dual 3200Hz', 'DDR4', 'RAM', 'Bagus', 20, '1000000', 'Tersedia'),
('asfv78612j3hkja', 'I5-10900F', 'Intel', 'CPU', 'Bagus', 35, '1350000', 'Tersedia'),
('hgasdg1h2g31', 'MSI HG16Z Pro Edition', 'HG16Z', 'Motherboard', 'Bagus', 50, '1500000', 'Tersedia'),
('y1827nt4n8d7n17', 'RAM SUMSANG 8GB 2666Hz', 'SM700', 'RAM', 'Bagus', 15, '400000', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesanan` varchar(30) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `no_pesan` varchar(40) NOT NULL,
  `nama_komponen` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Di Konfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesanan`, `id_user`, `no_pesan`, `nama_komponen`, `harga`, `tgl_pesan`, `status`) VALUES
('0478010558a6055ce4a0f318c5d71b', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'Thermaltake MicroCase S100TG', '1000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('158063fb2c8d9780f73b4a7142b831', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'Geforce RTX 2090', '5000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('1f878185e3fee1d7651f65cd5d517e', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'I5-10900F', '1350000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('28b7bb4f803de7cc45db75b02bcf90', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'Corsair 600W', '2500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('2a5fa67e96018124a8a2e6db9e8e76', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'RAM Corsair 8GB Dual 3200Hz', '1000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('2b9dcee6e7f47cbd67cf03bb1cc065', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'RAM Corsair 8GB Dual 3200Hz', '1000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('37e45c717335c3bb3e9a879234a9b4', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'Corsair 600W', '2500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('412ef8b1af983d884bec63e7404ee9', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'AERO COOLER RGB', '250000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('4851f3d16ba825cca7beca8cf1c904', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'AERO COOLER Masive RGB', '2500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('4ce6917ae1862bc70b5243c21cc006', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'AERO COOLER Masive RGB', '2500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('535649266d8ea628b42db397373024', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'MSI HG16Z Pro Edition', '1500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('5457e66aef214b90af603a6b740385', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'MSI HG16Z Pro Edition', '1500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('64c4413009630bc0b33235fa456ea3', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'AERO COOLER RGB', '250000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('8879379847ba97a66395b27c58c98a', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'I5-10900F', '1350000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('8a872b914d513766b94ef7a8de273c', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'RAM SUMSANG 8GB 2666Hz', '400000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('accc41a02b06b72d9ad7b721bbab6b', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'Thermaltake MicroCase S100TG', '1000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('b3dad681ef6427b992bd8f94992c65', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'RAM Corsair 8GB Dual 3200Hz', '1000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('c26dbaf5a81760b9521b92974b8148', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'RAM SUMSANG 8GB 2666Hz', '400000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('c26fc643e71c97c165d6f9b73d944f', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'AERO COOLER Masive RGB', '2500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('c90d552c47d13ef2d9ace21b2445f4', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'AERO COOLER RGB', '250000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('ca80fa679458ab2d9c0d4b68b6d555', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'I5-10900F', '1350000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('d8224bc8f22eda009aa402b10502c1', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'Geforce RTX 2090', '5000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('db1be8878bcac548e5b034cbf16cf4', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'MSI HG16Z Pro Edition', '1500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('ed939823f22d2028fcb48410598811', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bc1e82038417c9140af42cd7206ef51e', 'Geforce RTX 2090', '5000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan ovo'),
('fabde4697f71ebd5a3ae68f667d9cf', 'c253fc3ecfe6b0b20a61d7606dc67b', '33f58313fdc4c402ab5a8ab834288e4f', 'Corsair 600W', '2500000', '0000-00-00 00:00:00', 'Pembayaran menggunakan dana'),
('fd4440e67fa346738c7f8f871e99fe', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'Thermaltake MicroCase S100TG', '1000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay'),
('fd4e4eb261ab053db323bb66e1c62d', 'c253fc3ecfe6b0b20a61d7606dc67b', '87fc0288bc4e3295a0933f11d20c8265', 'RAM Corsair 8GB Dual 3200Hz', '1000000', '0000-00-00 00:00:00', 'Pembayaran menggunakan gopay');

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id_report` varchar(30) NOT NULL,
  `id_user` varchar(30) DEFAULT NULL,
  `jenis` varchar(20) NOT NULL,
  `detail` mediumtext NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Not Done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`id_report`, `id_user`, `jenis`, `detail`, `status`) VALUES
('36e1f68f42dd5cd86d5f6a7bfd09cf', 'c253fc3ecfe6b0b20a61d7606dc67b', 'slow speed', 'Loadingnya lama banget kurang enak', 'Not Done'),
('f1e19920b8a3020d3e4695969cc384', 'c253fc3ecfe6b0b20a61d7606dc67b', 'bug', 'Gak bisa masuk ke page register bang tolong di fix', 'Not Done');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `gmail`, `no_tlp`) VALUES
('a197083a729ce4cdc6ad99bd893032', 'viki', 'vikiaec', '123', 'viki123@gmail.com', '0851023701291'),
('c253fc3ecfe6b0b20a61d7606dc67b', 'Hafizh', 'bladecs', '12345', 'bladecs86@gmail.com', '085720699706');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tb_komponen`
--
ALTER TABLE `tb_komponen`
  ADD PRIMARY KEY (`id_komponen`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD CONSTRAINT `tb_report_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
