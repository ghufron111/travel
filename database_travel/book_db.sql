-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 03:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL,
  `cost` varchar(255) NOT NULL,
  `status` enum('Belum Konfirmasi','Berhasil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `cost`, `status`) VALUES
(75, 'test', 'user4@test.com', '0896664646464', 'kudus', 'Paris', 2, '2023-06-05', '2023-06-08', '18000000', 'Berhasil'),
(76, 'test123', 'user2@user.com', '08912456789', 'kudus', 'Paris', 1, '2023-06-05', '2023-06-10', '15000000', 'Berhasil'),
(77, 'Tamami', 'user1@user.com', '08912456789', 'kudus', 'Bali', 123, '2023-06-01', '2023-06-06', '61500000', 'Berhasil'),
(78, 'test123', 'user1@user.com', '0896665332776', 'kudus', 'Bali', 1, '2023-06-06', '2023-06-08', '200000', 'Belum Konfirmasi'),
(79, 'user1', 'user1@user.com', '089666472378', 'kudus', 'Bali', 1, '2023-06-10', '2023-06-13', '300000', 'Belum Konfirmasi'),
(80, 'user1', 'user1@user.com', '089666472378', 'Jepara', 'Raja Ampat', 2, '2023-06-10', '2023-06-13', '900000', 'Berhasil');

-- --------------------------------------------------------

--
-- Table structure for table `tb_destinasi`
--

CREATE TABLE `tb_destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `nm_destinasi` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_destinasi`
--

INSERT INTO `tb_destinasi` (`id_destinasi`, `nm_destinasi`, `harga`) VALUES
(1, 'Bali', 100000),
(2, 'Gunung Bromo', 200000),
(3, 'Raja Ampat', 150000),
(4, 'Masjid Menara', 150000),
(5, 'Paris', 3000000),
(8, 'Surga', 200000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(16) NOT NULL,
  `tipe` enum('ADMIN','USER','SUPER ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`username`, `email`, `nama`, `phone`, `password`, `tipe`) VALUES
('adm123', 'adm123@gmail.com', 'adm123', '082345678910', 'adm123', 'ADMIN'),
('admin2', 'admin2@admin.com', 'admin2', '0896665332776', 'admin2', 'ADMIN'),
('admin345', 'admin54321@gmail.com', 'admin345', '0896664646464', 'adm1234', 'ADMIN'),
('admin', 'TEST@TEST.COM', 'TEST123', '089234242', 'admin', 'SUPER ADMIN'),
('user1', 'user1@user.com', 'user1', '0896664646464', 'user1', 'USER'),
('user2', 'user2@user.com', 'user2', '08912456789', 'user2', 'USER'),
('user6', 'user6@gmail.com', 'user6', '089666472378', 'user6', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_destinasi`
--
ALTER TABLE `tb_destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tb_destinasi`
--
ALTER TABLE `tb_destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
