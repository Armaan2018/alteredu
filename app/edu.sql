-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 01:06 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'avater',
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `cell` varchar(15) NOT NULL,
  `created_at` int(100) NOT NULL,
  `updated_at` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `uname`, `email`, `pass`, `role`, `photo`, `status`, `cell`, `created_at`, `updated_at`) VALUES
(1, 'armaan', 'armaan', 'armaan@gmail.com', '$2y$10$Lq8PmMaB4rw/0FtlmIlO4OTAeVzhKsAzzNp6UmHmsrfA8f1BiydKe', 'admin', 'avater.jpg', 'active', '01521151', 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
