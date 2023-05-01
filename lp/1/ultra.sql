-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 07:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultra`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(2855) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(2855) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'plus', 'f8b07224336cde4013b09f92cf66a115');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `user_name` varchar(2855) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(2855) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(2855) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2855) COLLATE utf8_unicode_ci NOT NULL,
  `baddress` varchar(2544) COLLATE utf8_unicode_ci NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_name`, `subject`, `user_email`, `content`, `baddress`, `modified_date`, `modified_time`) VALUES
(10075, 'Sachin avachar ', '8263842303', '', 'Auarangabad  waluj pandharpur ranjangav', '999 - (20 Capsules)+ 149 Shipping Charge', '2020-07-11 03:57:08', '2020-07-11 03:57:08'),
(10089, 'abc', '1111111111', '12121212', 'd', 'ID', '2020-08-09 23:37:23', '2020-08-09 18:07:23'),
(10090, 'hello', '78885555555', '45454', 'india', '4555', '2020-08-16 16:38:51', '2020-08-16 11:08:51'),
(10091, 'abc', '1111111111', '12121212', 'd', '4555', '2020-08-16 23:23:45', '2020-08-16 17:53:45'),
(10092, 'abc', '1111111111', '12121212', 'd', '1599  (40 Capsules)+ RS.149 Shipping Charge', '2020-08-16 23:28:05', '2020-08-16 17:58:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10093;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
