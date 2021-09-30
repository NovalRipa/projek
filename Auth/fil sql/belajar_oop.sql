-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 04:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbauth`
--

CREATE TABLE `tbauth` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbauth`
--

INSERT INTO `tbauth` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Ripaa', 'af@gsg.com', '$2y$10$Fv6s.GJuymVVmthrViYfjeDP1EOObAiaeJXgZz7u1UQi.TmiXgJAK'),
(2, 'Ripa', 'af@gsg', '$2y$10$TOTK2hzeJrypupPAwvDTs.LHcf/wuF5MWoMh2cQs3X2VNaCHzbqAK'),
(7, 'Ripa', 'rippa00@gmail.com', '$2y$10$qmjKDDJSVycc.V0mhTfCNuP38wr8Vs9JfMVKfvThr87foobRfqAQ6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbauth`
--
ALTER TABLE `tbauth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbauth`
--
ALTER TABLE `tbauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
