-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 09:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pic_tbl`
--

CREATE TABLE `pic_tbl` (
  `id` int(200) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic_tbl`
--

INSERT INTO `pic_tbl` (`id`, `photo`) VALUES
(22, '4.jpg'),
(23, '05.jpg'),
(24, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg_tbl`
--

CREATE TABLE `reg_tbl` (
  `id` int(200) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `proof` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_tbl`
--

INSERT INTO `reg_tbl` (`id`, `uname`, `password`, `cpassword`, `proof`, `email`) VALUES
(33, 'mukul', '25d55ad283aa400af464c76d713c07ad', '', '', ''),
(34, 'minaxi', '12345', '', '', ''),
(35, 'mukul1234', '12345678', '', '', ''),
(36, '123456', '123456', '', '', ''),
(37, 'mukul123', '123456789', '123456789', 'proof', 'email'),
(38, 'dffvfd', 'mukul123', 'mukul123', '123456789', 'mukulbedwa@gmail.com'),
(39, 'fasgsg', '123456789', '123456789', '1001025', 'mukulbedwa@gmail.com'),
(40, 'admin', 'admin', 'admin', '1004', 'mukulbedwa@gmail.com'),
(41, 'mukul', '123456789', '123456789', '123456789', 'mukulbedwa@gmail.com'),
(42, 'admin', 'admin', '4443453', '1004', 'mukulvedwa777@gmail.com'),
(43, 'admin', 'admin', 'geeebbbr', '124343', 'r@fdsfd.com'),
(44, 'admin', 'admin', 'sfagg', '12345687', 'mukulbedwa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pic_tbl`
--
ALTER TABLE `pic_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_tbl`
--
ALTER TABLE `reg_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pic_tbl`
--
ALTER TABLE `pic_tbl`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `reg_tbl`
--
ALTER TABLE `reg_tbl`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
