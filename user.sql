-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 06:46 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answercorrect` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answercorrect`) VALUES
(7, 'bhawna ', 5, 0),
(8, 'bhawna ', 5, 0),
(9, 'bhawna ', 5, 0),
(10, 'bhawna ', 5, 0),
(11, 'bhawna ', 5, 0),
(12, 'bhawna ', 5, 0),
(13, 'bhawna ', 5, 0),
(14, 'bhawna ', 5, 0),
(15, 'bhawna ', 5, 0),
(16, 'bhawna ', 5, 0),
(17, 'bhawna ', 5, 0),
(18, 'bhawna ', 5, 0),
(19, 'bhawna ', 5, 0),
(20, 'bhawna ', 5, 0),
(21, 'bhawna ', 5, 0),
(22, 'bhawna ', 5, 0),
(23, 'bhawna ', 5, 0),
(24, 'bhawna ', 5, 0),
(25, 'bhawna ', 5, 1),
(26, 'bhawna ', 5, 1),
(27, 'bhawna ', 5, 1),
(28, 'bhawna ', 5, 5),
(29, 'bhawna ', 5, 1),
(30, 'bhawna ', 5, 1),
(31, 'bhawna ', NULL, NULL),
(32, 'bhawna ', NULL, NULL),
(33, 'bhawna ', 5, 1),
(34, 'bhawna ', 5, 1),
(35, 'bhawna ', 5, 1),
(36, 'bhawna ', 5, 1),
(37, 'bhawna ', 5, 1),
(38, 'bhawna ', 5, 1),
(39, 'bhawna ', 5, 1),
(40, 'bhawna ', 5, 1),
(41, 'bhawna ', 5, 2),
(42, 'bhawna ', 5, 2),
(43, 'bhawna ', 5, 2),
(44, 'bhawna ', 5, 2),
(45, 'bhawna ', 5, 2),
(46, 'bhawna ', 5, 2),
(47, 'bhawna ', 5, 2),
(48, 'bhawna ', 5, 2),
(49, 'bhawna ', 5, 2),
(50, 'bhawna ', 5, 3),
(51, 'bhawna ', 5, 3),
(52, 'bhawna ', 5, 3),
(53, 'bhawna ', 5, 3),
(54, 'bhawna ', 5, 3),
(55, 'bhawna ', 5, 3),
(56, 'bhawna ', 5, 3),
(57, 'bhawna ', 5, 3),
(58, 'sunita', NULL, NULL),
(59, 'sunita', 5, 3),
(60, 'bhawna ', 5, 5),
(61, 'xyz', 5, 3),
(62, 'xyz', 5, 5),
(63, 'xyz', 5, 5),
(64, 'xyz', 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
