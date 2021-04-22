-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 10:11 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040171`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `harga` varchar(100) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `pict` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `nama`, `size`, `harga`, `stock`, `pict`) VALUES
(1, 'Nike Air Jordan XXXXV PF', 'US 9-10', 'Rp.2.599.000', 5, 'p-1.jpg'),
(2, 'Nike Air Jordan 7 RETRO GC', 'US 10', 'Rp.2.999.000', 4, 'p-2.jpg'),
(3, 'Nike Air Jordan 1 MID SE', 'US 12', 'Rp.1.799.0000', 1, 'p-3.jpg'),
(4, 'Twisted Resort chuck 70', 'US 9.5-11', 'Rp.900.000', 10, 'p-4.jpg'),
(5, 'Converse x Telfar Chuck 70', '-', 'Rp.1.699.000', 0, 'p-5.jpg'),
(6, 'Industrial Glam chuck 70', 'US 11', 'Rp.850.000', 1, 'p-6.jpg'),
(7, 'Adidas Ultra 4D 5.0 Shoes', 'US 10.5', 'Rp.2.850.000', 1, 'p-7.jpg'),
(8, 'Adidas NMD_R1 Shoes', '-', 'Rp.2.000.000', 0, 'p-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'agung', '$2y$10$9H.byCob28HlM.0r1Vs2KOxAzlkcZ.4KDs3AbwtvkviK4Hhv2ErVG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
