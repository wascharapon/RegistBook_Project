-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 04:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `myname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_system`
--

INSERT INTO `admin_system` (`id`, `user_name`, `user_pass`, `myname`) VALUES
(1, 'chacha', '12345', 'charita'),
(2, 'nana', '12345', 'nani'),
(3, 'kk', '12345', 'kk');

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
  `another` varchar(100) NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`id`, `get_no`, `get_book`, `date`, `form`, `from_to`, `titel`, `another`) VALUES
(3, '444444', 'ไรไม่รู้', '2019-04-02', '0o', 'รวย', 'รวย', 'รวย'),
(9, '5555555', '5555555555', '2019-04-09', '5555555555', '5555555555', '555555555', '5555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_system`
--
ALTER TABLE `admin_system`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
