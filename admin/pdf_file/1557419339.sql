-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 04:47 PM
-- Server version: 10.1.38-MariaDB
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
(1, 'Socker', '12345', 'charita'),
(2, 'nana', '12345', 'nani'),
(3, 'Bas007', '123456789', 'Bas'),
(4, 'Ball555', '123456789', 'Computer');

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
(1, '11', 'ขก8888/ว666', '2019-04-05', 'ที่ว่าการอำเภอเมืองขอนแก่น', 'ผวจ.ขก', 'ขอส่งเอกสารราชการ', 'พีรวิชญ์'),
(2, '555555', 'ekjfefe', '2019-03-01', 'ที่ว่าการอำเภอเมืองขอนแก่น', 'ผวจ.ขก', 'ขอส่งเอกสารราชการ', 'พีรวิชญ์'),
(5, 'ขก555', 'สำนักงาน', '2019-04-23', 'ที่ว่าการอำเภอเมืองขอนแก่น', 'อำนวยการ', 'ส่งใบเสร็จรับเงิน', 'พีรวิชญ์'),
(6, '5trhtrhtrh', 'trhtrhtrh', '2019-04-11', 'rthrthtrh', 'rthtrhtr', 'htrhrthtr', 'trhhtrh'),
(7, 'rthtrh', 'rthtrhtrh', '2019-04-23', 'rtjtrj', 'jtrer', 'rehtee', 'rreyre'),
(8, 'adqwqw', 'wqfgregr', '2019-04-03', 'gregregreg', 'rehyy', 'rttrhrt', 'jujtyyt'),
(9, 'kyuu', 'rtytry', '2019-04-05', 'fgreg', 'erretreg', 'gergerg', 'hh544'),
(10, '5h65h4h5', 'g45g45', '2019-04-09', 'h45h53', '35h4h45', 'h54h545', '54y54'),
(11, '45y54y54', 'hh45', '2019-04-12', '45y5', '45h5445', 'h54h45', '546u6');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
