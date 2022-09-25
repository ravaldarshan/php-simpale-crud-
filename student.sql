-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 02:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(100) NOT NULL,
  `fiastname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `phoneno` int(10) NOT NULL,
  `hobbies` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profilepic` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `fiastname`, `lastname`, `email`, `password`, `role`, `gender`, `dob`, `phoneno`, `hobbies`, `address`, `profilepic`) VALUES
(24, 'Hodge', 'Carr', 'fysiwyk@mailinator.c', 'Pa$$w0rd!', 'admin', 'female', '2002-08-23', 0, 'acting', 'Debitis exercitation', '1653395888.'),
(25, 'Hodge', 'Carr', 'fysiwyk@mailinator.c', '', 'admin', 'female', '2002-08-23', 0, 'acting', 'Debitis exercitation', '2.webp'),
(26, 'Hodge', 'Carr', 'fysiwyk@mailinator.c', '', 'admin', 'female', '2002-08-23', 0, 'acting', 'Debitis exercitation', '2.webp'),
(27, 'Hodge', 'Carr', 'fysiwyk@mailinator.c', '', 'admin', 'female', '2002-08-23', 0, 'acting', 'Debitis exercitation', '3.webp'),
(28, 'Hodge', 'Carr', 'fysiwyk@mailinator.c', '', 'admin', 'female', '2002-08-23', 0, 'acting', 'Debitis exercitation', '3.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
