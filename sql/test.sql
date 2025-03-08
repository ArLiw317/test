-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2025 at 07:30 AM
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
  `cus_name` varchar(255) DEFAULT NULL,
  `cus_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`cus_ID`, `cus_number`, `cus_name`, `cus_status`) VALUES
(1, '240200001', 'Aphisek', 0),
(2, '240200002', '12ABC', 0),
(3, '240200003', 'Abcd', 1),
(4, '240200004', 'Steve', 1),
(5, '240200005', 'Billy', 1),
(6, '240200006', 'Tom', 1),
(7, '240200007', 'Krin', 1),
(8, '240200008', 'Dan', 1),
(9, '240200009', 'Ken', 1),
(10, '240200010', 'Musk', 1),
(11, '240200011', 'Jeff', 1),
(12, '240200012', 'Mark', 1),
(13, '240200013', 'Ellison', 1),
(14, '240200014', 'Bernard', 1),
(15, '240200015', 'Larry', 1),
(16, '240200016', 'Sergey', 1),
(17, '240200017', 'Warren', 1),
(18, '240200018', 'Ortega', 1),
(19, '240200019', 'Ballmer', 1),
(20, '240200020', 'Ant', 1),
(21, '240200021', 'Bird', 1),
(22, '240200022', 'Cat', 1),
(23, '240200023', 'Dog', 1),
(24, '240200024', 'ArLiw', 1),
(25, '240200025', 'Bootstrap', 1);

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
  MODIFY `cus_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
