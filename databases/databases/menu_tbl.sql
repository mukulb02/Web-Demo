-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 09:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items_tbl`
--

CREATE TABLE `menu_items_tbl` (
  `id` int(200) NOT NULL,
  `items` varchar(250) NOT NULL,
  `items_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_items_tbl`
--

INSERT INTO `menu_items_tbl` (`id`, `items`, `items_path`) VALUES
(4, 'Gallary', 'gallary.php'),
(5, 'About', 'about.php'),
(7, 'Home', 'index.php'),
(8, 'About', 'Avout.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items_tbl`
--
ALTER TABLE `menu_items_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_items_tbl`
--
ALTER TABLE `menu_items_tbl`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
