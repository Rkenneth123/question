-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 06:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hospital_affliiation` varchar(255) DEFAULT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `prc` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `signature` varchar(255) DEFAULT NULL,
  `status` bigint(20) DEFAULT 0,
  `score` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `hospital_affliiation`, `specialty`, `email`, `prc`, `date_added`, `signature`, `status`, `score`) VALUES
(9, ' eqwe', 'qweqwe', ' ', ' qweqwe@gmail.com', 'qweqwe', '2023-05-25 13:58:05', NULL, 0, 8),
(10, ' eqwe', 'qweqwe', ' ', ' qweqwe@gmail.com', 'qweqwe', '2023-05-25 01:39:40', NULL, 0, NULL),
(11, ' asd', 'asd', ' ', ' asd@gmail.com', 'asdasd', '2023-05-25 01:43:17', NULL, 0, NULL),
(12, ' asd', 'asd', ' ', ' it.russelkennethregala@gmail.com', '22222', '2023-05-25 01:45:02', NULL, 0, NULL),
(13, ' ewqe', 'qwewqe', ' qweqwe', ' qweqwe@gmail.com', 'qwe', '2023-05-25 01:46:22', NULL, 0, NULL),
(15, ' 21312', '123123', ' 12313', ' 12312312321@gmail', '21321313213', '2023-05-25 01:48:20', NULL, 0, NULL),
(16, ' asd', 'sad', ' asdasdasd', ' qwe@gmail.com', 'sadasd', '2023-05-25 01:51:27', NULL, 0, NULL),
(17, ' asd', 'asdasd', ' qweq', ' it.russelkennethregala@gmail.com', 'qwe', '2023-05-25 02:01:25', NULL, 0, NULL),
(18, ' asd', 'asd', ' asdasd', ' asdasd@gmail.com', 'asd', '2023-05-25 02:02:57', NULL, 0, NULL),
(19, ' asd', 'asd', ' asdasd', ' it.russelkennethregala@gmail.com', 'sad', '2023-05-25 02:04:06', NULL, 0, NULL),
(20, ' ', '', ' ', ' ', '', '2023-05-25 02:04:09', NULL, 0, NULL),
(22, ' asd', 'asdas', ' asdasd', ' asd@gmail.com', 'asdasdasd', '2023-05-25 02:05:21', NULL, 0, NULL),
(24, ' sdadasd', 'wqe', ' 111', ' 13123@gmail.com', '123123', '2023-05-25 02:06:56', NULL, 0, NULL),
(25, ' nnn', 'mmm', ' kkk', ' kkk@gmail.com', 'jjjj', '2023-05-25 02:13:32', NULL, 0, NULL),
(26, ' asd', 'asdasd', ' asd', ' asd@gmail.com', 'asdsad', '2023-05-25 02:17:24', NULL, 0, NULL),
(27, ' asd', 'asdasd', ' sadasd', ' it.russelkennethregala@gmail.com', 'asdasdasd', '2023-05-25 02:18:28', NULL, 0, NULL),
(28, ' asdasd', 'asd', ' ', ' asd@gmail.com', 'asd', '2023-05-25 02:29:35', NULL, 0, NULL),
(30, ' ', '', ' ', ' ', '', '2023-05-25 02:37:09', NULL, 0, NULL),
(32, ' sad', 'asd', ' asdasd', ' sad@gmail.com', 'sad', '2023-05-25 02:43:40', NULL, 0, NULL),
(33, ' hhh', 'jjj', ' jjj', ' it.russelkennethregala@gmail.com', 'jjjjjj', '2023-05-25 02:51:27', NULL, 0, NULL),
(34, ' 2', '3', ' ', ' 4', '3', '2023-05-25 12:37:09', NULL, 0, NULL),
(35, ' asd', 'qwe', ' qe', ' it.russelkennethregala@gmail.com', 'qe', '2023-05-25 12:38:36', NULL, 0, NULL),
(36, ' asda', 'csac', ' sd', ' it.russelkennethregala@gmail.com', 'sadasd', '2023-05-25 12:39:57', NULL, 0, NULL),
(37, ' sdas', 'asas', ' scsa', ' it.russelkennethregala@gmail.com', 'dsfsfdf', '2023-05-25 12:42:01', NULL, 0, NULL),
(38, ' da', '313', ' dasd', ' it.russelkennethregala@gmail.com', 'adsadsa', '2023-05-25 12:44:42', NULL, 0, NULL),
(39, ' sdasd', 'asdsad', ' sadasd', ' it.russelkennethregala@gmail.com', 'sfsdfsdfs', '2023-05-25 12:45:34', NULL, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
