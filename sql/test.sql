-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 04:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `cus_ID` int(11) NOT NULL,
  `cus_number` varchar(9) DEFAULT NULL,
  `cus_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`cus_ID`, `cus_number`, `cus_name`) VALUES
(1, '240200001', 'aphisek'),
(2, '240200002', 'John'),
(3, '240200003', 'Tony'),
(4, '240200004', 'Steve'),
(5, '240200005', 'Billy'),
(6, '240200006', 'Tom'),
(7, '240200007', 'Krin'),
(8, '240200008', 'Dan'),
(9, '240200009', 'Ken'),
(10, '240200010', 'Musk'),
(11, '240200011', 'Jeff'),
(12, '240200012', 'Mark'),
(13, '240200013', 'Ellison'),
(14, '240200014', 'Bernard'),
(15, '240200015', 'Larry'),
(16, '240200016', 'Sergey'),
(17, '240200017', 'Warren'),
(18, '240200018', 'Ortega'),
(19, '240200019', 'Ballmer'),
(20, '240200020', 'Ant'),
(21, '240200021', 'Bird'),
(22, '240200022', 'Cat'),
(23, '240200023', 'Dog'),
(24, '240200024', 'ArLiw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`cus_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `cus_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
