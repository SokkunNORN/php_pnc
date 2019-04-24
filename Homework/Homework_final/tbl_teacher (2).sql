-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 01:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_teacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `tea_id` int(11) NOT NULL,
  `tea_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tea_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tea_age` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`tea_id`, `tea_name`, `tea_email`, `tea_age`) VALUES
(3, 'Admin', 'user@gmail.com', 20),
(6, 'Admin', 'sokkun.norn@gmail.com', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`tea_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `tea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
