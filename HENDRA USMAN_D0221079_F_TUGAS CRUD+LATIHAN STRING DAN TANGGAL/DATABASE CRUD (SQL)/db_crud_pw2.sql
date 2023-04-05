-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 03:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud_pw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `asal_barang` varchar(25) NOT NULL,
  `jumlah_barang` int(4) NOT NULL,
  `satuan_barang` varchar(15) NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `tanggal_disimpan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `kode_barang`, `nama_barang`, `asal_barang`, `jumlah_barang`, `satuan_barang`, `tanggal_diterima`, `tanggal_disimpan`) VALUES
(16, 'B-2023-001', 'Balpoint', 'pembelian', 1, 'Pcs', '2023-04-01', '2023-04-01 13:53:09'),
(17, 'B-2023-002', 'White Boarder', 'pembelian', 2, 'Unit', '2023-04-01', '2023-04-01 13:53:16'),
(31, 'B-2023-003', 'Table', 'Pembelian', 12, 'Unit', '2023-04-01', '2023-04-01 13:53:25'),
(32, 'B-2023-004', 'Printer', 'Hibah', 1, 'Unit', '2023-04-01', '2023-04-01 13:53:31'),
(34, 'B-2023-005', 'AC', 'Pembelian', 5, 'Unit', '2023-04-01', '2023-04-01 13:53:39'),
(35, 'B-2023-006', 'Bookshelf', 'Pembelian', 3, 'Unit', '2023-04-01', '2023-04-01 13:53:46'),
(39, 'B-2023-007', 'Komputer', 'Pembelian', 10, 'Unit', '2023-04-02', '2023-04-02 13:16:14'),
(40, 'B-2023-008', 'Speaker', 'Pembelian', 2, 'Unit', '2023-04-02', '2023-04-02 13:16:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
