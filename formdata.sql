-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 06:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_by_pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`id`, `name`, `qualification`, `mobile`, `email`, `reference`, `post`) VALUES
(17, 'RAHUL Saini', 'diploma', '9588103862', 'rahulkulchandu2@gmail.com', 'not any reference', 'WebDeveloper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
