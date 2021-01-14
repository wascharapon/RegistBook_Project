-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_system`
--

CREATE TABLE `admin_system` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_system`
--

INSERT INTO `admin_system` (`id`, `username`, `password`, `name`, `phone`, `email`, `status`) VALUES
(1, 'admin', 'pass', 'admin', '', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(254) NOT NULL,
  `date` date NOT NULL,
  `total_list` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `date`, `total_list`) VALUES
(24, '2021-01-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `id` int(10) NOT NULL,
  `get_no` varchar(10) NOT NULL COMMENT 'เลขที่รับ',
  `get_book` varchar(100) NOT NULL COMMENT 'หนังสือรับเลขที่หนังสือ',
  `date` date NOT NULL COMMENT 'ลงวันที่',
  `form` varchar(100) NOT NULL COMMENT 'จาก',
  `from_to` varchar(100) NOT NULL COMMENT 'ถึง',
  `titel` varchar(100) NOT NULL COMMENT 'เรื่อง',
  `another` varchar(100) NOT NULL COMMENT 'หมายเหตุ',
  `file_pdf` text NOT NULL,
  `recipient` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`id`, `get_no`, `get_book`, `date`, `form`, `from_to`, `titel`, `another`, `file_pdf`, `recipient`) VALUES
(18, '', '99999999', '2021-01-22', '7777777', '8888888', '666666666', '555555555', '1610624753.png', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_system`
--
ALTER TABLE `admin_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_system`
--
ALTER TABLE `admin_system`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
