-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 04:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `no` int(4) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hanphone` varchar(25) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`no`, `nama`, `email`, `hanphone`, `pesan`) VALUES
(1, 'aku', 'aku@gmail.com', 'aku', 'aku'),
(2, 'esed', 'er@gmail.com', '09876543', 'iuyt'),
(4, 'tes', 'tes@gmail.com', '1', 'a'),
(6, 'aku', 'aku@gmail.com', '123', 'svd'),
(7, 'ebt', 'tes@gmail.com', '123', 's'),
(8, 'tes', 'tes@gmail.com', '12', '23vef');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `name`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(3, 'usera', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `hanphone` varchar(15) NOT NULL,
  `pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_p` varchar(20) NOT NULL,
  `jumlah_p` int(4) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `email`, `nama_p`, `jumlah_p`, `ket`) VALUES
(2, 'a@gmail.com', 'ak', 2, 'jkk');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(4) NOT NULL,
  `nama_p` varchar(30) NOT NULL,
  `harga_p` int(15) NOT NULL,
  `stok_p` int(4) NOT NULL,
  `spesifikasi_p` varchar(500) NOT NULL,
  `gambar_p` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_p`, `harga_p`, `stok_p`, `spesifikasi_p`, `gambar_p`) VALUES
(3, 'Elena', 100000, 10, 'Bahan  : Katun Salur + Bordir\r\nUkuran : All Size\r\n- Lingkar Dada : 100 cm\r\n- Panjang : 73 cm<br>\r\n- Full Kancing<br>\r\n- Berat : 500 gr<br>\r\n- Asuransi : Opsional<br>', 'image1.jpg'),
(4, 'Luna', 70000, 8, 'Bahan : Katun Salur + Bordir Ukuran\r\n- Lingkar Dada : 100 cm - Panjang : 73 cm\r\n- Full Kancing\r\n- Berat : 400 gr\r\n- Asuransi : Opsional', 'image2.jpg'),
(5, 'Giselle', 85000, 10, 'Bahan : Katun Salur + Bordir Ukuran\r\n- Lingkar Dada : 100 cm - Panjang : 73 cm\r\n- Full Kancing\r\n- Berat : 300 gr\r\n- Asuransi : Opsional', 'image3.jpg'),
(6, 'Sherina', 90000, 9, 'Bahan : Katun Salur + Bordir Ukuran\r\n- Lingkar Dada : 100 cm - Panjang : 73 cm\r\n- Full Kancing\r\n- Berat : 500 gr\r\n- Asuransi : Opsional', 'image4.jpg'),
(7, 'Eliz', 100000, 20, 'Bahan : Katun Salur + Bordir Ukuran\r\n- Lingkar Dada : 100 cm - Panjang : 73 cm\r\n- Full Kancing\r\n- Berat : 400 gr\r\n- Asuransi : Opsional', 'image5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
