-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 09:12 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `webboard_answer`
--

CREATE TABLE `webboard_answer` (
  `id_answer` int(11) NOT NULL,
  `id_webboard` int(11) NOT NULL,
  `ans_message` mediumtext NOT NULL,
  `ans_name` varchar(255) NOT NULL,
  `ans_email` varchar(255) NOT NULL,
  `ans_ip` varchar(255) NOT NULL,
  `ans_date_times` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `webboard_question`
--

CREATE TABLE `webboard_question` (
  `id_webboard` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date_times` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webboard_answer`
--
ALTER TABLE `webboard_answer`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `id_webboard` (`id_webboard`);

--
-- Indexes for table `webboard_question`
--
ALTER TABLE `webboard_question`
  ADD PRIMARY KEY (`id_webboard`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webboard_answer`
--
ALTER TABLE `webboard_answer`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webboard_question`
--
ALTER TABLE `webboard_question`
  MODIFY `id_webboard` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `webboard_answer`
--
ALTER TABLE `webboard_answer`
  ADD CONSTRAINT `webboard_answer_ibfk_1` FOREIGN KEY (`id_webboard`) REFERENCES `webboard_question` (`id_webboard`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
