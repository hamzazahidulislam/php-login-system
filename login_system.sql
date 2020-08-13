-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 12:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_users`
--

CREATE TABLE `my_users` (
  `id` int(11) NOT NULL,
  `full_Name` varchar(255) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email_addr` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active_status` varchar(20) NOT NULL,
  `signup_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_users`
--

INSERT INTO `my_users` (`id`, `full_Name`, `userName`, `email_addr`, `pwd`, `token`, `active_status`, `signup_Date`) VALUES
(66, 'Jakir', 'jakir', 'technicianjakir@gmail.com', '2d47436625a76b11e5eca1b94e55e2aa98d5f725', '53ea616dc94c1adf501fa23c86ea620c654d3d05', 'Active', '2019-12-07 16:25:07'),
(70, 'hamza', 'hamza', 'hamzazahidulislam444@gmail.com', '2d47436625a76b11e5eca1b94e55e2aa98d5f725', '5d1a8395ae19fe039d385374dfaafe2a9a2fa402', 'Inactive', '2020-05-13 22:04:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_users`
--
ALTER TABLE `my_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_users`
--
ALTER TABLE `my_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
