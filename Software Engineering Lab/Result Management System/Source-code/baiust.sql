-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 06:43 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baiust`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `std_id` int(11) NOT NULL,
  `present_semister` varchar(255) NOT NULL,
  `cse_101` varchar(255) NOT NULL,
  `cse_102` varchar(255) NOT NULL,
  `cse_103` varchar(255) NOT NULL,
  `cse_104` varchar(255) NOT NULL,
  `cse_105` varchar(255) NOT NULL,
  `cse_106` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`std_id`, `present_semister`, `cse_101`, `cse_102`, `cse_103`, `cse_104`, `cse_105`, `cse_106`, `gpa`) VALUES
(1103005, '4/1', 'A+', 'A+', 'A+', 'A', 'A', 'A+', '3.92'),
(1103038, '4/1', 'A', 'A+', 'A', 'A+', 'A+', 'A', '3.78'),
(1103050, '4/1', 'a', 'a', 'a', 'a', 'a-', 'a+', '3.90'),
(1103051, '4/1', 'D', 'B', 'C', 'B', 'B', 'D', '2.44'),
(1103071, '4/1', 'A', 'A+', 'A+', 'C', 'C', 'B-', '3.33'),
(1123044, '4/1', 'D', 'A', 'A', 'A', 'A', 'C', '3.12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1123045;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
